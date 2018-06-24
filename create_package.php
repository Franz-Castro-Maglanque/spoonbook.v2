<?php
session_start();
include("includes/db_connection.php");
include("includes/functions.php");
loggedin_check();
    if (isset($_POST['submit'])) {
  $name = $_POST['name'];  
  $company = $_SESSION['company'];
  $category = $_POST['category'];
  $price = $_POST['price'];
      //code for picture upload
    $file = $_FILES['image']['tmp_name'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $location = "pics/" . $_FILES["image"]["name"];

$query = "INSERT INTO packages (name,company,featured_picture,category,price) VALUES ";
$query .= "('{$name}','{$company}','{$location}','{$category}','{$price}')";
$result = mysqli_query($connection,$query);
if ($result && mysqli_affected_rows($connection) == 1) {
  move_uploaded_file($_FILES["image"]["tmp_name"],"pics/" . $_FILES["image"]["name"]);
  $_SESSION['message'] = "Package Creation Successful";
  redirect_to("index.php");
// }

}else{
  $_SESSION['error'] = "Package Creation Not Successful";
  redirect_to("index.php");
}
}


?>