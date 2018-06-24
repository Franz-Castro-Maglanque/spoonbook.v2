<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");
loggedin_check();
$company = $_SESSION['company'];
?>
 <html>
<head>
    <title>Spoonbook</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
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
        xmlhttp.open("GET","example2.php?q="+str+"&company="+company,true);
        xmlhttp.send();
    }
}
</script>
</head>
    <body>

<div class="testbox">
  <h1>Choose Package</h1>

  <form action="edit_package2.php" method="post" enctype="multipart/form-data">
<!--       <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" checked>Personal</label>

    </div>
  <hr> -->

 Please choose Category<select name="category" onchange="showUser(this.value,'<?php echo $company; ?>')" required>

  <option value="">Please select a Category:</option>
  <option value="debut">debut</option>
  <option value="children party">Children Party</option>
  <option value="wedding">wedding</option>
  <option value="special occasion">special occasion</option>
  </select>
  <div id="txtHint"><b>Packages will be listed here</b></div>

  <input type="submit" name="submit" class="button" value="submit">
  </form>
   <input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button">
</div>
    </body>

     <script type="text/javascript">
$('select').on('change', function() {
  if (this.value == 'customer') {
$(".extra").hide();
}else if(this.value == 'company'){
    $(".extra").show();
  }
})


function myFunction(link){
window.location=link;
}
function myFunction1(){
                window.history.back();
            }
    </script>
</html>
