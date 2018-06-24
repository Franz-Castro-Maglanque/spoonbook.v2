<?php   include("includes/layouts/about_header.php"); 
//loggedin_check();    
  $company = $_GET['company'];
$company = mysqli_real_escape_string($connection,$company);

        //code to restrict multiply inquiry
    if (isset($_SESSION['logged'])) {
           $name = $_SESSION['fullName'];
        $number = $_SESSION['contact'];
        $email = $_SESSION['email'];
   
         $petsa = date("Y-m-d");
        $query = "SELECT * FROM orders where emailAddress = '{$email}' and ";
        $query .= "company = '$company' and ";
        $query .= "expiration = '$petsa'";
        $result = mysqli_query($connection,$query);
        $row3 = mysqli_fetch_assoc($result);
        }  

     if (isset($_GET['company'])) {
    //$company = addslashes($company);
    $query = "SELECT * FROM packages ";
    $query .= "where company = '$company'";
    $query2 = "SELECT * FROM user_login ";
    $query2 .= "where company = '$company'";
    $result = mysqli_query($connection,$query);
    $result2 = mysqli_query($connection,$query2);
    $row2 = mysqli_fetch_assoc($result2);
    $email2 = $row2['emailAddress'];
   }else{
    redirect_to("index.php");
   }


    //code for inquiry
//       if (isset($_POST['submit'])) {   
//            $due = $_POST['due'];
//         $package = $_POST['package'];
//         $category = $_POST['category'];      
//     $query = "INSERT INTO orders (fullName,contactNumber,emailAddress,dueDate,name,company,category,expiration)";
//     $query .= "VALUES ('{$name}','{$number}','{$email}','{$due}','{$package}','{$company}','{$category}','{$petsa}')";
//     echo $query;
//     $result = mysqli_query($connection,$query);
//     if ($result && mysqli_affected_rows($connection) == 1) {
  



//      //if insert is sucessful send verification link to email
//                     $subject = "Thank you for registering";
//                     $mail_content = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
//                                 <html xmlns='http://www.w3.org/1999/xhtml'>
//                                 <head>
//                                 <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
//                                 </head>
//                                 <body>
//                                     <h3>A customer has inquired about a package that you have posted on SpoonBook</h3>
//                                 <div>
//                                     <p>Customer: $name</p><br>
//                                     <p>Contact Number: $number</p><br>
//                                     <p>Email Address: $email</p><br>
//                                     <p>Contact Number: $number</p><br>
//                                     <p>Date of Event: $due</p><br>
//                                     <p>Package Name: $package</p><br>
//                                     <p>Contact Number: $number</p><br>
//                                     <p>Category: $category</p><br>


//                                 </div>
//                                 </body>
//                                 </html>";
                                
                                
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// // Additional headers
// $headers .= "To: Catering Company  <$email2>" . "\r\n";
// $headers .= "From: spoonbook <ranze001851@gmail.com>" . "\r\n";
                                
//         // Mail it
// mail($to, $subject, $mail_content, $headers);  
    





//   redirect_to("index.php");
//        }
//     }


