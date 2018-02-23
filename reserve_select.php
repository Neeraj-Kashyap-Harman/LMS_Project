<?php
       /*$servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "batch2015_bsonali";
 
       // Create connection
 
       $conn = new mysqlii($servername, $username, $password, $dbname);
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);
 
       } */
 
	include('conf.php');	

       $sql = "SELECT * from Notification where status = 'unread' and type='reserve'";
      // $result = $conn->query($sql);
	$result = mysqli_query($conn,$sql);
       //$row = $result->fetch_assoc();
	$count = mysqli_num_rows($result);
       //$count = $result->num_rows;
       echo $count;
       //$conn->close()
	mysqli_close($conn);
?>

 
