<html>
<head>
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
        xmlhttp.open("GET","example.php?q="+str+"&company="+company,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<form >

<select name="category" onchange="showUser(this.value,'<?php echo $_GET['company']; ?>')" required>
  <option value="">Select a person:</option>
  <option value="debut">debut</option>
  <option value="birthday">birthday</option>
  <option value="wedding">wedding</option>
  <option value="special occasion">special occasion</option>
  </select>
  <div id="txtHint"><b>
    
  </b></div>
  <input type="submit" name="submit">
</form>
<br>

<!-- onchange="showUser(this.value)" -->
</body>
</html>