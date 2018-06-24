<?php   
//include("includes/session.php");
session_start();
include("includes/db_connection.php");
include("includes/functions.php"); ?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title>SpoonBook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">      
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

                            <!-- resource for modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <?php
                                    if (isset($_SESSION['account_type']) and $_SESSION['account_type'] == "customer") {
                                       echo "<a href='logout.php'>Logout</a>";
                                       echo  '<a href="change_password.php">Change Password</a>';
                                       echo '<a href="edit_customer.php">Edit Account</a>';
                                       }elseif (isset($_SESSION['account_type']) and $_SESSION['account_type'] == "company") {
                                       echo "<a href='logout.php'>Logout</a>";
                                       echo  '<a href="change_password.php">Change Password</a>';
                                       echo  '<a href="" data-toggle="modal" data-target="#myModal">Create Package</a>';
                                       echo '<a href="edit_company.php">Edit Account</a>';
                                       echo '<a href="edit_package.php">Edit Package</a>';
                                       echo '<a href="data.php">Data Report</a>';
                                       
                                       }
                                     
                                    else{

                                        echo "<a href='login.php'>Login</a>";
                                        echo "<a href='option.php'>Sign Up</a>";
                                        echo "<a href='forgot_password.php'>Forgot Password</a>";
                                    }

                                    ?>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="index.php"><img src="images/company.png" title="SpoonBook" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li><a href="contact-us.php">Contact</a></li>
                                        <li><a href="package_list.php">Package List</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </header>
            
            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>The #1 catering advertiser in Valenzuela</h1>
                            <p>Make your dream event happen
                            <br><br>Find out the right caterer for your event.</p>
                            <a href="about-us.php">Read More</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>All Legit Companies</h1>
                            <p>Fast Response,
                            <br><br>Inquire Now!!</p>
                            <!-- <a href=".php">More Details</a> -->
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Find your ideal Catering Company</h1>
                            <p>Create an account and 
                            <br><br>inquire</p>
                            <!-- <a href="single-post.html">Get Ready</a> -->
                        </div>
                      <img src="images/slide3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>