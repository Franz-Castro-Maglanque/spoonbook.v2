<?php   
//include("includes/session.php");
session_start();
include("includes/db_connection.php");
include("includes/functions.php"); 

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $package = $_POST['package'];
    $query="SELECT * FROM orders WHERE company = '{$_SESSION['company']}' ";
    $query.="AND category = '$category' and name = '$package'";
    $_SESSION['query'] = $query;

}else{
    $query = "SELECT * FROM orders where company = '{$_SESSION['company']}'";
    $_SESSION['query'] = $query;
}

$result = mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
  </style>
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
<section>
  <!--for demo wrap-->
  <h1>Data Report</h1>
<form action="data.php" method="post">
Please Choose Category<select name="category" onchange="showUser(this.value,'<?php echo $_SESSION['company']; ?>')" required>
  <option value="">Select a person:</option>
  <option value="debut">debut</option>
  <option value="children party">children party</option>
  <option value="wedding">wedding</option>
  <option value="special occasion">special occasion</option>
  </select>
  <div id="txtHint"></div>
  <input type="submit" name="submit" value="Filter">
</form>
<form action="print.php" method="post">
<input type="submit" name="generate_pdf" value="print">
</form>

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Contact Number</th>
          <th>Email Address</th>
          <th>Date Of Event</th>
          <th>Package Name</th>
          <th>Category</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fullName'] . "</td>";
            echo "<td>" . $row['contactNumber'] . "</td>";
            echo "<td>" . $row['emailAddress'] . "</td>";
            echo "<td>" . $row['dueDate'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "</tr>";
        }
        ?>

      </tbody>
    </table>
  </div>
</section>
 <input type="submit" name="" value="back" onclick="myFunction('index.php')" class="button">
<!-- follow me template -->
<!-- <div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div> -->
</body>
<script type="text/javascript">
  // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

function myFunction(link){
window.location=link;
}
function myFunction1(){
                window.history.back();
            }
</script>
</html>