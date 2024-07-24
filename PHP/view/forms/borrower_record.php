<?php 

    include "../../model/borrower/check-create_or_update.php";
    
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - <?=$title ?></title>
    <link rel="stylesheet" href="../includes/logos.css">
</head>

<body>

<!-- Home icon -->

<a href="../home.php" name="navigate_to_site_home"><img src="../media/Home-icon.svg.png" id="homelogo"></a> 

<!-- -->
   

<h1><?=$title ?></h1>

<br/><br/>

<!-- top nav bar -->

<div class="central-box">
    <div class='bar-nav'>
        <div class='box1'>
        <a name="you_are_here"><p>Borrower information</p></a>
        </div>
        <div class='box2'>
        <a href="borrower_loans.php"><p>Borrower's loans</p></a>
        </div>

    </div>
</div>
<br/><br/>

<!-- Page content -->

<form method='post' action='../../model/borrower/create_update.php'>

 <table class="record-table">
        <tr style="background-color: #ededeb;">
            <td style="padding: 20px; width: 180px;"><label for="id">Borrower ID</label></td>
            <td><input type="number" name="id" style="padding: 15px; width: 100px;" value='<?= isset($borrower['id']) ? htmlentities($borrower['id']) : '' ?>'></td>
        </tr>
        <tr>
            <td><label for="forename">Legal forename</label></td>
            <td><input type="text" name="forename" class="medium-input" value='<?= isset($borrower['forename']) ? htmlentities($borrower['forename']) : '' ?>'></td>
        </tr>
        <tr>
            <td><label for="preferred_name">Preferred forename</label></td>
            <td><input type="text" name="preferred_name" class="medium-input" value='<?= isset($borrower['preferred_name']) ? htmlentities($borrower['preferred_name']) : '' ?>'></td>
        </tr>
        <tr>
            <td><label for="surname">Surname</label></td>
            <td><input type="text" name="surname" class="medium-input" value='<?= isset($borrower['surname']) ? htmlentities($borrower['surname']) : '' ?>'></td>
        </tr>
        <tr>
            <td><label for="gender">Gender</label></td>
            <td>
            <select name="gender" id="gender" class="medium-input">
                <option value="Female">Female</option>                
                <option value="Female">Male</option>
                <option value="Female">Other</option>
            </select>   
            </td>
        </tr>
        <tr>
            <td><label for="dob">Date of birth</label></td>
            <td><input type="date" name="dob"  value='<?= isset($borrower['dob']) ? htmlentities($borrower['dob']) : '' ?>'></td>
        </tr>
        <tr>
            <td><label for="age">Age</label></td>
            <td>
                <input name="age" type="number" min="0"  class="x-short-input">
            </td>
        </tr>
    
    </table>
    <button type="submit"  class="back-button" name="submit">Submit</button>

</form>
        


<!-- Footer -->

<div id="bottom">
    <?php include "../includes/footer.php" ?>
</div>

<!-- End of Footer -->

</body>
</html>
