<?php   
session_start();
ob_start();
//include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>Spoonbook</title>
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

          <script>
function showUser(str,company) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","example.php?q="+str+"&company="+company,true);
        xmlhttp.send();
    }
}
</script>


<!-- resource for modal -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

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
                                    <a href="index.php"><img src="images/company.png" title="Grill Template" alt="Grill Website Template" ></a>
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
