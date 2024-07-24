<?php

    include "data/DAO.php";

    $genres = $dao->getResources();
    $resource_info = $dao->getResourceInfoTable();

    $title = "Genres";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logos - Manage Genres</title>
    <link rel="stylesheet" href="index.css">
</head>
<body class="sidebar_body">


             <!-- Sidebar -->

    <?php include "includes/sidebar.php" ?>

                <!-- Start of page content -->

            <!-- Header -->

        <?php include_once "includes/header.php" ?>

        <!-- Home icon -->

        <a href="home.php" name="navigate_to_site_home"><img src="media/Home-icon.svg.png" id="homelogo"></a> 

        <!-- -->

        </div>
        <div class="header-div">
            <h1 id="page-header">Resources</h1>
        </div>
    </header>

        <!-- View Error -->

    <?php if (!empty($_GET['type']) && ($_GET['type'] === 'success')) : ?>
        <div class='row'>
            <div class='alert alert-success'>
                Success! <?= $_GET['message'] ?>
            </div>
        </div>
    <?php elseif (!empty($_GET['type']) && ($_GET['type'] === 'error')) : ?>
        <div class='row'>
            <div class='alert alert-danger'>
                Error! <?= $_GET['message'] ?>
            </div>
        </div>
    <?php endif; ?>


            <!-- Search the Catalogue -->

    <div class="searchcontainer">
        <form>
            <img src="media/mag.svg.png" id="homelogo"><input type="search" class="large-search-box" value="Search the catalogue">
        </form>
        <button>Filter search results</button>
        <button>Advanced search</button>
    </div>

            <!-- Create new Record button -->

<div class="new-button">
    <a href="resource_record_new.php"><button id="new-resource-button">Create new resource record</button></a>
</div>

            <!-- View Search Results -->

    <div class="searchresults">
        
        <table style="width: 100%">
            <tr>Resources</tr>
            <tr id="grey_row">
                <td id="ten">ID</td>
                <td id="thirty">Title</td>
                <td id="thirty">Author</td>
                <td id="ten">Classification</td>
                <td id="ten">Location</td>
                <td colspan="2">Actions</td>
            </tr>
            <?php foreach ($resources as $resource) : ?>
            <tr style="text-align: center">                    
                <td><?php echo htmlentities($resource['id']) ?></td>                  
                <td><?= htmlentities($resource['title']) ?></td>                    
                <td><?php echo htmlentities($resource['author']) ?></td>                    
                <td><?= htmlentities($resource['classification']) ?></td>                     
                <td><?= htmlentities($resource['location']) ?></td> 
                <td><a href="resource_record_update.php?id=<?= htmlentities($resource['id']) ?>" role=button>Edit</a></td>
                <td><a href="dao-delete-resource.php?id=<?= htmlentities($resource['id']) ?>" role=button>Delete</a></td>
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