
<?php
require_once("includes/session.php");
include("includes/functions.php");

session_unset();
redirect_to("index.php");
?>