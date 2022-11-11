<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Hospital Mangement System</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/itsc.ico" type="image/x-icon">
<link rel="icon" href="images/itsc.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/storestyle.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>


<!-- Page Wrapper -->
<div id="wrap">
  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.php"><img src="images/AGTT-TCM.jpg" alt="" style="height: 70px; width: 100px"></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>+65 98764657
              </p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>agtt@tcm.com.sg</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>Raffles Place <br>
             Singapore</p>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <li><a href="about.php">About</a></li>            
            <li><a href="patientappointment.php">Appointment </a></li>
            <li><a href="storeindex.php">Store </a></li>
            <li><a href="contactus.php">Contact </a></li>
            <li><a href="maps.php">Our outlets </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="doctorlogin.php">Doctor</a></li>
                <li><a href="patientlogin.php">Patient </a></li>
                
              </ul>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>