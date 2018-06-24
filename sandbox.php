<?php
include("includes/db_connection.php");
include("includes/functions.php");

if (isset($_POST['submit'])) {
    echo "form submitted";
}else{
    echo "form not submitted yet";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<form action="sandbox.php" method="post">
<input type="file" id="file" />
<input type="submit" name="submit">
</form>

<script type="text/javascript">
	var _URL = window.URL || window.webkitURL;

$("#file").change(function(e) {
    
    var image, file;

    if ((file = this.files[0])) {
       
        image = new Image();
        
        image.onload = function() {
            
          //alert("The image width is " +this.width + " and image height is " + this.height);
            if (this.width == 1024 && this.height == 700) {
                 $(document).ready(function() {
            //option A
            $("form").submit(function(e){
                alert('submit intercepted');
                e.preventDefault(e);
             
            });
        });
            }

 
        };
    
        image.src = _URL.createObjectURL(file);


    }

});


 // $(document).ready(function() {
 //            //option A
 //            $("form").submit(function(e){
 //                alert('submit intercepted');
 //                e.preventDefault(e);
             
 //            });
 //        });

</script>