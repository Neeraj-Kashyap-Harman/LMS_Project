<?php
$BID=$_POST['bid'];

header('Access-Control-Allow-Origin: *');

/*
if($BID == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationLogin/index.html';";
                echo "</script>";
}*/
				
				
include('conf.php');


	//echo $BID;
	$sqlzz="select * from Book where Book_id=$BID and Available_copies>0";
	$resultzz=mysqli_query($conn,$sqlzz);
	$number = mysqli_num_rows($resultzz);
		
		if($number > 0)
		{
		echo "yes";
		}
		else
		{
		echo 'no';	
		}
?>
	   