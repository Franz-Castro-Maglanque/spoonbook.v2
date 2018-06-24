<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
 
    forgot_redirect();
    $message = ""; 
    if (isset($_POST['submit'])) {
            $new = $_POST['new'];
            $again = $_POST['again'];
        $query = "UPDATE user_login SET ";
        $query .= "passWord = '{$new}' ";
        $query .= "WHERE id = '{$_SESSION['id2']}'";
        $query .= "LIMIT 1";    
    if ($new == $again) {
        $result = mysqli_query($connection,$query);
        if ($result && mysqli_affected_rows($connection) == 1) {
            $_SESSION['message'] = "Password successfully recovered";
            unset($_SESSION['id2']);
            redirect_to("index.php");
        }
    }else{
        $_SESSION['log_msg'] = "<h4>Re-typed new password does not match</h4>";
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
        <h2><center><span class="glyphicon glyphicon-lock"></span>Forgot Password</center></h2>
        <hr>
        <form method="POST" action="forgot_password2.php">
        New Password: <input type="password" name="new" class="form-control" required>
        <div style="height: 10px;"></div>       
        Re-type New Password: <input type="password" name="again" class="form-control" required>
        <div style="height: 10px;"></div>  
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
        <button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-log-in"></span>Next</button>
        </form>
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
</html>