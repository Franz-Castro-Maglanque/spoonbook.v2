<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
loggedin_check();
if (isset($_POST['submit'])) {
	$package = $_POST['package'];
	$category = $_POST['category'];
	$company = $_SESSION['company'];
$query = "SELECT * FROM packages where ";
$query .= "name = '$package' and category = '$category' and company = '$company'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$_SESSION['id3'] = $row['id'];
}

if (isset($_POST['submit2'])) {
	$package = $_POST['package'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	//code for file upload

if ($_FILES['image']['tmp_name'] == "") {
	//echo "walang picture";
	$query = "UPDATE packages SET ";
	$query .= "name = '{$package}' , category = '{$category}', ";
	$query .= "price = '{$price}' ";
	$query .= "WHERE id = '{$_SESSION['id3']}'";
	unset($_SESSION['id3']);
}else{
	//echo "merong uploaded na picture";
	$file = $_FILES['image']['tmp_name'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
 	move_uploaded_file($_FILES["image"]["tmp_name"],"pics/" . $_FILES["image"]["name"]);
  $location = "pics/" . $_FILES["image"]["name"];
	$query = "UPDATE packages SET ";
	$query .= "name = '{$package}' , category = '{$category}', ";
	$query .= "price = '{$price}', featured_picture = '{$location}' ";
	$query .= "WHERE id = '{$_SESSION['id3']}'";
	unset($_SESSION['id3']);
	echo $query;
}

$result = mysqli_query($connection,$query);
if ($result && mysqli_affected_rows($connection) == 1) {
	$_SESSION['message'] = "Package Update Successful!";
	redirect_to("index.php");
}else{
	$_SESSION['error'] = "Package Update was not Successful";
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
  <h1>Edit Package</h1>

  <form action="edit_package2.php" method="post" enctype="multipart/form-data">
<!--       <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" checked>Personal</label>

    </div>
  <hr> -->

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="package" id="name" value="<?php  echo $package;  ?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="category" id="name" value="<?php  echo $category;  ?>" required/>

  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="number" name="price" id="name" value="<?php  echo $row['price'];  ?>" required/>

 <label>Package Image</label>

  <input type="file" name="image" id="name" placeholder="Company Name" />


  <input type="submit" name="submit2" class="button" value="submit">
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