?>
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Company Profile</h2>
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
                                <h2><?php  echo $row2['company'];
                                //echo $row2['company_logo']; 
                                //echo $_SESSION['company'];
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
                                                        <img  height="330" width="770" src="<?php echo $row2['company_logo'];  ?>" alt=""> 
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h4>Company Details</h4>
                                                        <!-- <span class="subtitle">4 comments</span> -->
                                                    </div>
                                                <!--     <p>Single blog post page is here for you. You can use this grill <a href="#">template</a> for any purpose. You do not need to give a credit to templatemo website for any reason. Praesent nec euismod ipsum, eget sodales enim. Duis in rhoncus lorem. Duis fermentum sem et libero viverra, in cursus velit dapibus. Donec dui ante, dapibus ut odio eget, vulputate blandit ante. Integer ullamcorper, augue id malesuada convallis, mauris risus cursus elit, eget scelerisque ipsum massa ac nisi. Donec venenatis vel arcu at pharetra. <a href="#">Aenean</a> a mauris augue. In egestas nisi turpis, et venenatis sapien ultrices eget. Nunc mattis nunc quis erat pretium tristique.<br><br>
                                                    Mauris suscipit metus ullamcorper enim fringilla sagittis. Duis dui leo, mattis ac rhoncus eget, interdum a ipsum. Duis rutrum, justo et egestas feugiat, dui velit egestas velit, feugiat efficitur ante mauris eu ipsum. Aliquam quis sem vitae mi fringilla ornare eu quis orci. Fusce tellus sem, gravida a nunc eget, vehicula <a href="#">commodo</a> sapien.</p> -->
                                                    Address: <?php  echo $row2['address']; ?>
                                                    <br>
                                                    Contact Number: <?php  echo $row2['mobileNumber']; ?>
                                                    <br>
                                                    Email Address: <?php  echo $row2['emailAddress']; ?>
                                                    <br>
                                                    Address: <?php  echo $row2['address']; ?>
                                                </div>
                                                <div class="divide-line">
                                                <img src="images/div-line.png" alt="" />
                                                </div>    
                                                     <div class="row">
                                                        <div class="filters col-md-12 col-xs-12">
                                                            <ul id="filters" class="clearfix">
                                                                <li><span class="filter" data-filter="all">All</span></li>
                                                                <li><span class="filter" data-filter=".debut">Debut</span></li>
                                                                <li><span class="filter" data-filter=".wedding">Wedding</span></li>
                                                                <li><span class="filter" data-filter=".childrenparty">Children Party</span></li>
                                                                <li><span class="filter" data-filter=".specialoccasion">Special Occasion</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                     <div class="row" id="Container">
                                                    <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                        //echo $row['featured_picture'];
                                                        $string = str_replace(' ','',$row['category']);
                                                        ?>
                                                        <div class="col-md-3 col-sm-6 mix portfolio-item <?php echo $string; ?>">       
                                                            <div class="portfolio-wrapper">                
                                                                <div class="portfolio-thumb">
                                                                  <img height="270" weight="250" src="<?php echo $row['featured_picture']; ?>" alt="" /> 
                                                                 <img src="">
                                                                    <div class="hover">
                                                                        <div class="hover-iner">
                                                                            <a class="fancybox" href="<?php echo $row['featured_picture']; ?>"><img src="images/open-icon.png" alt="" /></a>
                                                                            <!-- <span>Pizza</span> -->
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                                <div class="label-text">
                                                                    <h3><a href="single-post.html"><?php echo $row['name']; ?></a></h3>
                                                                    <span class="text-category"><?php echo $row['price']; ?></span>
                                                                </div>
                                                            </div>          
                                                        </div>
                                                    <?php }  
                                                    echo $row['company']; ?>
                                                    </div>   <!--   -->
                                                    <hr>
                                                    <br>
                                                    <br>
                    <form action="profile.php?company=<?php echo $_GET['company']; ?>" method="post">


  Please choose Category<select name="category" onchange="showUser(this.value,'<?php echo $company; ?>')" required>

  <option value="">Please select a Category:</option>
  <option value="debut">debut</option>
  <option value="children party">Children Party</option>
  <option value="wedding">wedding</option>
  <option value="special occasion">special occasion</option>
  </select>
  <div id="txtHint"><b>Packages will be listed here</b></div>
  
                                                     <?php   
                                                        if (isset($_SESSION['logged']) and $petsa !== $row3['expiration']) {

                                                            echo '<input type="submit" name="submit" class="button" value="Inquire">';
                                                        }elseif (isset($_SESSION['logged']) and $petsa == $row3['expiration']) {
                                                             echo '<input type="submit" name="submit" class="button" value="Inquire" disabled>';
                                                             echo '<div style="height: 30px;"></div>';
                                                             echo '<div class="alert alert-danger"><span><center>';
                                                             echo "Can only Inquire once per Day";
                                                             echo "</center></span></div>";
                                                        }else{
                                                            echo '<input type="submit" name="submit" class="button" value="Inquire" disabled>';
                                                              echo '<div style="height: 30px;"></div>';
                                                             echo '<div class="alert alert-danger"><span><center>';
                                                             echo "Please Register to Inquire";
                                                             echo "</center></span></div>";
                                                        }
                                                    ?>
                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
<?php include("includes/layouts/footer.php");  ?>