<?php 

    include "../controller/DAO.php";
    
    $title = "Bulk return resources"; 
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - Bulk return resources</title>
    <link rel="stylesheet" href="includes/logos.css">
</head>

<body class="sidebar_body">

            <!-- Header -->


    <?php include_once "includes/header.php" ?>

            <!-- Sidebar -->

    <?php include "includes/sidebar.php" ?>

                <!-- Start of page content -->


        <!--  Top Nav Bar -->

<div class="central-box">
    <div class='bar-nav'>
        <div class='box2'>
        <a href="issue.php"><p>Issue</p></a>
        </div>
        <div class='box1'>
        <a  name="you_are_here"><p>Bulk return</p></a>
        </div>

    </div>
</div>

<div  class="find-borrower-div">
    <img src="media/mag.svg.png" id="homelogo">  <input type="search" value="Search barcode or title" class="small-search-box">
</div>

<div class="searchresults">
    
    <table style="width: 100%">
        <tr>Returns</tr>
        <tr id="grey_row">
            <td id="ten">Barcode</td>
            <td id="thirty">Title</td>
            <td id="ten">Date issued</td>
            <td id="ten">Date due</td>
            <td id="ten">Days overdue</td>                
            <td id="ten">Borrower code</td>
            <td id="thirty">Borrower name</td>
        </tr>
        <tr>
        </tr>
    </table>
    <br/>
</div>

        <!-- Footer -->

<div id="bottom">
    <?php include "includes/footer.php" ?>
</div>

        <!-- End of footer -->

</body>

</html>