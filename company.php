<?php
require_once("database.php");
class Company{
  public $company_name;
  public $mobile_number;
  public $email_address;
  public $address;

  public static function find_all(){
    // global $database;
    // $result = $database->query("SELECT * FROM user_login WHERE account_type = 'company' and verify = 'verified'");
  
    return $result;
  }

  public static function find_by_id($id=0){
    global $database;
  $result = $database->query("SELECT * FROM user_login where id = {$id} LIMIT 1");
  $row = $database->fetch_array($result);
  return $row;
  }

  public static function find_by_sql($sql){
    global $database;
    $result = $database->query($sql);
    return $result;
  }

}
$test;
$comp = new Company();
$result = $comp->find_by_id(1);
echo $result['userName'];
// $result = $comp->find_all();
// while($row = mysqli_fetch_assoc($result)){
//   echo $row['company'] . "<br>";
// }



// $sql = "SELECT * FROM test WHERE id = 1";
// $result = $db->query($sql);
// $user = $database->fetch_array($result);
// echo $user['category'] . "<br>";
// echo $user['pangalan'] . "<br>";

?>