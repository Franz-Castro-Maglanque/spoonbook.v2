<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");

loggedin_check();
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];

	$query="select * from user_login where id='$user'";
	$result = mysqli_query($connection,$query);
	$row=mysqli_fetch_array($result);


	if($row['code']==$code){
		//activate account
		$query = "update user_login set verify='verified' where id='$user'";

		$result = mysqli_query($connection,$query);
		redirect_to("index.php");

	}
	
// 	if account verification failed
	else{
		$_SESSION['sign_msg'] = "Something went wrong. Please sign up again.";
  		redirect_to("index.php");
	}
	}
	
	else{
		redirect_to("index.php");
	}
?>