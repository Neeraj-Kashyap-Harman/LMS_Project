

<?php

header('Access-Control-Allow-Origin: *');

       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	
         $bookid=$_REQUEST['bid'];
	 $copies = $_REQUEST['copy'];
	
	if( $copies == NULL )
		{
		   window.location.href == "admin_booklist.php";
		}
	
	
	$sql1 = "select No_of_copies from Book where Book_id = $bookid"; 
	$result = mysqli_query($conn,$sql1);

	while($row = mysqli_fetch_array($result))
	{
		$number = $row['No_of_copies'];
		
		if($number == $copies)
		{
	         // $sql = "delete from Book where Book_id = $bookid";

			if(mysqli_query($conn,$sql))
			{
			echo "<script type='text/javascript'>";
			echo "alert('Your Data has been Successfully deleted.');";
			echo "window.location.href='admin_booklist.php';";
	                echo "</script>";
			}
		}
		if($number > $copies)
		{
			//$sql2 = "update Book set No_of_copies = No_of_copies-$copies,Available_copies =  Available_copies-$copies where Book_id = $bookid";
			if(mysqli_query($conn,$sql2))
			{
			echo "<script type='text/javascript'>";
			echo "alert('Your Data has been Successfully deleted.');";
			echo "window.location.href='admin_booklist.php';";
	                echo "</script>";
			}
		}
	}

       mysqli_close($conn);
?>
