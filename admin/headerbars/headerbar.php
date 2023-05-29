<?php
include '../config/connection.php';
session_start();

if(!isset($_SESSION['userID'])){
header("Location: ../logins/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>  
 

  <!-- Google Fonts -->
 
</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="../dashboards/dashboard.php" class="logo d-flex align-items-center">
    <img src="../assets/img/Logo Only.png" alt="">
    <span class="d-none d-lg-block">Executive Console</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<nav class="header-nav ms-auto" >
  <ul class="d-flex align-items-center">



  

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../assets/img/Logo_Login.png" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"> Brenley Ian Robles</span>
      </a><!-- End Profile Iamge Icon -->



      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
        <h4> 10003242423 </h4>
          <span>contact.christines@gmail.com<br>ADMIN</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-prof   ile.php">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="../config/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span> Sign Out </a></span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

</body>
</html>