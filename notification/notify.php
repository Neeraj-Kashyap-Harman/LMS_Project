<?php
       
        $conn=mysqli_connect('mysql.hostinger.in','u166155055_issc','abhiruadi','u166155055_lms') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection
 
     
       $sql = "SELECT * from message where status = 'unread'";
       $result = mysqli_query($conn,$sql);
      // $row = $result->fetch_assoc();
      // $count = $result->num_rows;
       //echo $count;

	echo "<table border=1>";
        echo "<tr> <th>ID</th> <th>Notification</th> <th>Status</th> </tr>";

	while($row = mysqli_fetch_array($result))
	{
   	echo "<tr><td>";
        echo $row['id'];
	echo "</td><td>";
	echo $row['notification'];
	echo "</td><td>";
	echo $row['status'];
        echo "</td></tr>";
	}
        echo "</table>";
       mysqli_close($conn);
?>
