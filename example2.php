<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
//$conn = mysqli_connect("localhost", "root", "", "users_tbl");  

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$company = addslashes($_GET['company']);
$category = $_GET['q'];


$sql="SELECT * FROM packages WHERE company = '$company' ";
$sql.="AND category = '$category'";
$result = mysqli_query($connection,$sql);

	

?>

Please Choose Package<select name='package' required>;
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
 }

echo "</select>";

// echo '<input type="submit" name="submit">';
mysqli_close($connection);
?>
</body>
</html>