<?php
	include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Online pre-enrollment system</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="E-progress a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- default css files -->
	<link rel="stylesheet" href="../web2/css/bootstrap.css" type="text/css" media="all">
	
	<link rel="stylesheet" href="../web2/css/font-awesome.min.css" />
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">

	<link href="../web2/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->


<style>
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>

<!-- Body -->
<body>
<header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../web2/images/logo.png" alt="logo" width= "72px"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="index.php">Home</a></li> 
                        <?php session_start(); if(isset($_SESSION['username'])): ?>
                         <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a></li> 
                        <?php else: ?>
                         <li><a href="login.php">Login</a></li> 
                        <?php endif; ?>  
                                                                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
    
    <section id="main-slider">
        <div style="height: 200px;">
            <div class="item" style="background-image: url(../images/slider/banner12.jpg);">
                
                </div>
        </div><!--/.item-->
             
    </section><!--/#main-slider-->
<!-- form -->
<div class="form agile" id="gallery" style=" margin: 50px 0;">







<div class="container" style="width: 100%;">
<div id="alert"></div>	
		<div class="tab">
  <button class="tablinks active" onclick="openTab(event, 'ALL')">ALL Submission</button>
  <button class="tablinks" onclick="openTab(event, 'daily')">Daily Report</button>
  <button class="tablinks" onclick="openTab(event, 'abm')">ABM</button>
  <button class="tablinks" onclick="openTab(event, 'gas')">GAS</button>
  <button class="tablinks" onclick="openTab(event, 'vgd')">VGD</button>
  <button class="tablinks" onclick="openTab(event, 'css')">CSS</button>
  <button class="tablinks" onclick="openTab(event, 'epa')">EPA</button>
  <button class="tablinks" onclick="openTab(event, 'elec')">ELEC</button>
  <button class="tablinks" onclick="openTab(event, 'ra')">R&A</button>
  <button class="tablinks" onclick="openTab(event, 'smaw')">SMAW</button>
  <button class="tablinks" onclick="openTab(event, 'asi')">AS NCI</button>
  <button class="tablinks" onclick="openTab(event, 'asii')">AS NCII</button>
  <button class="tablinks" onclick="openTab(event, 'bartending')">Bartending</button>
  
</div>

<div id="ALL" class="tabcontent" style="display: block;">
  <table class="table table-striped table-bordered table-hover" id="dtable" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
				 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable");
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td><div id='".$result["id"]."'>".$result["status"]."</div></td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 		 <div class="modal-dialog">
                  		  <div class="modal-content">
                  		  </div>
                 		 </div>
                		</div>
				
			</tbody>
			
		</table>
</div>

<div id="daily" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable1" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               
		
				<tr>
				<td>1</td>
				<td>ABM</td>
				<td>Franz Maglanque<td>
				<td>Male</td>
				<td>ranze001851@gmai.com</td>
				<td>324324324</td>
				<td>39-a camia st miguelito homes</td>
				<td>AM</td>
				<td>SCC</td>
				<td>2018/1/1</td>
				<td>pending</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				</tr>
   
				
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>





<div id="abm" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable2" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'ABM'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>

<div id="gas" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable3" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'GAS'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>


<div id="vgd" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable4" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Visual Graphics Design NCIII'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>


<div id="css" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable5" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Computer System Servicing NCII'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>
	
	
<div id="epa" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable6" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Electronic Product Assembly and Servicing'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>


<div id="elec" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable7" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Electrical Installation and Maintenance'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>

<div id="ra" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable8" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'RAC'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>


<div id="smaw" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable9" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Shielded Metal Arc Welding'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>

<div id="asi" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable10" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Automotive Servicing NCI'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>

<div id="asii" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable11" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Automotive Servicing NCII'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>
	
	
<div id="bartending" class="tabcontent">
  <table class="table table-striped table-bordered table-hover" id="dtable12" class="dtable">
			<thead>
				<tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th style="width: 72px;!important">Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<tfoot>
			   <tr>
					<th>ID</th>
					<th>Strands</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Schedule</th>
					<th>Previous School</th>
					<th>Entry Date</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</tfoot>
			<tbody>
			
			   

               <?php
		$date = date('Y/m/d');		 
                $mysqli = new mysqli('localhost', 'spvttcsh_root', 'root', 'spvttcsh_onetwo') or die("Error in Connection");
                $q = $mysqli->query("SELECT * FROM dtable WHERE date = '".$date."' AND strands = 'Bartending'");
                $total = mysqli_num_rows($q);
			     while($result = mysqli_fetch_array($q)){
                 echo "
				<tr>
				<td>".$result["id"]."</td>
				<td>".$result["strands"]."</td>
				<td>".$result["first_name"]." .".$result["middle_name"]." ".$result["last_name"]."</td>
				<td>".$result["gender"]."</td>
				<td>".$result["email"]."</td>
				<td>".$result["phone"]."</td>
				<td>".$result["address"]."</td>
				<td >".$result["schedule"]."</td>
				<td>".$result["previous_school"]."</td>
				<td>".$result["date"]."</td>
				<td>".$result["status"]."</td>
				<td><a class='modalApprove'  data-toggle='modal' data-id='".$result["id"]."'><button class='btn btn-primary btn-sm'>Approve</button></a></td>
				
				
				
				</tr> ";
   
				 }
				 
				 
                ?>
                <tr>
                <td>Total:</td><td><?php echo $total; ?></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                  <div class="modal-content">

                  </div>
                 </div>
                </div>
			</tbody>
			
		</table>
</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="../web2/js/jquery.min.js"></script>
	<script src="../web2/js/bootstrap.js"></script>
	<script src="../web2/js/jquery.dataTables.min.js"></script>
	<script src="../web2/js/dataTables.bootstrap.min.js"></script>
	<script src="../web2/js/jquery.tabledit.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"></script>
	<script type="text/javascript" src="Editor-1.7.1/js/dataTables.editor.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css"/>
	
    
	<script>

   $('.modalApprove').click(function(){
    var ID=$(this).attr('data-id');
    if (confirm("Approve Application?")) {
        $.ajax({url:"approve-modal.php?ID="+ID,cache:false,success:function(result){
        }});
		txt = "<div class='alert alert-success'><strong>Success!</strong> Application has been approved.</div>";
		status ="Enrolled"
    } else {
        txt = "<div class='alert alert-danger'>Update has been cancelled.</div>";
    }
   
    document.getElementById("alert").innerHTML = txt;
    document.getElementById(ID).innerHTML = status;
    
   });
   
	
	
	
    $('#dtable').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    
    $('#dtable1').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable2').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable3').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable4').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable5').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
$('#dtable6').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    
    $('#dtable7').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable8').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable9').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable10').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable11').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    $('#dtable12').dataTable({
        dom: 'Bfrtip',
		stateSave: true,
        buttons: [
            // 'copy', 'csv', 
            'excel', 'pdf', 'print'
        ]
    });
    
  
	
	function cancel(id){
					
					  $.ajax({
                        type: "POST",
                        url: 'admin.php',
                        data:{action:'cancel' , id:$id},
                        success:function(html) {
                         alert(html);
                        }

                     });
					 
					  
                 }

			
   function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

	</script>
	</div>
	</div>
<!-- //form -->


<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                 
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="https://web.facebook.com/stpetervelle2003/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
				

</body>
<!-- //Body -->
</html>