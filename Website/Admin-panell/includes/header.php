<?php

 session_start();
 $typ = $_SESSION["types"];
 if($typ != "admin" || empty($typ)){
    header("Location:../../login/login.php");
 }

 if(isset($_POST["logout"])){
    $_SESSION["types"]="null";
    header("Location:../../login/login.php");
 }

?>
<?php include('../includes/connection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>
    Bad Monkey Street Food 
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../css/material-dashboard.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/css/admin.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="body g-sidenav-show  bg-gray-200">
    <?php include ('sidebar.php')?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  