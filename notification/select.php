<?php
       $servername = "10.20.50.1";
       $username = "bsonali";
       $password = "bsonali";
       $dbname = "batch2015_bsonali";
 
       // Create connection
 
        $conn=mysqli_connect('mysql.hostinger.in','u166155055_issc','abhiruadi','u166155055_lms') or die (mysqli_error ());
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);
 
       } 
 
       $sql = "SELECT * from message where status = 'unread'";
       $result = $conn->query($sql);
       $row = $result->fetch_assoc();
       $count = $result->num_rows;
       echo $count;
       $conn->close();
?>

 
