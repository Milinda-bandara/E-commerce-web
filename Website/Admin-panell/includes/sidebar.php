<?php
  $actPage = substr($_SERVER['SCRIPT_NAME'], strpos($_SERVER['SCRIPT_NAME'],"/")+41);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">

      <span class="ms-1 font-weight-bold text-white">Bad Monkey Street Food</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link text-white <?= $actPage == "index.php"? 'text-white bg-dark':''  ?>" href="../includes/index.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white <?= $actPage == "admins.php"? 'text-white bg-dark':''  ?>"  href="admins.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Admins</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white <?= $actPage == "customers.php"? 'text-white bg-dark':''  ?>" href="customers.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Customers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white  <?= $actPage == "foods.php"? 'text-white bg-dark':''  ?>" href="foods.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Foods</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= $actPage == "orders.php"? 'text-white bg-dark':''  ?> " href="orders.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Orders</span>
        </a>
      </li>
      

      
    </ul>
  </div>
  <div style="text-align: center;">
    <form action="index.php" method="post"><button class="btn btn-dark" type="submit" name="logout" value="Log out">Log Out</button></form>
  </div>
</aside>