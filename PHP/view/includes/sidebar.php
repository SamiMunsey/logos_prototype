    <!--Side Navigation Menu (contains copied code) -->

<div class="sidenav">
  <button class="dropdown-btn" name="activate__profile_dropdown">Admin User <img src="media/profile-logo.png" id="homelogo" style="margin-left: 60px">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">View profile</a>
    <a href="#">Toggle dark mode</a>
    <a href="login.php">Log out</a>
  </div>
  <hr>
  <a href="home.php">Home</a>
  
  <button class="dropdown-btn" name="activate_resource_dropdown">Resources <img src="media/Arrow-down.svg.png" id="downarrow">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="forms/resource_record.php">+ New resource record</a>
    <a href="resources.php">Manage resources</a>
      <button class="dropdown-btn" name="activate_genre_dropdown">Genres <img src="media/Arrow-down.svg.png" id="downarrow">
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="create_genre.php">+ New genre</a>
        <a href="genres.php">Manage genres</a>
      </div>
  </div>
  <button class="dropdown-btn" name="activate_borrowers_dropdown">Borrowers <img src="media/Arrow-down.svg.png" id="downarrow">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="borrower_record.php">+ New borrower record</a>
    <a href="borrowers.php">Manage borrowers</a>
        <button class="dropdown-btn" name="activate_groups_dropdown">Groups <img src="media/Arrow-down.svg.png" id="downarrow">
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="group_record.php">+ New group record</a>
            <a href="groups.php">Manage Groups</a>
        </div>
    <a href="#">Restrictions</a>
    <a href="#">Reporting</a>
    <a href="#">Defunct Borrowers Bin</a>
  </div>
  <button class="dropdown-btn" name="activate_circulate_dropdown">Circulate <img src="media/Arrow-down.svg.png" id="downarrow">
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="issue.php">Issue</a>
    <a href="return.php">Bulk return</a>
  </div>
  <a href="../CC/index.php">Help</a>
</div>

<?php include "../model/dropdown_script.php" ?>