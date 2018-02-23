 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Forgot Password</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<h3>SUCCESSSS !!!!!</h3>
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">


<?php

include("dbconnect.php");

if(isset($_POST['Email']) && !empty($_POST['Email']))
{
	$Email = $_POST['Email'];
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
	//CHECKING WHETHER EMAIL IS VALID OR NOT
	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $Email))
	{
    	
	// Return Error - Invalid Email
    	$msg = 'The email you have entered is invalid, please try again.';
	}  
	

         $pass=rand(10,100000);
         //echo $pass;

          
         $q1=mysqli_query($connection,"select Name from users where Email='$Email'");
         while($data=mysqli_fetch_array($q1))
         {
             $Name = $data['Name'];
         } 

        $update ="update users set password=AES_ENCRYPT('$pass','$Name') where Email='$Email' ";
        if(mysqli_query($connection,$update))
        {
	       // echo $pass;
        }
	

		//Send the Verification Email

	$to      = $Email; // Send email to our user
	$subject = 'Forgot Password'; // Give the email a subject 
	$message = 'Forgot Password ?
		    Your new password is '.$pass.'. If you want to change the password go to link
     		    http://issclibrary.esy.es/library/RegistrationLogin/update1.html?email='.$Email.'
		    '; // Our message above including the link
                     
	$headers = 'From:issclms@gmail.com' . "\r\n"; // Set from headers
        error_reporting(E_ERROR | E_PARSE);
	mail($to, $subject, $message, $headers); // Send our email
			
	echo '<div class="statusmsg">An Email has been sent to your Registered Email Id.Please Check</div>';


mysqli_close($connection); // Closing Connection with Server
}else{
	// Invalid approach
	echo '<div class="statusmsg">Invalid approach, You cannot access this URL</div>';
}
?>
</div>
<!-- end wrap div --> 
</body>
</html>
				