<?php

    include "../controller/DAO.php";

    $dao = new Dao;

    $borrowers = $dao->readArray('borrower');

    