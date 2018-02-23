<?php
header('Access-Control-Allow-Origin: *');

	session_start();
	$uid = $_SESSION['uid'];
	if($uid == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationFinal/index.html';";
                echo "</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>

<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>

<!--<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="css/jquery-dateui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' });
$( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
</head>-->

<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href=""><img src="css/images/lib1.jpeg" alt="" /></a></div>
    <h1 id="logo1"><img src="css/images/issc.png" alt="" />
    <div id="navigation">
      <ul>
        <li><a class="active" href="Homepage.php">HOME</a></li>
        
             </ul> </div></h1>
  <br>
      

   
   
 
<div id="sub-navigation">

  
    
        <div class="head" align="center">
          <font size=7 color=white style=bold>Issue Request Page</font>
         <!-- <p class="text-right"><a href="#">See all</a></p>-->
        </div></div>
<br><br>
       <div align="center">

      <?php
      include('conf.php');
	
	

	$BID=$_REQUEST['bookid'];
        $i = $_REQUEST['isbn'];
	$bname = $_REQUEST['bname'];
     //  echo  "cccccc".$bname;
	//echo "\ni =".$i;
       // mysql_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysql_error ());

	//mysql_select_db("batch2015_bsonali") or die(mysql_error());
	
	if($BID!=NULL )
	{
		$strSQL = "SELECT * FROM Book where Book_id=$BID";
	}
	
	
	
	$result = mysqli_query($conn,$strSQL);
//echo $result;
	while($row = mysqli_fetch_array($result)) {

        
  echo "<font size=4>";
 echo "<table border=0>";
 $book_name=$row['Book_Title'];
$author_name=$row['Author'];
$bid=$row['Book_id'];

        echo "<tr><td>";
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-M.jpg';
	echo " <img src= ".$imgurl." style ='background:#808080';  width='150' height='180'/>"; 
	echo "</td>
		<td valign ='top'>
			<table border=0 >
				<tr>
			<td>";
	 echo " <h2><font size=2>Book Title</font></h2> ";
	echo "</td><td>";
	echo "  :\t\t".$row['Book_Title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";

echo "<h2><font size=2>ISBN</font></h2>";
echo "</td><td>";
echo ":\t\t".$row['ISBN'];
$isbn=$row['ISBN'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<h2><font size=2>Author</font></h2>";
echo "</td><td>";
echo ":\t\t".$row['Author'];
echo "</td></tr>";

echo "<tr><td> <h2><font size=2>Category</font></h2> ";
echo "</td><td>";
echo ":\t\t".$row['Category'] ;
echo "</td></tr>";

echo "</table></td></tr>";
echo "</font>";
echo "</table>";

	  }

	

echo "<form action='' method='post'>
  <br><br>";
  /*&nbsp;&nbsp;&nbsp;&nbsp;<p>Start Date: <input type='text' name='startdate' id='datepicker1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
End Date: <input type='text' name='enddate' id='datepicker2'></p>
<br>*/
echo "<input type='submit' name='submit_btn' value='Submit' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type='submit' name='cancel_btn' value='Cancel' /> 
</form>";

if(isset($_POST['submit_btn']))
{

  $st = date('Y-m-d');
  $today = date("Y-m-d g:i:s"); 
 // $ed=date_format(date_add(date_create($st),date_interval_create_from_date_string("14 days")),"Y-m-d");
  $to = 'issclms@gmail.com'; 
  $subject = 'Book Issue Request'; 
  $message = 'Issue Request for Book from User : 
	--------------------------------------------------------
		Book Name :'.$book_name.'
	        Author Name :'.$author_name.'
		Date of Issue Request :'.$st.'
		
	--------------------------------------------------------';
  $headers = 'From:issclms@gmail.com' . "\r\n";

	$sql1 = "insert into transaction(start_date,type,u_id,Book_id) values('".$st."','issue',".$uid.",".$bid.")"; 
	mysqli_query($conn,$sql1);

	$sql2 = "insert into Notification(u_id,Book_id,notify_date,type) values(".$uid.",".$bid.",'".$today."','issue')";
	mysqli_query($conn,$sql2);
error_reporting(E_ERROR | E_PARSE);
 if(mail($to,$subject,$message,$headers))
  //echo "Mail send successfully";
 echo "<script>
alert('Issue Request send successfully');
window.location.href='Selectpage.php?bookid=$BID';
</script>";
 else
  echo "Mail not send";
//}
  /* else
  {
		echo "<script type='text/javascript'>";
                echo "alert('Please Select the Dates.'); ";
		echo "window.location.href='Issue.php?isbn=$isbn';";
                echo "</script>";
  }*/
}
if(isset($_POST['cancel_btn']))
{
		echo "<script type='text/javascript'>";
		echo "window.location.href='Selectpage.php?bookid=$BID';";
                echo "</script>";
}

mysqli_close($conn);
?>
 </div>     </div>

</body>
</html>

