<?php
	session_start();
	$uid = $_SESSION['uid'];
	if($uid == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationLogin/index.html';";
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
      

   
   <script language="javascript">
	function validateform() 
	{
	var Tag= document.forms["myForm"]["tname"].value;

	function validateTag(Tag)
	{
		var n1 = new RegExp("^[a-z A-Z]+$");	
		if(!n1.test(Tag))
			return 1;
		else
			return 0;
	}

	if (validateTag(Tag)) 
	{
		alert("Please Enter Only Text.");
		return false;
	} 
	}
</script>   
 
<div id="sub-navigation">

  
    
        <div class="head" align="center">
          <font size=7 color=white style=bold>Add Tag Page</font>
         <!-- <p class="text-right"><a href="#">See all</a></p>-->
        </div></div>
       <div align="center">

      <?php
      include('conf.php');
	$BID=$_REQUEST['bookid'];
    
	

echo "<div align='center'>
<table border=0><tr> 
 <br><br><br><br>
<form name= 'myForm' action='' method='post'>
<input type='text' name='tname' placeholder='Enter Tag Name' size=35 ><br><br><br>
        <input type='submit' name='submit' value='Save' />&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' name='cancel' value='Cancel' /></tr></table>
        </form> 
    </div>";

if(isset($_POST['submit']))
{
	  $tname = $_POST['tname'];
if($tname!=NULL)
{
	$strSQL1 = "insert into tag (Book_id,tag_id,tagname) values('$BID','','$tname')";
	
	$result = mysqli_query($conn,$strSQL1);

	header('location:Selectpage.php?bookid='.$BID);
}
else
{
		echo "<script type='text/javascript'>";
                echo "alert('Please Enter the Tag Name'); ";
		echo "window.location.href='Tag.php?bookid=$BID';";
                echo "</script>";
}
}
if(isset($_POST['cancel']))
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


