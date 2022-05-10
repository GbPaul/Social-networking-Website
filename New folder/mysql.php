<?php
$con = mysql_connect("localhost","root","","collegenetworking");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("collegenetworking", $con);


?>
