<?php 
session_start();
include_once('admin/connect_db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BIT Sindri, Dhanbad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/admin.css" rel="stylesheet">
  <link href="assets/css/flickity.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/mystyle.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><span>BIT</span>Sindri</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a><span>Departments</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="chemical.php">Chemical</a></li>
              <li><a href="civil.php">Civil</a></li>
              <li><a href="cse.php">Computer Science</a></li>
              <li><a href="electrical.php">Electrical</a></li>
              <li><a href="ece.php">Electronics & Communication</a></li>
              <li><a href="it.php">Information Technology</a></li>
               <li><a href="mach.php">Mechanical</a></li>
              <li><a href="metal.php">Metallurgy</a></li>
              <li><a href="mining.php">Mining</a></li>
              <li><a href="production.php">Production</a></li>
            </ul>
          </li>

          <li><a href="gallery.php">Gallery</a></li>

          <li><a href="placement.php">Placement</a></li>

          <li><a href="#">About Us</a></li>

          <li><a href="contact.php">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="https://twitter.com/BITSindriDhn" target="_blank" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="https://www.youtube.com/watch?v=f11ztkxMV2c&list=PLqg4qtOzBL9ktpK33aihWGxBkkng_zSIv&index=1&t=10s" target="_blank" class="youtube"><i class="bu bi-youtube"></i></a>
        
        <a href="login.php"><i class="bu bi-power"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

<main id="main">