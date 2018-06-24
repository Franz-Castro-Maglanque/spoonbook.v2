<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
?>
    <html>
<head>
    <title>Spoonbook</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
    <body>
        <div class="login-box">
            <img src="images/default.png" class="avatar">
                <?php    
                if (isset($_SESSION['message'])) {
                   echo "<h1>" . $_SESSION['message'] . "</h1>";
                   unset($_SESSION['message']);
                }
                echo "<h1>Login Here</h1>";
                ?>

                    <form action="login.php" method="post">
                        <p>Username</p>
                        <input type="text" name="uname" placeholder="Enter Username">
                        <p>Password</p>
                        <input type="password" name="pword" placeholder="Enter Password">
                        <p>Create Account As:</p>
                        <!--   <select  onchange="myFunction()" name="account">
                          <option value="customer">Customer</option>
                          <option value="company">Company</option>
                            </select> -->
                            <input type="checkbox" name="vehicle" value="customer"> I have a bike<br>
                            <input type="checkbox" name="vehicle" value="company" checked> I have a car<br>
                        <p>Address</p>
                        <input type="text" name="contact" placeholder="Address">
                        <p>Contact Number</p>
                        <input type="number" name="contact" placeholder="Contact Number">
                        <p>Email Address</p>
                        <input type="email" name="contact" placeholder="Email Address">
                        <p class="extra" hidden>Company Name</p>
                        <input class="extra" type="text" name="contact" placeholder="Name of Company" hidden>
                        <p class="extra" hidden>Contact Number</p>
                        <input class="extra" type="file" name="contact" placeholder="Contact Number" hidden>
                        <input type="submit" name="submit" value="Login">
                    </form>
        </div>
<script type="text/javascript">

$('checkbox').on('change', function() {
  if (this.value == 'customer') {
$(".extra").hide();
}else if(this.value == 'company'){
    $(".extra").show();
  }
})
    </script>
    </body>
</html>
