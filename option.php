<?php
include("includes/session.php");
include("includes/db_connection.php");
include("includes/functions.php");



if (isset($_POST['submit'])) {

 if ($_POST['type'] == "customer") {
   redirect_to("create_customer.php");
 }elseif($_POST['type'] == "company"){
   redirect_to("create_company.php");
 }
}
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
</head>
    <body>

<div class="testbox">
  <h1>Registration</h1>

  <form action="option.php" method="post">
      <hr>
    <div class="accounttype">
            <input type="radio" value="customer" id="radioOne" name="type" checked/>
      <label for="radioOne" class="radio" chec>Customer</label>
      <input type="radio" value="company" id="radioTwo" name="type" />
      <label for="radioTwo" class="radio">Company</label>
  
    </div>
  <hr>
  <input type="submit" name="submit" class="button" value="next">
   <!-- <a href="#" class="button">Next</a> -->
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
