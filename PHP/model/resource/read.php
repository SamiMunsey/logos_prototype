<?php

    include "../controller/DAO.php";

    $dao = new Dao;

    $resources = $dao->getResources();

