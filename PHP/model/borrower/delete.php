<?php

include "../../controller/DAO.php";


try {

    $dao = new Dao;


    $dao->delete('borrower', 'id', 'id');

    $dao = NULL;

} catch (Exception $e) {

    $message = 'Error: ' . $e->getMessage();
    $message = trim(preg_replace('/\s+/', ' ', $message));

}

// Re-redirect back to main Resources page    

    header('location:' . '../../view/borrowers.php? ' . $message);

