<?php
require_once("includes/session.php");
include("includes/db_connection.php");

if(isset($_POST['submit'])){

$name =  mysqli_real_escape_string($connection,$_POST['name']);
$email =  $_POST['email'];
$subject2 =  $_POST['subject'];
$message2 =  $_POST['message'];
}
echo $email;
    $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code=substr(str_shuffle($set), 0, 12);

$subject = "Thank you for registering";

                    $mail_content = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                                <html xmlns='http://www.w3.org/1999/xhtml'>
                                <head>
                                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                                </head>
                                <body>

                                <div>
                    <a href='spoonbook.esy.es/activate.php?code=$code'>Click this link to verify your Account</a>

                                </div>
                                </body>
                                </html>";
                                
                                
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To: Developer  <ranze001851@gmail.com>' . "\r\n";
$headers .= "From: test <ranze001851@gmail.com>" . "\r\n";
                                
        // Mail it
mail($to, $subject, $mail_content, $headers);                        
                                
?>