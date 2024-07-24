<?php
include 'DAO.php';


if (isset($_GET['id'])) {

    // Get $id from the URL
     $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    try {

        $db = connect();
 
            $deleteLI = $db->prepare('DELETE FROM library_info WHERE resource_id = :id');
            // Execute it here
            $deleteLI->execute(['id'=>$id]);

            $deleteRI = $db->prepare('DELETE FROM resource_info WHERE resource_id = :id');
            // Execute it here
            $deleteRI->execute(['id'=>$id]);

            $deleteR = $db->prepare('DELETE FROM resource WHERE id = :id');
            // Execute it here
            $deleteR->execute(['id'=>$id]);


        
    } catch (Exception $e) {
        // An exception was thrown, let's set the exception's message
        $type = 'error';
        $message = 'Exception message: ';
    }
    // Close the database connection
    $delete = null;
    $db = null;

    // Re-redirect back to the main tiers page, pass the message and message type as GET variables
    header('location:' . '../view/resources.php?type=' . $type . '&message=' . $message);

}