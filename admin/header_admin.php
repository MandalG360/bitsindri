<?php 
session_start();
if(!isset($_SESSION['session_id'])){
    header("Location: ../index.php");
    die();
}

include_once('connect_db.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="../assets/img/favicon.png" rel="icon">
        <title>BIT Sindri, Dhanbad</title>
        <link href="../assets/css/admin.css" rel="stylesheet" />
        <link href="../assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">BIT Sindri, Dhanbad</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <span style="float: right; color: #fff;">Welcome: <b><?php
                        echo $_SESSION['session_name']; ?></b></span>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Controll Pannel Board</div>

                            <a class="nav-link" href="dashboard.php"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> Dashboard </a>

                        <?php if($_SESSION['session_desn_id']!=2) { ?>
                            <a class="nav-link" href="notice.php"><div class="sb-nav-link-icon"><i class="fas fa-file"></i></div> Publish Notice </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Upload
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="slider.php">Slider Images</a>
                                    <a class="nav-link" href="achievement.php">Achievement Images</a>
                                    <a class="nav-link" href="gallery.php">Gallery Images</a>
                                    <a class="nav-link" href="videos.php">College Videos</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="teacher_contact.php"><div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>Teachers Contact </a>
                            <a class="nav-link" href="message.php"><div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div> Messages </a>
                        <?php } ?>
                        
                        </div>
                    </div>
                </nav>
            </div>