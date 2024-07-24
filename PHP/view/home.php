<?php include "../model/resource/read.php"; 
    $title = "Home";
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - Home</title>
    <link rel="stylesheet" href="includes/logos.css">
</head>


<body class="sidebar_body">

            <!-- Header -->
        
    <?php include_once "includes/header.php" ?>


            <!-- Sidebar -->

    <?php include "includes/sidebar.php" ?>

            <!-- Search the Catalogue -->

    <div class="searchcontainer">
        <form>
            <img src="media/mag.svg.png" id="homelogo"><input type="search" class="large-search-box" value="Search the catalogue">
        </form>
        <button>Filter search results</button>
        <button>Advanced search</button>
    </div> 

            <!-- View Search Results -->

    <div class="searchresults">
        
        <table style="width: 100%">
            <tr id="grey_row">
                <td id="thirty">Title</td>
                <td id="thirty">Author</td>
                <td id="ten">Location</td>
            </tr>
            <?php foreach ($resources as $resource) : ?>
                <tr style="text-align: center">
                    <td><?= $resource['title'] ?></td>                    
                    <td><?= htmlentities($resource['author']) ?></td>                      
                    <td><?= htmlentities($resource['location']) ?></td>
                </tr>
            <?php endforeach; ?>
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