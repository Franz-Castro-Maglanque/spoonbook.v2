<?php
//include("includes/session.php");
session_start();
include("includes/db_connection.php");
include("includes/functions.php");
 
    loggedin_check();
$query = "SELECT * FROM user_login ";
$query .= "WHERE id = '{$_SESSION['id']}'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
        
  

    if (isset($_POST['submit'])) {
        $old = $_POST['old'];
        $new = $_POST['new'];
        $again = $_POST['again'];
        
        
                #verification for the old password 
            if ($row['passWord'] == $old and $new == $again) {
                $query2 = "UPDATE user_login SET ";
                $query2 .= "passWord = '{$new}' ";
                $query2 .= "WHERE id = '{$row['id']}'";
                echo $query2;
                $result2 = mysqli_query($connection,$query2);   
                    if ($result && mysqli_affected_rows($connection) == 1) {
                        $_SESSION['message'] = "Password successfully changed";

                        redirect_to("index.php");                   
                    }else{
                        $_SESSION['message']  = "<h4>Password Change is not Successful</h4>";
                    }
                #verification if password does not match with old
            
            }elseif ($row['passWord'] !== $old) {
                $_SESSION['log_msg']  = "<h4>Incorrect Old password</h4>";
            }
            else{
                    $_SESSION['log_msg'] = "<h4>New password does not match</h4>";
                    //redirect_to("index.php");
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
        <h2><center><span class="glyphicon glyphicon-lock"></span>Change Password</center></h2>
        <hr>
        <form method="POST" action="change_password.php">
        Old Password: <input type="password" name="old" class="form-control" required>
        <div style="height: 10px;"></div>       
        New Password: <input type="password" name="new" class="form-control" required> 
        <div style="height: 10px;"></div>       
        Re-Type New Password: <input type="password" name="again" class="form-control" required> 
        <div style="height: 10px;"></div>
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
        <button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-log-in"></span> Change Password</button>
        </form>
        <button type="submit" class="btn btn-primary" name="submit" onclick="myFunction('index.php')"><span class="glyphicon glyphicon-log-in"></span>Back</button>
        <!-- <input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button"> -->
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