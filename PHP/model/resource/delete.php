<?php

include "../../controller/DAO.php";


try {

    $dao = new Dao;



    $dao->delete('library_info', 'resource_id', 'id');
    $dao->delete('resource_info', 'resource_id', 'id');
    $dao->delete('resource', 'id', 'id');

    $dao = NULL;

    $message = "Successful delete!";

} catch (Exception $e) {

    $message = 'Error: ' . $e->getMessage();
    $message = trim(preg_replace('/\s+/', ' ', $message));

}

// Re-redirect back to main Resources page    

    header('location:' . '../../view/resources.php? ' . $message);

