<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - Edit borrower record</title>
    <link rel="stylesheet" href="../includes/logos.css">
</head>

<body>

<!-- Home icon -->

<a href="../home.php" name="navigate_to_site_home"><img src="../media/Home-icon.svg.png" id="homelogo"></a> 

<!-- -->


   

<h1>Record of [Borrower Name]</h1>

<br/><br/>

<!-- top nav bar -->

<div class="central-box">
    <div class='bar-nav'>
        <div class='box2'>
        <a href="borrower_record.php"><p>Borrower information</p></a>
        </div>
        <div class='box1'>
        <a name="you_are_here"><p>Borrower's loans</p></a>
        </div>

    </div>
</div>
<br/><br/>

<!-- Page content -->

<h2 style="text-align: center"> Current loans </h2>

    <table class="drawn-table"  style="width:100%">
        <tr style="background-color: #ededeb;">
            <td style="width:10%">Barcode</td>
            <td  style="width:40%">Title</td>
            <td style="width:10%">Date due</td>
            <td style="width:10%">Days overdue</td>
        </tr>
    </table>

        


        



<button class="back-button" onclick="javascript:history.back()">Save and exit</button>

<!-- Footer -->

<div id="bottom">
    <?php include "../includes/footer.php" ?>
</div>

<!-- End of Footer -->

</body>
</html>
