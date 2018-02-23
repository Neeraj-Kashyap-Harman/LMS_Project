<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISSC SIGNUP</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<!--<h3>SIGNUP SUCCESSFULL!!!!!!!!!!!!</h3>-->
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">
<?php

include('dbconnect.php');
if(isset($_POST['Role']) && !empty($_POST['Role'])
	 AND isset($_POST['Name']) && !empty($_POST['Name'])
	 AND isset($_POST['Address']) && !empty($_POST['Address'])
	 AND isset($_POST['Email']) && !empty($_POST['Email'])
	 AND isset($_POST['Mobile']) && !empty($_POST['Mobile'])

	 AND isset($_POST['user_name']) && !empty($_POST['user_name'])

	 AND isset($_POST['password']) && !empty($_POST['password'])
	 AND isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])
	 AND isset($_POST['gender']) && !empty($_POST['gender'])
	 AND isset($_POST['date']) && !empty($_POST['date'])
         AND isset($_POST['captcha']) && !empty($_POST['captcha']))
{ // Fetching variables of the form which travels in URL
	
	$Role=$_POST['Role'];
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
        $user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$Date = $_POST['date'];
	$Mobile = $_POST['Mobile'];

	//$Email=$Email1.'@issc.unipune.ac.in';

	$query="select Email from users where Email='$Email'";
	$ans=mysqli_query($connection,$query);
	$number=mysqli_num_rows($ans);
	//echo $number;	
	//echo $Email;
	if(mysqli_num_rows($ans)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Email id already exists!!!!!');";
		echo "window.location.href='Register.html'";
       		echo "</script>";

	}
	else if(mysqli_num_rows($ans)<=0)
	{	
	if((isset($_POST['Name']) && !empty($_POST['Name'])) AND (isset($_POST['Email']) && !empty($_POST['Email'])))
	{
        	
    		$Name = mysqli_escape_string($connection,$_POST['Name']); // Turn our post into a local variable
    		$Email = mysqli_escape_string($connection,$_POST['Email']); // Turn our post into a local variable
		//$Email=$Email1.'@issc.unipune.ac.in';
	}
	
	//CHECKING WHETHER EMAIL IS VALID OR NOT

	if(!filter_var($Email,FILTER_VALIDATE_EMAIL))
	{
    	// Return Error - Invalid Email
    	$msg = 'The email you have entered is invalid, please try again.'; 
	}
	
	else	
	{
       //Return Success - Valid Email
    	$msg = 'Your account has been made, <br /> Please verify your Email id by clicking the activation link that has been sent to your email.';
	}





	$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
				     // Example output: f4552671f8909587cf485ea990207f3b

	//echo $hash;
	//echo $Role;
        

        
	
			
	$query2="insert into users(user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,status,active,hash,user_name) 

		values('$Role','$Name','$Address','$Email',AES_ENCRYPT('$password','$Name'),'$Date','$gender','$Mobile',0,1,'$hash','$user_name')";
		
		//echo $query1;


        
        //check username available or not
        $query1="select user_name from users where user_name='$user_name'";
	$ans1=mysqli_query($connection,$query1);
	$number1=mysqli_num_rows($ans1);
	//echo $number1;	
	//echo $Email;
         session_start(); //For captcha
	if(mysqli_num_rows($ans1)>0)
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Username already exists!!!!!');";
		echo "window.location.href='Register.html'";
       		echo "</script>";  
		
	}//check for username end

        //captcha start
        elseif($_POST['captcha'] != $_SESSION['my_captcha'])
	{	
		echo "<script type='text/javascript'>"; 
        	echo "alert('Please enter correct captcha code');";
		echo "window.location.href='Register.html'";
       		echo "</script>";  
		
	}
        else
        {
                $done='SIGNUP SUCCESSFULL!!!!!!!!!!!!';
                echo "<html><body><h3>$done</h3></body></html>";
                echo $msg;
                $query = mysqli_query($connection,$query2);
        }
        unset($_SESSION['my_captcha']);
        //captcha end        



               





		
		echo "<script type='text/javascript'>"; 
        	echo "alert('You have registered successfully!');"; 
       
       	        echo "</script>";   

		
		//Send the Verification Email

	$to      = $Email; // Send email to our user
	$subject = 'Signup | Verification'; // Give the email a subject 
	$message = 'Thanks for signing up!
		    Your account has been created.
		    Please Verify your email by clicking on the below link.
		    You can login with the following credentials after your account has been activated by admin.
 
		------------------------
		Username: '.$Email.'
		Password: '.$password.'
		------------------------
 
		Please click this link to verify your email:
		http://issclibrary.esy.es/library/RegistrationLogin/verify.php?email='.$Email.'&hash='.$hash.'
		'; // Our message above including the link
                     
	$headers = 'From:issclms@gmail.com' . "\r\n"; // Set from headers
        
error_reporting(E_ERROR | E_PARSE);
	$result=mail($to, $subject, $message, $headers); // Send our email
        
	if($result == true)
	{
	//SENDING MAIL TO ADMIN
       

	$to_admin      = 'issclms@gmail.com'; // For verfication purpose admin mail has been hardcoded
        $subject_admin = 'Authentication | Account Activation'; // Give the email a subject 
        $message_admin = 'New Registered user
                          Kindly Verify and activate the account.
 
                	  Please click this link to activate the Registered User Account:
                	  http://issclibrary.esy.es/library/RegistrationLogin/Validate.php'; //temporary link

        $headers_admin = 'ISSCLMSREGISTERATION' . "\r\n"; // Set from headers
        mail($to_admin, $subject_admin, $message_admin, $headers_admin); // Send our email

	}

}//end of else if(email id is unique)
		
mysqli_close($connection); // Closing Connection with Server
}//end of if(isset)
else{
	// Invalid approach
	echo '<div class="statusmsg">Invalid approach, You cannot access this URL.</div>';
}
?>
<html>
<body>
<a href="index.html">Home Page</a>
</body>
</html>
</div>
<!-- end wrap div --> 
</body>
</html>
								