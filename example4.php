<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
$q=$_GET["q"];
$sql = "SELECT * FROM user_login where emailAddress = '{$q}'";
echo $sql;
$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result))
  {
    echo $row['emailAddress'];
  }
  $_SESSION['message'] = "email already exits";
// $row_count = mysqli_num_rows($result);
// if ($row_count > 0) {
// 	echo true;
// }else{
// 	echo false;
// }
mysqli_close($connection);

?>