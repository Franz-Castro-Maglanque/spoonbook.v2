<?php
include("includes/session.php");
include("includes/db_connection.php");

$company = "smart";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

          <script>
function showUser(str,company) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","example3.php?q="+str,true);
        xmlhttp.send();
    }
}

function checkEmail(str){
    if (str == "") {
      document.getElementById('ErrorSpan').innerHTML = "";
    }else{
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
          if (this.readyState == 4 && this.status == 200)
            {
                //var value = this.responseText;
                document.getElementById('ErrorSpan').innerHTML=this.responseText;
                // value.length > 1
                // if(value == true)
                // {
                //     document.getElementById('ErrorSpan').innerHTML="Email Address Already exist please choose type in another email";
                   
                //     // emailAddress.focus();
                // }
                // else
                // {
                //     document.getElementById('ErrorSpan').innerHTML="email available";
                // }
            }
          }
        xmlhttp.open("GET","example4.php?q="+str,true);
        xmlhttp.send();
    }
}



</script>
</head>
<body>

<form>
	Please enter Email Address<input type="text" name="email" onblur="showUser(this.value)">
</form>
<!--  <span id="ErrorSpan">error goes here</span> -->
<div id="txtHint"><b>Packages will be listed here

<?php
if ($_SESSION['validation']) {
    echo $_SESSION['validation'];
    unset($_SESSION['validation']); 
    echo"<script>
location.reload();
</script>";
}
?>
</b></div>

<script>
function myFunction() {
    location.reload();
}
</script>


</body>
</html>
