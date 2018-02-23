<?php

header('Access-Control-Allow-Origin: *');

       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	
         $bookid=$_REQUEST['bid'];
	 $userid=$_REQUEST['uid'];
	 $type=$_REQUEST['type'];
	 $Not_id=$_REQUEST['Not_id'];
	 $trans_id=$_REQUEST['trans_id'];	 
	
	$sql1 = "delete from transaction where Book_id = $bookid and u_id=$userid and type='$type' and trans_id=$trans_id"; 
	$sql2 = "delete from Notification where Book_id = $bookid and u_id=$userid and type='$type' and Not_id=$Not_id";

			if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2))
			{
			echo "<script type='text/javascript'>";
			echo "alert('Your Request has been Successfully Cancelled.');";
			echo "window.location.href='userindex.php?uid=$userid';";
	                echo "</script>";
			}

       mysqli_close($conn);
?>
