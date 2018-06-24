<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
loggedin_check();
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$query = "UPDATE user_login SET ";
	$query .= "fullName = '{$name}' , address = '{$address}', ";
	$query .= "emailAddress = '{$email}', mobileNumber = '{$contact}' ";
	$query .= "WHERE id = '{$_SESSION['id']}'";
	$result = mysqli_query($connection,$query);
	if ($result && mysqli_affected_rows($connection) == 1) {
		$_SESSION['message'] = "Account Details succesfully updated";
		$_SESSION['fullName'] = $name;
		$_SESSION['address'] = $address;
		$_SESSION['contact'] = $contact;
		$_SESSION['email'] = $email;
		redirect_to("index.php");
	}else{
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
  <h1>Edit Account</h1>

  <form action="edit_customer.php" method="post">
<!--       <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" checked>Personal</label>

    </div>
  <hr> -->

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" value="<?php  echo $_SESSION['fullName'];  ?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="address" id="name" value="<?php  echo $_SESSION['address'];  ?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="number" name="contact" id="name" value="<?php  echo $_SESSION['contact'];  ?>" required/>

  <label id="icon" for="name"><i class="icon-envelope"></i></label>
  <input type="email" name="email" id="name" value="<?php  echo $_SESSION['email'];  ?>" required/>


  <input type="submit" name="submit" class="button" value="submit">
  <br>
 
  </form>
   <input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button">
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
