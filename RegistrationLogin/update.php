<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UPDATE PASSWORD</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<h3>OOPSSS !!!!</h3>
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">
<?php
include("dbconnect.php");


if(isset($_POST['Email']) && !empty($_POST['Email']) AND isset($_POST['password']) && !empty($_POST['password']) AND isset($_POST['confirm_password']) && !empty($_POST['confirm_password']))
	{
	$Email = $_POST['Email'];
        $current_password = $_POST['current_pasword'];
	//$Email=$Email1.'@issc.unipune.ac.in';	
	$query="select Email from users where Email='$Email'";
	$ans=mysqli_query($connection,$query);
	$number=mysqli_num_rows($ans);
	//echo $number;	
	//echo $Email;
	if(mysqli_num_rows($ans)==0)
	{	
		echo "<script type='text/javascript'>"; 		
        	echo "alert('Email id does not exists !!!!!');";
		echo "window.location.href='forget1.html'";
       		echo "</script>";  
		
	}


        $query1="select Email,Name,password from users where Email='$Email' and AES_DECRYPT(password,(select Name from users where 'Email='".$Email."')";
	$ans1=mysqli_query($connection,$query);
        if(mysqli_num_rows($ans1)==0)
	{	
		echo "<script type='text/javascript'>"; 		
        	echo "alert('Enter right current password !!!!!');";
		echo "window.location.href='forget1.html'";
       		echo "</script>";  
	}



$password = $_POST['password'];


$Email = $_POST['Email'];
//$Email=$Email2.'@issc.unipune.ac.in';	
//echo $Email;
//FETCHING NAME FROM DATABASE
$q1=mysqli_query($connection,"select Name from users where Email='$Email'");
while($data=mysqli_fetch_array($q1))
{
$Name = $data['Name'];
}
$update ="update users set password=AES_ENCRYPT('$password','$Name') where Email='$Email' ";
if(mysqli_query($connection,$update))
{
	echo "<script type='text/javascript'>"; 
        	echo "alert('Your Password is Updated Successfully.');"; 
       		echo "window.location.href='index.html'";
       	        echo "</script>"; 
}
}
else{
	// Invalid approach
	echo '<div class="statusmsg">Invalid approach, You cannot access this URL</div>';
}

?>
</div>
<!-- end wrap div --> 
</body>
</html>		
	