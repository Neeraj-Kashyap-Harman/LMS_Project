

<?php

header('Access-Control-Allow-Origin: *');

       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	 $userid=$_REQUEST['uid'];
        $bookid=$_REQUEST['bid'];

	$sql2 = "select * from users where u_id=$userid";
	$rs2 = mysqli_query($conn,$sql2);
	while($row = mysqli_fetch_array($rs2)) {
	
		$uemail = $row['Email'];
	}
	$sql3 = "select * from Book where Book_id=$bookid";
	$rs3 = mysqli_query($conn,$sql3);
	while($row = mysqli_fetch_array($rs3)) {
	
		$book_name = $row['Book_Title'] ;
		$author_name= $row['Author'];
	}
	 $sql = "update Issue set book_status='Returned' where  Book_id = $bookid and u_id= $userid";

	//$sql = "delete from Book where Book_id = $bookid";


	if(mysqli_query($conn,$sql))
	{
		//increment No. of copies of book
		$sql5 = mysqli_query($conn,"update Book set Available_copies = Available_copies+1 where Book_id=$bookid");
		
		$st = date('Y-m-d');
  		$to = $uemail; 
  		$subject = 'Book Returned.'; 
  		$message = 'Thank You for Returning the Book. : 
	--------------------------------------------------------
		Book Name :'.$book_name.'
	        Author Name :'.$author_name.'
		
	--------------------------------------------------------';
  		$headers = 'From:issclms@issc.ac.in' . "\r\n";
          error_reporting(E_ERROR | E_PARSE);
		mail($to,$subject,$message,$headers);
		echo "<script>";
		echo "window.location.href='admin_book_issue.php';";
                echo "</script>";

	}

	$sqla = "select u_id from Notification where status='unread' and type='reserve' and Book_id=$bookid";


	$u_id=mysqli_query($conn,$sqla);
	
		while($row = mysqli_fetch_array($u_id)) 
		{
	
			$sqlb=mysqli_query($conn,"select * from users where u_id=$row[u_id]");
			$user=mysqli_fetch_array($sqlb);
			
		$st = date('Y-m-d');
  		$to = $user['Email']; 
  		$subject = 'Book Available'; 
  		$message = 'The book reserved by you is now available, you can give an issue request. : 
	--------------------------------------------------------
		Book Name :'.$book_name.'
	        Author Name :'.$author_name.'
		
	--------------------------------------------------------';
  		$headers = 'From:issclms@issc.ac.in' . "\r\n";
          error_reporting(E_ERROR | E_PARSE);
		mail($to,$subject,$message,$headers);
		echo "<script>";
		echo "window.location.href='admin_book_issue.php';";
                echo "</script>";


		}
		 




      mysqli_close($conn);
?>

