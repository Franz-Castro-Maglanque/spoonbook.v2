 <?php

include("includes/session.php");
include("includes/db_connection.php");
$_SESSION['message'] = "this is a test";
echo $_SESSION['message'];
 ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<a href="#" onclick="$('#myModal').modal({'backdrop': 'static'});" class="btn btn-primary">yourModal</a>
<?php
 echo "
 <script>
$(window).on('load',function(){
        $('#myModals').modal('show');
    });

</script>
 ";
if (isset($_GET['uid'])) {
//  echo "
//  <script>
// $(window).on('load',function(){
//         $('#myModal').modal('show');
//     });

// </script>
//  ";

}else{
  echo "not set";
}
?>
<img src="pics/package1.jpg">




 <!-- HTML for the create package modal -->
  <div class="modal fade" id="myModal" role="dialog" ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">        
        <!--   <h4 class="modal-title">Create Package</h4> -->
        </div>
        <div class="modal-body">
          <?php
            if (isset($_GET['uid'])) {
              $mensahe = $_GET['uid'];
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





 <!-- HTML for the create package modal -->
  <div class="modal fade" id="myModals" role="dialog" ">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">        
        <!--   <h4 class="modal-title">Create Package</h4> -->
        </div>
        <div class="modal-body">
          <?php
            if (isset($_GET['uid'])) {
              $mensahe = $_GET['uid'];
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




<script type="text/javascript">
//   $("#idForm").submit(function(e) {

//     var url = "localhost/spoonbook.v2/change_passowrd.php"; // the script where you handle the form input.

//     $.ajax({
//            type: "POST",
//            url: url,
//            data: $("#idForm").serialize(), // serializes the form's elements.
//            success: function(data)
//            {
//                alert(data); // show response from the php script.
//            }
//          });

//     e.preventDefault(); // avoid to execute the actual submit of the form.
// });

// function loadModal(){
//   $(window).on('load',function(){
//         $('#myModal').modal('show');
//     });
// }
</script>
