<?php require_once "db.php"; ?>
<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title><?=$title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../front_end_assets/css/fontawesome-all.min.css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <!-- <div class="topbar-left">
                        <a href="index.php" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div> -->

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            
                            <!-- php code for dynamic profile pic -->
                <!-- I am using photo from db beceuse it will work fine if we change photo after login -->

                <?php
                    $email_for_photo = $_SESSION['user_email'];
                    $query_for_photo = $dbcon->query( "SELECT photo FROM users WHERE email='$email_for_photo'");
                    $photo_from_db   = $query_for_photo -> fetch_assoc();
                 ?>

                            <img src="image/users/<?=$photo_from_db['photo']?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?= $_SESSION['user_name'] ?></a> </h5>
                        <p class="text-muted"><?=$_SESSION['user_email']?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="index.php">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="users.php"><i class="fas fa-users-cog"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $result = $dbcon->query("SELECT COUNT(*) AS total_users FROM users");
                                        $row = $result->fetch_assoc();
                                        echo $row['total_users']; 
                                        ?>
                                    </span> 
                                    <span> Users </span> 
                                </a>
                                
                            </li>

                            <li>
                                <a href="about_me_main.php">
                                    <i class="far fa-address-card"></i>  <span> About me </span>
                                </a>
                            </li>

                            <li>
                                <a href="education.php">
                                    <i class="fas fa-book-reader"></i> 
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $education_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM education_informations");
                                        $education_row = $education_result->fetch_assoc();
                                        echo $education_row['total_field']; 

                                        ?>
                                    </span>  
                                <span> Education </span>
                                </a>
                            </li>

                            <li>
                                <a href="services.php">
                                    <i class="fas fa-wrench"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $services_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM services");
                                        $services_row = $services_result->fetch_assoc();
                                        echo $services_row['total_field']; 

                                        ?>
                                    </span>  
                                    <span> Services </span>
                                </a>
                            </li>

                            <li>
                                <a href="contact_information.php">
                                    <i class="fas fa-envelope-square"></i> <span> Contact Information</span>
                                </a>
                            </li>

                             <li>
                                <a href="all_testimonials.php">
                                    <i class="fas fa-comments"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $testimonial_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM testimonials");
                                        $testimonial_row = $testimonial_result->fetch_assoc();
                                        echo $testimonial_row['total_field']; 

                                        ?>
                                    </span> 
                                    <span> Testimonials</span>
                                </a>
                            </li>

                             <li>
                                <a href="statistics.php">
                                    <i class="fas fa-print"></i><span> Statistics</span>
                                </a>
                            </li>

                             <li>
                                <a href="best_works.php">
                                    <i class="fi-air-play"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $best_works_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM my_best_works");
                                        $best_works_row = $best_works_result->fetch_assoc();
                                        echo $best_works_row['total_field']; 

                                        ?>
                                    </span> 
                                    <span> My Best Works</span>
                                </a>
                            </li>

                             <li>
                                <a href="all_guest_message.php">
                                    <i class="fas fa-users-cog"></i>
                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $guest_message_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM guest_messages");
                                        $guest_message_row = $guest_message_result->fetch_assoc();
                                        echo $guest_message_row['total_field']; 

                                        ?>
                                    </span>
                                     <span> Guest Message</span>
                                </a>
                            </li>

                             <li>
                                <a href="logo.php">
                                    <i class="fas fa-lightbulb"></i>

                                    <span class="badge badge-danger badge-pill float-right">
                                        <?php
                                        $logo_result = $dbcon->query("SELECT COUNT(*) AS total_field FROM logo");
                                        $logo_row = $logo_result->fetch_assoc();
                                        echo $logo_row['total_field']; 

                                        ?>
                                    </span>

                                    <span> logo</span>
                                </a>
                            </li>

                            
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="image/users/<?=$photo_from_db['photo']?>" alt="user" class="rounded-circle"> <span class="ml-1"><?=$_SESSION['user_name']?> <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="profile.php" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    

                                    
                                   
                                    <!-- item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to Kufa admin panel !</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->