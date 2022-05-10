<?php 
$dbhost  = 'localhost';    // database name 
$dbname  = 'projectweb'; // database username 
$dbuser  = 'root';    // my database username 
$dbpass  = '';    // username password 
$websitename = "Paularge's Nest";  // the name of the social network

// this two lines will open a connection to my database and select the appriopriate database 
mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());


 // the create table function will check if a table exist if not it will create a new table
function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br />";
}
 // function queryMysql create a query to Mysql 
function queryMysql($query)
{
    $result = mysql_query($query) or die(mysql_error());
	 return $result;
}
// Functions Destroysession clears its data to log users out and destroy php sessions 
function destroySession()
{
    $_SESSION=array();
    
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}
// Sanitize function removes any malicious code attempt or tags from users input 
function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return mysql_real_escape_string($var);
}
//showprofile functions  displays user's image and information
function showProfile($user)
{
    if (file_exists("$user.jpg"))
        echo "<img src='$user.jpg' align='left' />";

    $result = queryMysql("SELECT * FROM profiles WHERE user='$user'");

    if (mysql_num_rows($result))
    {
        $row = mysql_fetch_row($result);
        echo stripslashes($row[1]) . "<br clear=left /><br />";
    }
}
?>
