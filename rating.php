<?php
include('conf.php');
session_start();

  //$book=$_SESSION['book_name'];
 // $IS=$_SESSION['isbn'];
	$uid = $_SESSION['uid'];
	$BID = $_SESSION['bookid'];
  
if (!$conn) {
    die("Unable to connect Server: " . mysqli_error());
} else {
        if (isset($_COOKIE['star']) && !empty($_COOKIE['star'])) {
         
                $sql = "INSERT INTO `rating` ( `rate`, `Book_id`) VALUES (" . $_COOKIE['star'] . ", '".$BID."');";
                if (mysqli_query($conn,$sql)) {
                    echo "0";
                }
                header('location:Feedback.php?bookid='.$BID);
        }
        $conn->close();
}
?>
