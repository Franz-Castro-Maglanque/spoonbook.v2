<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
//$q = intval($_GET['q']);
//$q = $_GET['q'];
// $company = addslashes($_GET['company']);
// $package = $_GET['q'];
// $category = $_GET['category'];

$email = $_GET['q'];


$query = "SELECT * FROM user_login where emailAddress = '{$email}'";
echo $query;
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
if ($result and mysqli_num_rows($result) == 0) {
	$_SESSION['validation'] = "Email Available";
	echo "email available";
	echo"<script>
location.reload();
</script>";

}else{
$_SESSION['validation'] = "Email Address has already been taken";
echo "email already taken";
}
mysqli_close($connection);
?>
</body>
<script>
function myFunction() {
    location.reload();
}
</script>
</html>