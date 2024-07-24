<?php 

    include "../controller/DAO.php";
    
    $title = "Circulate - Issue resources";
?>


<!DOCTYPE html>
<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - Issue resources</title>
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
        <div class='box1'>
        <a name="you_are_here"><p>Issue</p></a>
        </div>
        <div class='box2'>
        <a href="return.php"><p>Bulk return</p></a>
        </div>

    </div>
</div>


<div  class="find-borrower-div">
    <img src="media/mag.svg.png" id="homelogo"> <input type="search" value="Find a borrower" class="small-search-box">
</div>
  
        <!-- Borrower and Loans cards -->

<div class="central-box" style="margin: 50px">
    <div class='group-section'>

            <!-- Borrower Card -->

        <div class='left-section'>
            <p class="mono" id="bold"> Borrower Card</p>
            <input type="text" value="[Borrower Name]">
            <br/>
            <p></p>
            <table cellspacing="0" cellpadding="0" style="width: 100%">
                <tr id="grey_row">
                    <td id="thirty">loans</td>
                    <td id="thirty">Overdues</td>
                    <td id="thirty">Days overdue</td>
                </tr>
                <tr>
                    <td><input type="text" value="#" style="width: 20px"></td>
                    <td><input type="text" value="#" style="width: 20px"></td>
                    <td><input type="text" value="#" style="width: 20px"></td>
                </tr>
                <tr>
                    <td colspan="5"><hr></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age" style="width: 50px">
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><hr></td>
                </tr>
                <tr id="grey_row">
                    <td colspan="3">Restrictions</td>
                </tr>
                <tr>
                    <td colspan="2">Restriction a</td>
                    <td><a href="#">Details</a></td>
                </tr>
                <tr>
                    <td colspan="2">Restriction b</td>
                    <td><a href="#">Details</a></td>
                </tr>

            </table>


        </div>
 
                <!-- Central section -->

        <div class="central-section">
            <br/><br/><br/><br/><br/><br/>
            <h1>→</h1>
        </div>

                <!-- Loan Card -->

        <div class="right-section">
            <p class="mono" id="bold">[borrower_name]'s Loans</p>
            <table style="width: 100%">
                <tr>
                </tr>
                <tr id="grey_row">
                    <td id="five">☐</td>
                    <td id="ten">Code</td>
                    <td id="thirty">Title</td>
                    <td id="ten">Issue date</td>
                    <td id="ten">Date due</td>
                </tr>
                <tr>
                    <td colspan="5" >
                        <button>Renew selected</button>
                        <button>Return selected</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                </tr>
            </table>
            <div id="bottom-aligned">
                <div id="bottom-aligned-content">
                    + New loan <img src="media/mag.svg.png" id="homelogo"> <input type="text" style="border-radius: 13px; padding: 5px" value="Search barcode or title">
                </div>
        </div>

    </div>
</div>
</div>

        <!-- Footer -->

<div id="bottom">
    <?php include "includes/footer.php" ?>
</div>

        <!-- End of footer -->


</body>
</html>