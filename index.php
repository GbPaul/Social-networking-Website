<?php 
// this display the website homepage
require_once 'util.php';
include_once 'header.php';

$image = "images3.jpg";
Echo "<img src=".$image." Style=width:695px;height:140px;>";

echo "<br /><span class='main'>Welcome to Paularge's Nest,";

if ($login) echo " $user, you are now logged in.";
else           echo ' please sign up or log in to join NEST.';

?>

</span><br /><br /></body></html>
