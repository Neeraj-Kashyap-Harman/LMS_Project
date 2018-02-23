<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
/*$Name="Namrata Mali";
$Email="namrata@gmail.com";
$Role="Student";
*/
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ISSC SIGNUP</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- start header div --> 
<div id="header">
<h3>Validate Accounts</h3>
</div>
<!-- end header div -->   

<!-- start wrap div -->   
<div id="wrap">
<!-- start PHP code -->
<form method="POST" action="Activate.php">
<div class="box11">
<table border=1>
<tr>
<th>Click</th><th>Name</th><th>Email</th><th>Role</th>
</tr>

<?php

// Database Connection
/*$connection = mysqli_connect("localhost", "root", "root"); // Establishing Connection with Server
$db = mysqli_select_db("registration_Login", $connection); // Selecting Database from Server
*/
include('dbconnect.php');

// Select Query 

$q = "select Name,Email,user_role from users where status=0 and active=1";

$result=mysqli_query($connection,$q);
while($row=mysqli_fetch_array($result))
{
$Name=$row[0];
$Email=$row[1];
$Role=$row[2];
$active=$row[3];

echo $active;
// Display record in table format 

?>
<tr>
<td><input type="checkbox" name="ch[]" value="<?php echo $Email; ?>" ></td>
<td><?php echo $Name; ?></td>
<td><?php echo $Email; ?></td>
<td><?php echo $Role; ?></td>
</tr>

<?php
}
mysqli_close($connection);
?>

</table>

<input type="submit" name="Submit" value="Activate">
<input type="button" name="Submit" value="Deactivate" onclick="window.location ='/library/adminindex.html?uid=1';">
</div> <!-- End of class-->
</form>
</body>
</html>


</div>
<!-- end wrap div --> 
</body>
</html>
