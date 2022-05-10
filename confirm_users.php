<?php
include_once 'functions.php';

if (isset($_POST['holder']))
{
    $holder = sanitizeString($_POST['holder']);

    if (mysql_num_rows(queryMysql("SELECT * FROM members
        WHERE holder='$holder'")))
        echo  "";
    else echo "<span class='available'>&nbsp;&#x2714; " .
              "This username is available you can now login</span>";
}
?>
