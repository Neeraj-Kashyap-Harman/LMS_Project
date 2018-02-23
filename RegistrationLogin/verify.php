<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include ("dbconnect.php")
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISSC SIGNUP</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<h3>Email Verified</h3>
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">
<!-- start PHP code -->
<?php

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{
	// Verify data
error_reporting(E_ERROR | E_PARSE);
	$email = mysqli_escape_string($_GET['email']); // Set email variable
	$hash = mysqli_escape_string($_GET['hash']); // Set hash variable

	$search = mysqli_query($connection,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error()); 
	$match  = mysqli_num_rows($search);

	if($match > 0){
		// We have a match, activate the account
		mysqli_query($connection,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysqli_error());
		echo '<div class="statusmsg">Your Email has been Verified. Kindly Login After the Administrator Activates Your Account</div>';
	}else{
		// No match -> invalid url or account has already been activated.
		echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
	}

}else{
	// Invalid approach
	echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
} 
?>
<html>
<body>
<a href="index.html">Home Page</a>
</body>
</html>
<!-- stop PHP Code -->


</div>
<!-- end wrap div --> 
</body>
</html>
