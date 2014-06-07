<?php

// Where log warnings should be emailed
define('EMAIL_LOG','youremail@domain.com');

// Default should work, do not modify unless you're sure
define('LOGFILE','./tracker/log.txt');	

//change username and password
$LOGIN_INFORMATION = array(
  'admin' => 'password',
);


//#####################DO NOT MODIFY BELOW UNLESS YOU KNOW WHAT YOU'RE DOING##################

// Require username or not
// If you want to use username and password login leave this true.
// If you want only to request a password set it for false.
//using code from http://savasplace.com/scripts/

define('USE_USERNAME', true);

if(isset($_GET['logout'])) {
  setcookie("verify", ''); // clear password;
  die('<center><font face="Verdana" size="2">Logged out.</font></center>');
}
if(!function_exists('showLoginPasswordProtect')) {
function showLoginPasswordProtect($error_msg) {
?>
<!-- And this is the output -->

<html>
<head>
<title>YMMV: Real Web Stats</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<style>
* {
font-family:Verdana;
font-size:12px;
}
a {
color: #000000;
text-decoration: none;
}

a:hover {
color: red;
text-decoration: none;
}

input {
border: 1px solid black;
background-color: #FFFFFF;
}
.bodyform {
border-color: #000000;
border-style:solid;
border-width: 3px;
width:400px;
}
.title {
color: #FFFFFF;
background: #000000;
padding: 5px;

}
</style>
<meta name="robots" content="noindex,nofollow">
</head>
<body>
<center><br /><br />
<h2>YMMV: Real Web Stats</h2>
<div class="bodyform" align="center">
<form method="post">
<div class="title">
<strong>Access restricted - Login Below:</strong>
</div>
<div style="padding-right:10px;padding-left:10px;">
<font color="red"><strong><?php echo $error_msg; ?><strong></font><br /><br />
<?php if (USE_USERNAME) echo '<table>
<tr>
<td align="left">Login:</td>
<td align="right"><input type="input" name="access_login" /></td>
</tr>
<tr>
<td>Password:</td>'; ?>
<td><input type="password" name="access_password" /></td>
</tr>
</table>
<p></p>
<input type="submit" name="Submit" value="Submit" />
</form>
</div>
</div>
<br />
</center>
</body>
</html>
<?php
  die();
}
}
if (isset($_POST['access_password'])) {
  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (!USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
  || (USE_USERNAME && ( !array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass ) ) 
  ) {
    showLoginPasswordProtect("Incorrect password.");
  }
  else {
    setcookie("verify", md5($pass));
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }

}
else {
  if (!isset($_COOKIE['verify'])) {
    showLoginPasswordProtect("");
  }
  $found = false;
  foreach($LOGIN_INFORMATION as $kay=>$val) {
    if ($_COOKIE['verify'] == md5($val)) {
      $found = true;
      break;
    }
  }
  if (!$found) {
    showLoginPasswordProtect("");
  }
}
?>
