
<?php

header('Access-Control-Allow-Origin: *');

 include('conf.php');
      $sql2 = "SELECT * from Book";
       $result = mysqli_query($conn,$sql2);
	
     $num=mysqli_num_rows($result);

	$n = (int) ($num/10);
	$n = $n-1;
echo "\nDivision  == $n";
?>
