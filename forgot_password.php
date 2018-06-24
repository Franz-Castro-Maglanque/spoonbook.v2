<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
 
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $query = "SELECT * FROM user_login ";
        $query .= "WHERE emailAddress = '{$email}' ";
        $query .= "LIMIT 1";    
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    if ($result and mysqli_num_rows($result) == 1) {
            $_SESSION['id2'] = $row['id'];
            redirect_to("forgot_password2.php");        
    }elseif (mysqli_num_rows($result) == 0) {
        $_SESSION['log_msg'] = "<h3>No matching Email Address Found!</h3>";
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
        <form method="POST" action="forgot_password.php">
        Email Address: <input type="email" name="email" class="form-control" required>
        <div style="height: 10px;"></div>       
       
        <!-- <input type="submit" name="submit" class="btn btn-primary"> -->
         <button type="submit" class="btn btn-primary" name="submit" onclick="myFunction('index.php')"><span class="glyphicon glyphicon-log-in"></span>Back</button>
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
<script type="text/javascript">
function myFunction(link){
window.location=link;
}

function myFunction1(){
                window.history.back();
            }
</script>
</html>