<?php


$test = $_GET['foo'];
echo $test;
$test2 = $_GET['bar'];
echo $test2;
?>


<form action="test.php" method="get">
  <input type="text" name="foo">
<input type="text" name="bar">
<input type="submit" name="submit">
</form>