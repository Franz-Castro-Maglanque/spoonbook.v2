<?php   include("includes/layouts/about_header.php"); 

$query = "SELECT * FROM packages where verify = 'verified'";
if (isset($_POST['submit'])) {
  $category = $_POST['category'];
  $query = "SELECT * FROM packages where verify = 'verified' and category = '{$category}'";
}
$result = mysqli_query($connection,$query);
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

                <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Packages</h2>
                                <span>Home / <a href="about-us.php">About us</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="timeline-post">
              <div class="row" id="Container"><br>
                  
                        <form action="package_list.php" method="post">
                     <b> PPPlease choose Category</b><select name="category" onchange="showUser(this.value,'<?php echo $company; ?>')" required>
                      <option value="">Please select a Category:</option>
                      <option value="debut">debut</option>
                      <option value="children party">Children Party</option>
                      <option value="wedding">wedding</option>
                      <option value="special occasion">special occasion</option>
                      </select>
                      <br>
                      <input type="submit" name="submit" value="filter">
                      </form>
                      <br>
                                                  <div id="packages">
                                                    <?php while ($row = mysqli_fetch_assoc($result)) { 
                                                        ?>
                                                        <div class="col-md-3 col-sm-6 mix portfolio-item <?php echo $string; ?>">       
                                                            <div class="portfolio-wrapper">                
                                                                <div class="portfolio-thumb">
                                                                  <img height="270" weight="250" src="<?php echo $row['featured_picture']; ?>" alt="" /> 
                                                                 <img src="">
                                                                    <div class="hover">
                                                                        <div class="hover-iner">
                                                                            <a class="fancybox" href="package_profile.php?id=<?php  echo $row['id'];  ?>"><img src="images/open-icon.png" alt="" /></a>
                                                                            <!-- <span>Pizza</span> -->
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                                <div class="label-text">
                                                                    <h3 class="name"><a href="single-post.html"><?php echo $row['name']; ?></a></h3>
                                                                    <span class="price"><?php echo $row['price']; ?></span>
                                                                    <span class="price"><?php echo $row['category']; ?></span>
                                                                </div>
                                                            </div>          
                                                        </div>
                                                    <?php }  
                                                    echo $row['company']; 
                                                    ?>
                                                    </div>
               </div>   <!--   -->
            </div>
         
                        <script type="text/javascript">
              var options = {
              valueNames: [ 'name', 'price' ]
            };

            var userList = new List('packages', options);
            </script>



            <?php   include("includes/layouts/footer2.php"); ?>