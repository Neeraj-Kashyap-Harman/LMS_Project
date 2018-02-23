<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISSC SIGNUP</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<h3>Activation Successful!!!!!!!!!!</h3>
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">
<?php
// Database Connection
include('dbconnect.php');
$value = $_POST['Submit'];
// Getting value of selected checkbox 
$ch = $_POST['ch'];

// Count of selected checkbox
$size = count($ch);
echo "Number of Accounts validated = ".$size."<br>";
echo "Please Click the below link to migrate to Validating Accounts<br>";

// Updating status of selected users to 1
 
for($i=0;$i<$size;$i++)
{
echo $ch[$i];
$Email=$ch[$i];
if($value=='Activate')
{
$update ="update users set status=1 where Email='$Email' ";

//SENDING ACTIVATION MAIL TO USER
	$to      = $Email; // Send email to our user
	$subject = 'Account | Activation'; // Give the email a subject 
	$message = 'Your account has been Activated.
		    You can login with the your credentials.
 
		Please click this link to Login:
		http://localhost/library/RegistrationLogin/index.html
		'; // Our message above including the link
                     
	$headers = 'From:issclms@gmail.com' . "\r\n"; // Set from headers

	//$result =  mail($to, $subject, $message, $headers); // Send our email
        
if(mysqli_query($connection,$update))
{
	//echo "Record is Updated";
	$fetch=mysqli_query($connection,"select user_role from users where Email='$Email' ");
	while($row=mysqli_fetch_array($fetch))
	{
		$role=$row['user_role'];
		//echo $role;
		
	}
}
	if($role=='Student')
	{	
	//echo '*****';
	//echo $Email.'$$$$';
	mysqli_query($connection,"insert into Students (u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification) select u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification from users where user_role='$role' AND status=1");

	//echo "######33";
	}
	else if($role=='Faculty')
	{
	mysqli_query($connection,"insert into faculty (u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification) select u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification from users where user_role='$role' AND status=1");
	}
	else if($role=='Fellow')
	{
	mysqli_query($connection,"insert into fellows (u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification) select u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification from users where user_role='$role' AND status=1");
	}
	else if($role=='Staff')
	{
	mysqli_query($connection,"insert into Staff (u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification) select u_id,user_role,Name,Address,Email,password,birthdate,Gender,Mobile_no,course,Qualification from users where user_role='$role' AND status=1");
	}
		echo "<script type='text/javascript'>";
		echo "alert('The Selecte Account = $Email has been activated.');";
		echo "window.location.href='/library/adminindex.html?uid=1';";
                echo "</script>";

}
else
if($value=='Deactivate')
{
$update1 ="update users set status=0 where Email='$Email' ";
if(mysqli_query($connection,$update1))
{
//echo "The Selecte Account = '$Email' has been deactivated.<br>";
		echo "<script type='text/javascript'>";
		echo "alert('The Selecte Account = $Email has been deactivated.');";
		echo "window.location.href='/library/adminindex.html?uid=1';";
                echo "</script>";
}
	
}	

}

// Alert Message 


mysqli_close($connection);
?>
<html>
<body>
<a href="Validate.php">Actiavte Accounts</a>
</body>
</html>

</div>
<!-- end wrap div --> 
</body>
</html>
