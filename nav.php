<?php 
  session_start();
 
?>
<nav>
    <div class="menu-icon">
      <span class="fa fa-bars"></span>
    </div>

   <a href="dashboard.php"> <img src="../images/inspireart_logo_tr.png" alt="" class="logo"></a>

    <div class="nav-items">
      <li><a href="dashboard.php">Home</a></li>
      <li class="nav-item dropdown fw-bolder">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown ">
          <li><a class="dropdown-item" href="cat_search.php?id=1">Graphic Design</a></li>
          <li><a class="dropdown-item" href="cat_search.php?id=2">Programming And Tech</a></li>
          <li><a class="dropdown-item" href="cat_search.php?id=3">Digital Marketing</a></li>
          <li><a class="dropdown-item" href="cat_search.php?id=4">Music & Audio</a></li>
          <li><a class="dropdown-item" href="cat_search.php?id=5">Bussiness</a></li>
          <li><a class="dropdown-item" href="cat_search.php?id=6">Other</a></li>
        </ul>
      </li>
      <li><a href="#footer">About</a></li>
      <li><a href="gig.php">All Gigs</a></li>
      <?php
        
        if(!isset($_SESSION['username']))
        {
      ?>
      
      <li><a href="../Join page/join.php" class="btn">Sign Up</a></li>
      <li><a href="../Log in page/login.php" class="btn">Log In</a></li>
      <?php }?>
      <?php
        if(isset($_SESSION['username']))
        {
      ?>
      
      <li><a href="../dashboard/logout.php" class="btn"> <?php echo $_SESSION['username'] ?>, Log Out</a></li>
      <li><a href="myprofile.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"><i class="fa fa-user-circle user-icon" aria-hidden="true"></i></a>
          
    </li>
      <?php }?>
    </div>
    <div class="search-icon">
      <span class="fa fa-search"></span>
    </div>
    <div class="cancel-icon">
      <span class="fa fa-times"></span>
    </div>
    <form action="filter.php" method = "post">
      
      <input type="search" name = "searchbar" class="search-data" placeholder="Search" required >
      <button type="submit" class="fa fa-search"></button>

    </form>
  </nav>