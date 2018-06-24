<?php

class MySqlDatabase{
	public $dbhost = "localhost";
  public $dbuser = "root";
  public $dbpass = "";
  public $dbname = "users_tbl";
  public $connection;

  function __construct(){
    $this->open_connection();
  }

  function open_connection(){
  	$this->connection = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
  	  // Test if connection succeeded
    if(mysqli_connect_errno()) {
      die("Database connection failed: " . 
          mysqli_connect_error() . 
          " (" . mysqli_connect_errno() . ")"
      );
    }
  }

  function query($sql){
    $result = mysqli_query($this->connection,$sql);
    if(!$result){
      die("Database query failed");
    }
    return $result;
  }

  function fetch_array($result_set){
    return mysqli_fetch_array($result_set);
  }
}
$db = new MySqlDatabase();
$database =& $db;

// $sql = "SELECT DISTINCT company,company_logo FROM user_login where account_type = 'company' and verify = 'verified'";
// $result = mysqli_query($db->connection,$sql);
// $row = mysqli_fetch_assoc($result);
// echo $row['company_logo'];
// while($row = mysqli_fetch_assoc($result)){
// echo $row['company'] . "<br>";
// }




?>