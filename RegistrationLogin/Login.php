<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISSC LOGIN</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<br><br>
<div id="header">
<!--<h3>Login Successfull!!!</h3>-->
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">

<?php

header('Access-Control-Allow-Origin: *');

include('dbconnect.php');
if(isset($_POST['Submit']))
{ // Fetching variables of the form which travels in URL
	$val=$_POST['Submit'];
	//echo "$val";
  //FETCHING NAME FROM DATABASE
 
	if($val=='Login')
	{	
	
	
		$E_user = $_POST['E_user'];
		//$Email=$Email1.'@issc.unipune.ac.in';
		$password = $_POST['password'];
		
		
		//echo $Email;
		//echo $password;


	$q1=mysqli_query($connection,"select Name,u_id,user_name from users where user_name='$E_user' or Email='$E_user'");
	while($data=mysqli_fetch_array($q1))
	{
		$Name = $data['Name'];
		$id=$data['u_id'];

	}
 	//echo $Name."<br>";

//select user_role,AES_DECRYPT(password,'Renuka Baikan') as pwd from users where email='gneha@issc.unipune.ac.in';	
	//echo $Email;
	//echo $password;
 
	$ans=mysqli_query($connection,"select AES_DECRYPT(password,'$Name') as pwd from users where user_name='$E_user' or Email='$E_user'");
        while($data = mysqli_fetch_array($ans))
        {
           $pass = $data['pwd'];
	
	}
	//echo $pass."<br>";           
	
	$number = mysqli_num_rows($ans);
        if($pass!=$password)
        {
	   echo "<script type='text/javascript'>"; 
	   echo "alert('Please check your username and password!');"; 
           echo "window.location.href='index.html';";
           echo "</script>";   
        }

	$assignment=mysqli_query($connection,"select user_role,status,active from users where user_name='$E_user' or Email='$E_user'");
	while($row = mysqli_fetch_array($assignment))
		{
		$role=$row['user_role'];
		$status=$row['status'];
                $active=$row['active'];
		}
		//echo $status."<br>";
		//echo $role."<br>";
		//echo $active."<br>";
		//echo $role."ggggggg".$status;
		if($status!=1)
		{
			echo $role."Data";
	                echo "<script type='text/javascript'>"; 
		        echo "alert('You are not activated!');"; 
		        echo "window.location.href='index.html';";
		        echo "</script>";   
		} // if end


		if($active==0)
		{
			echo $role."Data";
	                echo "<script type='text/javascript'>"; 
		        echo "alert('Please validate your Email Id!');"; 
		        echo "window.location.href='index.html';";
		        echo "</script>";   
		}// if end
	//echo $role;
	if(($role=='Student' || $role=='Fellow') && $status==1 )
	{
		?>
		<html>
	<body>
	<br>
<!--	<a href="Library">Library Management System</a><br>
	<a href="Exam">Quiz and Exam System</a><br>-->
	<div align="center">
	<a href="/library/userindex.php?uid=<?php echo $id;?>"><img src="index.jpeg" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Exam.html"><img src="exam2.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
	</div>
	</body>
	</html>
	<?php
	} // Student if end
	else if(($role=='Faculty' && $status==1) )
	{
		?>
	<a href="/library/userindex.php?uid=<?php echo $id;?>"><img src="index.jpeg" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Exam.html"><img src="exam2.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Faculty.html"><img src="mylogo.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Wifi.html"><img src="wifi.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
	</body>
	</html>
		
	<?php
	} // Faculty if end
	else
	if(($role=='Staff' && $status==1))
	{
		?>
	<a href="/library/userindex.php?uid=<?php echo $id;?>"><img src="index.jpeg" style="width: 500px; height: 300px" align="top right" border="3px solid #000000"> </a>
<a href="Exam.html"><img src="exam2.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Faculty.html"><img src="mylogo.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
</body>
	</html>
<?php
	} // Staff if end
	else if(($role=='Admin' && $status==1) )
	{
		?>
	<a href="/library/adminindex.html?uid=<?php echo $id;?>"><img src="index.jpeg" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Exam.html"><img src="exam2.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Faculty.html"><img src="mylogo.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
<a href="Wifi.html"><img src="wifi.png" style="width: 100px; height: 100px" align="top right" border="3px solid #000000"> </a>
	</body>
	</html>
	<?php
	}

mysqli_close($connection);
}
}
else{
	// Invalid approach
	echo '<div class="statusmsg">Invalid approach, You cannot access this URL.</div>';
} 
?>
</div>
<!-- end wrap div --> 
</body>
</html>
