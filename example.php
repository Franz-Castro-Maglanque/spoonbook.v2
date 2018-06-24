<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);
//$q = $_GET['q'];
$company = addslashes($_GET['company']);
$category = $_GET['q'];
$con = mysqli_connect('localhost','root','','users_tbl');
// if (!$con) {
//     die('Could not connect: ' . mysqli_error($con));
// }

//mysqli_select_db($con,"users_tbl");
// $sql="SELECT * FROM user_login WHERE id = '".$q."'";
// $result = mysqli_query($con,$sql);
// mysqli_select_db($con,"users_tbl");

$sql="SELECT * FROM packages WHERE company = '$company' ";
$sql.="AND category = '$category'";

$result = mysqli_query($connection,$sql);
 echo "Please Choose Package<select name='package' required>";
 while ($row = mysqli_fetch_assoc($result)) {
     echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
    //echo "<option>test</option>";
 }
echo "</select>";
echo "<br>";
echo ' Please enter Date of Event<input type="date" name="due" required>';
// echo "<table>
// <tr>
// <th>Package Name</th>
// <th>passWord</th>
// <th>address</th>
// <th>mobileNumber</th>
// <th>emailAddress</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//     echo "<tr>";
//     echo "<td>" . $row['name'] . "</td>";
//     echo "</tr>";
// }
// echo "</table>";




// echo "<table>
// <tr>
// <th>userName</th>
// <th>passWord</th>
// <th>address</th>
// <th>mobileNumber</th>
// <th>emailAddress</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//     echo "<tr>";
//     echo "<td>" . $row['userName'] . "</td>";
//     echo "<td>" . $row['passWord'] . "</td>";
//     echo "<td>" . $row['address'] . "</td>";
//     echo "<td>" . $row['mobileNumber'] . "</td>";
//     echo "<td>" . $row['emailAddress'] . "</td>";
//     echo "</tr>";
// }
// echo "</table>";
mysqli_close($connection);
?>
</body>
</html>