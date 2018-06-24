<?php


	function redirect_to($new_location){
			header("Location: " . $new_location);
			exit;
	}

	function email_duplicate_check($email){
		global $connection;
		$query = "SELECT * FROM user_login where emailAddress = '{$email}'";
		return $result = mysqli_query($connection,$query);
		
	}



	function loggedin_check(){
		
		if ($_SESSION['logged'] == false) {
			redirect_to("index.php");
		}

	}

	function admin_check(){
		if ($_SESSION['account_type'] !== "admin") {
			redirect_to("index.php");
		}
	}

	function forgot_redirect(){
		if (!isset($_SESSION['id2'])) {
			redirect_to("forgot_password.php");
		}
	}


	// para sa login
	function check_account($user,$pass,$account){
		global $connection;
		$query = "SELECT * from user_login ";
		$query .= "WHERE userName ='{$user}' and ";
		$query .= "passWord = '{$pass}' and ";
		$query .= "account_type = '{$account}' and ";
		$query .= "verify = 'verified' ";
		$query .= "LIMIT 1";
		return $result = mysqli_query($connection,$query);
		

	}


// para sa login
function check_admin($user,$pass){
	global $connection;
	$query = "SELECT * FROM user_admin ";
	$query .= "WHERE userName = '{$user}' ";
	$query .= "AND passWord = '{$pass}' ";
	$query .= "LIMIT 1";
	return $result = mysqli_query($connection,$query);

}

// para sa pag display ng account sa menu list
function getaccount($id,$account_type){
	global $connection;
if ($account_type == "admin") {
	$query = "SELECT * FROM user_admin ";
	$query .= "WHERE id = '{$_SESSION['id']}' ";
	$query .= "LIMIT 1";
	return $result = mysqli_query($connection,$query);
}elseif ($account_type == "company") {
	$query = "SELECT * FROM user_login ";
	$query .= "WHERE id = '{$_SESSION['id']}' ";
	$query .= "LIMIT 1";
	return $result = mysqli_query($connection,$query);
}

}

?>