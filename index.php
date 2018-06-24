<?php   
    include("includes/layouts/header.php"); 
    include("company.php"); 
    // $query = "SELECT DISTINCT company,company_logo FROM user_login ";
    // $query .= "where account_type = 'company' and ";
    // $query .= "verify = 'verified'";
    // echo $query;
    $result = $db->query("SELECT DISTINCT company,company_logo FROM user_login where account_type = 'company' and verify = 'verified'");
    // $result = mysqli_query($connection,$query);



if (isset($_SESSION['message'])) {
 echo "
 <script>
$(window).on('load',function(){
        $('#myModals').modal('show');
    });

</script>
 ";
}
if (isset($_SESSION['error'])) {
 echo "
 <script>
$(window).on('load',function(){
        $('#myModalsa').modal('show');
    });

</script>
 ";
}
?>
            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Catering Companies</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-4 col-sm-6">
                             <a href="profile.php?company=<?php echo $row['company'];  ?>">
                            <div class="blog-post">
                                <div class="blog-thumb">  
                                    <img height='345' width='234' src="<?php echo $row['company_logo']; ?>" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><?php echo $row['company'];  ?></h4>
                                    </div>
                                <!--     <div class="content-hide">
                                        <p>Our full catering services include a choice of menu and thematic floral dress-up of the reception area. Our well-oriented and skilled team of waiters and food attendants will serve and attend to all your needs on the day of your wedding.</p>
                                    </div> -->
                                </div>
                              </a>
                          </div>
                        </div>
                        <?php   } ?>
                    </div>  
                 </div>
             </div>
<div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Benefits</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
                                <li>
                                    <div class="testimonails-content">
                                        <p>Help's you find the best Catering Company</p>
                                        <!-- <h6>Sherwin Lubiano - <a href="#" onclick="return false;">Documentation</a></h6> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Time Efficient</p>
                                        <!-- <h6>Carebe Catungal - <a href="#">Data Gathering</a></h6> -->
                                    </div> 
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>User Friendly</p>
                                        <!-- <h6>Franz Maglanque - <a href="#">Programmer</a></h6> -->
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Cost Effective</p>
                                       <!-- <h6>Julie Ann Banyaga - <a href="#">Data Gathering</a></h6> -->
                                    </div>
                                </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- HTML for the create package modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Package</h4>
        </div>
        <div class="modal-body">
    <!--       <p>This is a large modal.</p> -->
          <form action="create_package.php" method="post" enctype="multipart/form-data">
            Package Name<input type="text" name="name" placeholder="Package Name" required><br>
            Price<input type="number" name="price" required><br>
            Category<select name="category" required>
  <option value="wedding">Wedding</option>
  <option value="debut">Debut</option>
  <option value="children party">Children Party</option>
  <option value="special occasion">Special Occasions</option>
</select><br>
            Package Image<input type="file" name="image" required>
            <input type="submit" name="submit">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- HTML for the Success message modal -->
  <div class="modal fade" id="myModals" role="dialog" ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">        
        <!--   <h4 class="modal-title">Create Package</h4> -->
        </div>
        <div class="modal-body">
          <?php
            if (isset($_SESSION['message'])) {
              $mensahe = $_SESSION['message'];
              echo "<div class='alert alert-success' role='alert'>$mensahe</div>";
              unset($_SESSION['message']);
            }
          ?>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


<!-- HTML for the Success message modal -->
  <div class="modal fade" id="myModalsa" role="dialog" ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">        
        <!--   <h4 class="modal-title">Create Package</h4> -->
        </div>
        <div class="modal-body">
          <?php
            if (isset($_SESSION['error'])) {
              $mensahe = $_SESSION['error'];
              echo "<div class='alert alert-danger' role='alert'>$mensahe</div>";
              unset($_SESSION['error']);
            }
          ?>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>


	<?php   include("includes/layouts/footer.php"); ?>		