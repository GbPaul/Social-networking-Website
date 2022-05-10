<?php 
// this function checks if the value USER has been assigned a value ,if yes then the user has login 

session_start();
echo "<!DOCTYPE html>\n<html><head><script src='javaScript.js'></script>";
include 'functions.php';

$userstr = ' (Guest_user)';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $login = TRUE;
    $userstr  = " ($user)";
}
else $login = FALSE;

echo "<title>$websitename$userstr</title><link rel='stylesheet' " .
     "href='styles.css' type='text/css' />" .
     "</head><body><div class='appname'>$websitename$userstr</div>";

// this give us a full access to the website if the user has been assigned a value 
if ($login)
{
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Home</a></li>" .
          "<li><a href='messages.php'>Messages</a></li>" .
         "<li><a href='friends.php'>Friends</a></li>" .
            "<li><a href='members.php'>Members</a></li>" .
         "<li><a href='profile.php'>Edit Profile</a></li>" .
         "<li><a href='logout.php'>Sign out</a></li></ul><br />";
}
else
{
    // if not log in 
    echo ("<br /><ul class='menu'>" .
         "<li><a href='index.php'>Home</a></li>" .
             "<li><a href='login.php'>Log in</a></li>" .
         "<li><a href='signup.php'>Sign up</a></li></ul><br />" .
         "<span class='info'>&#8658; User's must Log in to " .
         "view this page.</span><br /><br />"
  
            );
     
}
?>
