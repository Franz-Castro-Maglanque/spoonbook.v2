<?php   include("includes/layouts/about_header.php"); 


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM packages ";
    $query .= "where id = '$id'";
    $result = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);

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
                                                        <h4><b>Package Details</b></h4>
                                                        <!-- <span class="subtitle">4 comments</span> -->
                                                    </div>
                                                    Address: <?php  echo $row['name']; ?>
                                                    <br>
                                                    Category: <?php  echo $row['category']; ?>
                                                    <br>
                                                    Price: <?php  echo $row['price']; ?>
                                                    <br>
                                                     Description: <?php  echo $row['description']; ?>
                                                     <br><br>
                                                   <b>Ameneties:</b> <textarea rows="4" cols="50" disabled><?php  echo $row['ameneties']; ?></textarea>
                                                     <br><br>
                                                     <b>Inclusions:</b> <textarea rows="4" cols="50" disabled><?php  echo $row['inclusions']; ?></textarea>
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