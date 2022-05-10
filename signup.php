<?php 
include_once 'header.php';
include_once 'confirm_users.php';
$image = "image.jpg";
Echo "<img src=".$image." Style=width:695px;height:140px;>";
echo <<<_END
<script>
    // fuction to validate the user with ajax
function checkUser(user)
{
    if (user.value == '')
    {
        O('info').innerHTML = ''
        return
    }

    params  = "user=" + user.value
    request = new ajaxRequest()
    request.open("POST", "checkuser.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.setRequestHeader("Content-length", params.length)
    request.setRequestHeader("Connection", "close")
    
    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
            if (this.status == 200)
                if (this.responseText != null)
                    O('info').innerHTML = this.responseText
    }
    request.send(params)
}

function ajaxRequest()
{
    try { var request = new XMLHttpRequest() }
    catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
            try { request = new ActiveXObject("Microsoft.XMLHTTP") }
            catch(e3) {
                request = false
    }   }   }
    return request
}
</script> 
<div class='main'><h3>Please enter your details to sign up</h3>
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user'])) destroySession();

if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = "Not all the fields were entered<br /><br />";
    else
    {
        if (mysql_num_rows(queryMysql("SELECT * FROM members
		      WHERE user='$user'")))
            $error = "<span class='taken'&nbsp;&#x2718;>That username already exists in our database try another options </span>  <br /><br />";
        else
		  {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die("<h4> your Account is created</h4>Please Log in.<br /><br />");
        }
    }
}

echo <<<_END
<form method='post' action='signup.php'>$error
<span class='fieldname'>Username</span>
<input type='text' maxlength='19' name='user' value='$user'
    onBlur='checkUser(this)'/><span id='info'></span><br />
<span class='fieldname'>Password</span>
<input type='password' maxlength='17' name='pass'
    value='$pass' /><br />
_END;
?>

<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Sign up' />
</form></div><br /></body></html>
