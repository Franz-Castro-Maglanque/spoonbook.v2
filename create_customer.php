<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");

if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $pass = $_POST['pword'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code=substr(str_shuffle($set), 0, 12);

    $result = email_duplicate_check($email);
    if(mysqli_num_rows($result)>0){
       $_SESSION['error'] = "Email already taken";
         redirect_to("index.php");
    }
    $query = "INSERT INTO user_login ";
    $query .="(userName,passWord,fullName,address,mobileNumber,emailAddress,verify,account_type,code) VALUES ";
    $query .="('{$user}','{$pass}','{$fname}','{$address}','{$contact}','{$email}','notverified','customer','{$code}')";
    $result = mysqli_query($connection,$query);
    if ($result && mysqli_affected_rows($connection) == 1) {
    $_SESSION['message'] = "Account Creation Sucessful a verification link has been sent to your Email Address";
    $uid=mysqli_insert_id($connection);
                //if insert is sucessful send verification link to email
    $subject = "Thank you for registering";
                    $mail_content = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                                <html xmlns='http://www.w3.org/1999/xhtml'>
                                <head>
                                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                                </head>
                                <body>

                                <div>
                    <a href='spoonbook.esy.es/activate.php?code=$code&uid=$uid'>Click this link to verify your Account</a>
<p>or copy this text and paste it in your browser</p><br>
<p>spoonbook.esy.es/activate.php?code=$code&uid=$uid</p>
                                </div>
                                </body>
                                </html>";                 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // Additional headers
    $headers .= "To: visitor  <$email>" . "\r\n";
    $headers .= "From: spoonbook <ranze001851@gmail.com>" . "\r\n";                         
        // Mail it
mail($to, $subject, $mail_content, $headers);  

      redirect_to("index.php");
    }else{
        $_SESSION['error'] = "Account Creation Failed";
        redirect_to("index.php");
    }
    }
?>
    <html>
<head>
    <title>Spoonbook</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>
    <body>

<div class="testbox">
  <h1>Registration</h1>

  <form action="create_customer.php" method="post">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" checked>Personal</label>

    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope"></i></label>
  <input type="email" name="email" id="name" placeholder="Email Address" required/>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="uname" id="name" placeholder="Username" required/>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="password" name="pword" id="name" placeholder="Password" required/>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="fname" id="name" placeholder="Full Name" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="address" id="name" placeholder="Address" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="number" name="contact" id="name" placeholder="Contact Number" required onKeyPress="if(this.value.length==10) return false;"/>

  

  <input type="submit" name="submit" class="button" value="submit">
  <br>
 
  </form>
   <input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button">
<!--<input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button" style="width: 145px;">  -->
</div>  
    </body>
    <script type="text/javascript">
$('select').on('change', function() {
  if (this.value == 'customer') {
$(".extra").hide();
}else if(this.value == 'company'){
    $(".extra").show();
  }
})


function myFunction(link){
window.location=link;
}
function myFunction1(){
                window.history.back();
            }
    </script>
</html>
