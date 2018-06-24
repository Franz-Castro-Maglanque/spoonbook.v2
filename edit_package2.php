<?php
include("includes/layouts/about_header.php"); 

loggedin_check();
if (isset($_POST['submit'])) {
	$package = $_POST['package'];
	$category = $_POST['category'];
	$company = $_SESSION['company'];
$query = "SELECT * FROM packages where ";
$query .= "name = '$package' and category = '$category' and company = '$company'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$_SESSION['id3'] = $row['id'];
}

if (isset($_POST['submit2'])) {
	$package = $_POST['package'];
	$category = $_POST['category'];
	$price = $_POST['price'];
  $description = $_POST['description'];
  $ameneties = $_POST['ameneties'];
  $inclusions = $_POST['inclusions'];
	//code for file upload

if ($_FILES['image']['tmp_name'] == "") {
	//echo "walang picture";
	$query = "UPDATE packages SET ";
	$query .= "name = '{$package}' , category = '{$category}', ";
	$query .= "price = '{$price}' , description = '{$description}', ";
  $query .= "ameneties = '{$ameneties}' , inclusions = '{$inclusions}' ";
	$query .= "WHERE id = '{$_SESSION['id3']}'";
	unset($_SESSION['id3']);
}else{
	//echo "merong uploaded na picture";
	$file = $_FILES['image']['tmp_name'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  $image_name = addslashes($_FILES['image']['name']);
 	move_uploaded_file($_FILES["image"]["tmp_name"],"pics/" . $_FILES["image"]["name"]);
  $location = "pics/" . $_FILES["image"]["name"];
	$query = "UPDATE packages SET ";
	$query .= "name = '{$package}' , category = '{$category}', ";
	//$query .= "price = '{$price}', featured_picture = '{$location}' ";
  $query .= "price = '{$price}' , featured_picture = '{$location}' , description = '{$description}', ";
  $query .= "ameneties = '{$ameneties}' , inclusions = '{$inclusions}' ";
	$query .= "WHERE id = '{$_SESSION['id3']}'";
	unset($_SESSION['id3']);
	echo $query;
}

$result = mysqli_query($connection,$query);
if ($result && mysqli_affected_rows($connection) == 1) {
	$_SESSION['message'] = "Package Update Successful!";
	redirect_to("index.php");
}else{
	$_SESSION['error'] = "Package Update was not Successful";
	redirect_to("index.php");
}
}


?>

       <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Package Profile</h2>
                                <!-- <span>Home / <a href="single-post.html">Company Details</a></span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2><?php  echo $row['name'];
                                ?></h2>
                                <img src="images/under-heading.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                                <div class="image">
                                                    <div class="image-post"> 
                                                        <!-- <img src="images/single-post.jpg" alt=""> -->
                                                       <img  height="330" width="770" src=" <?php  echo $row['featured_picture']; ?>" alt=""> 
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h4>Package Details</h4>
                                                        <!-- <span class="subtitle">4 comments</span> -->
                                                    </div>
                                                    <form action="edit_package2.php" method="post" enctype="multipart/form-data">
                                                    Package Name: <input type="text" name="package" value="<?php  echo $row['name']; ?>">
                                                    <br>
                                                    Category: <input type="text" name="category" value="<?php  echo $row['category']; ?>">
                                                    <br>
                                                    <label>Package Image</label>
                                        <input type="file" name="image" id="name" placeholder="Company Name" />
                                                    <br>
                                                    Price: <input type="number" name="price" value="<?php  echo $row['price']; ?>">                                                    <br>
                                                     Description: <textarea rows="4" cols="50" name="description"><?php  echo $row['description']; ?></textarea>
                                                     Ameneties: <textarea rows="4" cols="50" name="ameneties"><?php  echo $row['ameneties']; ?></textarea>
                                                     Inclusions: <textarea rows="4" cols="50" name="inclusions"><?php  echo $row['inclusions']; ?></textarea>
                                                     <br><br>
                                                     <input type="submit" name="submit2" value="update">
                                                     </form>
                                                </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
            <?php   include("includes/layouts/footer2.php"); ?>