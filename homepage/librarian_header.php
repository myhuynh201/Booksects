<?php
session_start();
require_once "../config.php";


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Librarian Homepage </title>


        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/nprogress.css" rel="stylesheet">
        <link href="css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <img src="images/logo.png" alt="logo" class="header" id="header" width="231" height="58">
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="images/user.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>

                                <h2><?php echo htmlspecialchars($_SESSION["username"]);?></h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br/>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="librarian.php"><i class="fa fa-home"></i> Home</a>

                                    </li>
                                    <li><a href="librarian_info.php"><i class="fa fa-user"></i> My Account</a>

                                    </li>
                                    <li><a href="display_student_info.php"><i class="fa fa-list"></i> Student Info</a>

                                    </li>
                                    <li><a href="add_book.php"><i class="fa fa-book"></i> Add Books</a>

                                    </li>
                                    <li><a href="checkout.php"><i class="fa fa-edit"></i> Book Checkout</a>
                                        
                                    </li>
                                    <li><a href="return_book.php"><i class="fa fa-undo"></i> Book Return</a>

                                    </li>
                                    <li><a href="../reset-password.php"><i class="fa fa-key" ></i> Change Password</a>



                                    </li>

                                </ul>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <img src="images/user.png" alt="">
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->