<?php
header('Access-Control-Allow-Origin: *');
?>



</html>
<body>
<head>

<script type="text/javascript">
function showMessage(bid,no)
{
	var value = prompt('How many copies you want to delete ?','');
	if(value != null)
	{
		if(value > no)
		{
		   alert("You have entered value more than number of copies!!");
		   window.location.href="admin_booklist.php";
		}
		else
		{
		  if(value == '')
			 window.location.href="admin_booklist.php";
		  else
			window.location.href="book_delete_copies.php?bid="+bid+"&copy="+value;
		}
		//alert("Your Data has been Successfully deleted."+value);
	}
	if(value == null)
	{
		window.location.href="admin_booklist.php";
	}
}
</script>

<?php
       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	
         $bookid=$_REQUEST['bid'];
	
	$sql1 = "select No_of_copies from Book where Book_id = $bookid"; 
	$result = mysqli_query($conn,$sql1);

	while($row = mysqli_fetch_array($result))
	{
		$number = $row['No_of_copies'];
		
		if($number == 1)
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
		if($number > 1)
		{
			echo "<script> showMessage($bookid,$number); </script>";
		}
	}

       mysqli_close($conn);
?>

</head>
</body>
</html>



       
