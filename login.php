<?php
//include("includes/session.php");
session_start();
include("includes/db_connection.php");
include("includes/functions.php");
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['uname'];
    $pass = $_POST['pword'];
    //$account = $_POST['account'];
    //$result = check_account($user,$pass,$account);
    $query = "SELECT * from user_login ";
    $query .= "WHERE userName ='{$user}' and ";
    $query .= "passWord = '{$pass}' and ";
    $query .= "account_type = 'customer' and ";
    $query .= "verify = 'verified' ";
    $query .= "LIMIT 1";
    echo $query;
    $result = mysqli_query($connection,$query);
        if ($result and mysqli_num_rows($result) == 0) {
        $query = "SELECT * from user_login ";
        $query .= "WHERE userName ='{$user}' and ";
        $query .= "passWord = '{$pass}' and ";
        $query .= "account_type = 'company' and ";
        $query .= "verify = 'verified' ";
        $query .= "LIMIT 1";
        echo $query;
        $result = mysqli_query($connection,$query);
        echo "no record found";
        }
    
    $row = mysqli_fetch_assoc($result);
    if ($user == $row['userName'] and $pass == $row['passWord']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['userName'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['contact'] = $row['mobileNumber'];
            $_SESSION['email'] = $row['emailAddress'];
            $_SESSION['company'] = addslashes($row['company']);
            $_SESSION['logo'] = $row['company_logo'];
            $_SESSION['account_type'] = $row['account_type'];
            $_SESSION['fullName'] = $row['fullName'];
            $_SESSION['logged'] = true;
            //unset($_SESSION['login_message']);
            redirect_to("index.php");
    }else{
        $_SESSION['log_msg'] = "Incorrect Username or Password or not verified yet";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+San">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<style>
    #login_form{
        width:350px;
        position:relative;
        top:50px;
        margin: auto;
        padding: auto;
    }
</style>
</head>
<body>
<div class="container">
    <div id="login_form" class="well">
        <h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
        <hr>
        <form method="POST" action="login.php">
        Username: <input type="text" name="uname" class="form-control" required>
        <div style="height: 10px;"></div>       
        Password: <input type="password" name="pword" class="form-control" required>
        <div style="height: 10px;"></div>
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="option.php"> Sign up</a>
        </form>
        
        <button type="submit" class="btn btn-primary" onclick="myFunction('index.php')"><span class="glyphicon glyphicon-log-in"></span> Back</button>
        <div style="height: 15px;"></div>
        <?php
            if(isset($_SESSION['log_msg'])){
                ?>
                <div style="height: 30px;"></div>
                <div class="alert alert-danger">
                    <span><center>
                    <?php echo $_SESSION['log_msg'];
                        unset($_SESSION['log_msg']); 
                    ?>
                    </center></span>
                </div>
                <?php
            }
        ?>
    </div>
</div>
</body>
<script type="text/javascript">
function myFunction(link){
window.location=link;
}

function myFunction1(){
                window.history.back();
            }
</script>
</html>