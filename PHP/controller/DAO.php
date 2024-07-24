<?php


function connect() {
    $hostname = 'localhost';
    $dbname = 'logos';
    $username = 'postgres';
    $password = 'postgres';
    $dsn = "pgsql:host=$hostname;dbname=$dbname";

    try {
      return new PDO($dsn, $username, $password);
    } catch(Exception $e) {
      echo $e->getmessage();
    }
}


class Dao {

   function __construct() {

         $hostname = 'localhost';
         $dbname = 'logos';
         $username = 'postgres';
         $password = 'postgres';

        $dsn = "pgsql:host=$hostname;dbname=$dbname";  
        try {
            $this->db = new PDO($dsn, $username, $password);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    //--------- 1 & 3: CREATE or UPDATE ---------//

//pkColumn is for the primary key; xPkColumn is for the primary key of the
//main table with which the record is primarily associated with
    function create_update($tableName, $columnNames, $pkColumnName, $xPkColumnName) {


        //Step 1: Create the query statement and pass it to the query for preparation 

        $columnList = "";
        $valuesList = "";
        $updateList = "";
        

        $columns = $columnNames;
        $table = $tableName;
        $pkColumn = $pkColumnName;
        $xPkColumn = $xPkColumnName;

        foreach ($columns as $column) {
            $columnList .= "$column, ";
            $valuesList .= ":$column, ";
            $updateList .= "$column = :$column,";
        }
        
        $columnList .= "$pkColumn";
        $valuesList .= ":$xPkColumn";        
        $updateList = substr($updateList, 0, -1);

                
        $queryStmt = "INSERT INTO $table ($columnList) VALUES ($valuesList) ON CONFLICT ($pkColumn) DO UPDATE SET $updateList";
        $query = $this->db->prepare($queryStmt);


    //Step 2: Prepare the bind message and use it to execute the query

       

        $bindArray = array();

        foreach ($columns as $column) {
            //assign each variable to the array using array_merge()
                //first must declare each variable or it throws an error
            ${$column} = $column;
            $bindArray = array_merge($bindArray, [${$column} => $_POST[$column] ?? '']);
        }

        ${$xPkColumn} = $xPkColumn;
        $bindArray = array_merge($bindArray, [${$xPkColumn} => $_POST[$xPkColumn] ?? '']);

        $query->execute($bindArray);
        

    }



   //----------- 2: READ ----------//

    function read($table, $comparator_field) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $queryStmt = "SELECT * FROM $table WHERE $comparator_field = :id";
        $query = $this->db->prepare($queryStmt);
        $query->execute(['id'=>$id]);
        return $query->fetch(PDO::FETCH_ASSOC);


        $query = null;
        $this->db = null;

    }

    function readArray($table) {
        $query = "SELECT * FROM $table";
        $query = $this->db->query($query);         
        $data = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $data;

        $query = null;
        $this->db = null;
      }

    function getResources() {
          $resourceQuery = $this->db->query('SELECT * FROM resource LEFT JOIN library_info ON resource.id = library_info.resource_id LEFT JOIN resource_info ON resource_info.resource_id = library_info.resource_id');

          return $resourceQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    

   //---------- 4: DELETE ---------//


    function delete($tableName, $pkColumnName, $xPkColumnName) {

        $table = $tableName;
        $pkColumn = $pkColumnName;
        $xPkColumn = $xPkColumnName;

        if (isset($_GET[$xPkColumn])) {

            // Get $id from the URL
           $id = filter_input(INPUT_GET, $xPkColumn, FILTER_SANITIZE_NUMBER_INT);

            $query = "DELETE FROM $table WHERE $pkColumn = :$pkColumn";

            $deleteStmt = $this->db->prepare($query);
            // Execute it here
            $deleteStmt->execute([$pkColumn=>$id]);

        }
    }

} 
//----------End of Dao class---------------//