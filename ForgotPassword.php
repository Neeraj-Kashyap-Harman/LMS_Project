<?php


header('Access-Control-Allow-Origin: *');


$connection=mysqli_connect("mysql.hostinger.in", "u166155055_issc", "abhiruadi","u166155055_lms") or die(mysql_error());




$email=$_GET['email'];



$result=mysqli_query($connection,"select * from users where Email='$email'") or die(mysql_error());


if(mysqli_affected_rows($connection) != 0)
 {
   $pass=rand(10,100000);
   $update ="update users set password=AES_ENCRYPT('$pass','$Name') where Email='$Email' ";
        if(mysqli_query($connection,$update));
   $to=$email; // Send email to our user
	$subject = 'Forgot Password'; // Give the email a subject 
		$message = 'Forgot Password ?
		    Your new password is '.$pass.' If you want to change the password go to link
     		    http://issclibrary.esy.es/library/RegistrationLogin/update1.html?email='.$email.'
		    '; // Our message above including the link
                     
	$headers = 'From:issclms@gmail.com' . "\r\n"; // Set from headers
        error_reporting(E_ERROR | E_PARSE);
	mail($to, $subject, $message, $headers); // Send our email

echo '{"status":"SUCCESS"}';
 }
else
  echo '{"status":"FAILED"}';
?>




