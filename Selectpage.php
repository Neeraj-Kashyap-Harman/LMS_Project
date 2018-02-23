<?php
header('Access-Control-Allow-Origin: *');

	$BID=$_REQUEST['bookid'];
	if($BID == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationLogin/index.html';";
                echo "</script>";
}
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

<style>
button[disabled] {
    color:#FF0000;
}
</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href=""><img src="css/images/lib1.jpeg" alt="" /></a></div>
    <h1 id="logo1"><img src="css/images/issc.png" alt="" />
    <div id="navigation">
      <ul>
        <li><a class="active" href="Homepage.php">HOME</a></li>
        
             </ul>
    </div>
</h1>

   
     <!--  <ul>
        <li><a href="#">SHOW ALL BOOKS</a></li>
<li><a href="#">Catagory</a></li>
      </ul>-->
     <!-- <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH BOOK</label>
 <div class="search-panel">
        <div class="content">
          <div class="border"></div>
            <form action="isbn1.php" method="post">
            <input type="text" name="bname" /><br />
            <input type="submit" name="submit" value="search" />
             </form>
             </body>
           </html>
            <div class="button"><a href="isbn1.php"></a></div>
          </div>
          </form>
        </div>
                  </form>
      </div>-->
  
<br><br><br><br><br>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
            <font size=5 style=bold color=white>Selected Book</font>
     
        </div></div>
        <div class="movie">
       <div class="border"></div>
       <div class="search box">
	<?php
	include('conf.php');
	
        $isbn=$_REQUEST['isbn'];
        $book=$_REQUEST['bname'];
     // echo "bname=$book  isbn= $isbn";
	//mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	
	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());

	if($BID!=NULL )
	{
		$strSQL = "SELECT * FROM Book where Book_id=$BID";
	}
	
	

	$rs = mysqli_query($conn,$strSQL);
	

	while($row = mysqli_fetch_array($rs)) {
   
echo "<font size=4>";
 echo "<table border=0>";
 
        echo "<tr><td>";
        $cat=$row['Category'];
    
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-L.jpg';
	echo " <a href=Search.php?bname=".urlencode($cat)."&option=back><img src= ".$imgurl." style ='background:#808080';  width='250' height='270'/>"; 
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
$bb=$row['Book_Title'];
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

echo "<tr><td> ";
echo "<h2><font size=2>Pages</font></h2>";
echo "</td><td>";
echo ":\t\t".$row['No_of_pages'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<h2><font size=2>No. of Copies</font></h2>";
echo "</td><td>";
echo ":\t\t".$row['No_of_copies'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<h2><font size=2>Available Copies</font></h2>";
echo "</td><td>";
echo ":\t\t".$row['Available_copies'];
$cnt=$row['Available_copies'];
echo "</td></tr>";

echo "</table></td></tr>";
echo "</font>";
echo "</table>";


	  }

	$sql = "select user_role from users where u_id=$uid"; //To check if user is a student
	 $res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($res)) 
	{
		$role = $row['user_role'];
	}

	if($role == "Student") //only for Students
	{
	$sql5 = "select * from Issue where u_id=$uid and book_status='Not Returned'"; //how many book user have issued
	 $res5 = mysqli_query($conn,$sql5);
	 $n5 =mysqli_num_rows($res5);

	$sql6 = "select * from transaction,Notification where transaction.u_id=Notification.u_id and transaction.u_id=$uid and transaction.Book_id=$BID and transaction.type='issue' and Notification.type='issue' and Notification.status='unread'"; //user have already requested to issue this book
	 $res6 = mysqli_query($conn,$sql6);
	 $n6 =mysqli_num_rows($res6);

	$sql7 = "select * from transaction where u_id=$uid and Book_id=$BID and type='reserve'";//user have already reserved this book
	 $res7 = mysqli_query($conn,$sql7);
	 $n7 =mysqli_num_rows($res7);

	$sql8 = "select * from Issue where u_id=$uid and Book_id=$BID and book_status='Not Returned'"; //have user already issued this book
	 $res8 = mysqli_query($conn,$sql8);
	 $n8 =mysqli_num_rows($res8);
	
	$sql9 = "select * from Notification where type='issue' and u_id=$uid and status='unread'"; //how many requests to issue 
	 $res9 = mysqli_query($conn,$sql9);
	 $n9 =mysqli_num_rows($res9);
//echo $n9.$n8."<br>";
	$sql10 = "select * from transaction where u_id=$uid and  type='reserve'"; //how many requests to reserve 
	 $res10 = mysqli_query($conn,$sql10);
	 $n10 =mysqli_num_rows($res10);
	}
	
?>
<br>
<!-- <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div> -->
     <br><br>
	
	  <form >
<?php

if($cnt==0)
  {
	
?>
       &nbsp; &nbsp; &nbsp; <input type="button" name="button1" value="Issue"  onclick="alert('Book is not available in library\nYou can reserve the book.')"/> &nbsp; &nbsp; &nbsp; 
<?php
	if($role == "Student") //only for students
	{ 
		if($n7==0 && $n10<2) //if user have not already reserved this book and user have not reserved 2 books
		{
?>
		<input type="button" name="button2" value="Reserve" onclick="window.location.href='Reserve.php?bookid= <?php echo $BID; ?>'"/> &nbsp; &nbsp; &nbsp;  
<?php
		}
		if($n10 >= 2) //if user have user already reserved 2 books
			{ 
?>
	  <input type="button" name="button2" value="Reserve" onclick="alert(' You have already reserved 2 Books.\n So You cannot reserve this book.')" />
&nbsp; &nbsp; &nbsp;  &nbsp;
<?php
			}
			if($n7 >0 && $n10 <2) //if user have user already reserved this book
			{
?>
	 <input type="button" name="button2" value="Reserve" onclick="alert(' You have already reserved this Book.')" />
&nbsp; &nbsp; &nbsp;  &nbsp;
<?php
			}
	}
	else
	{
?>
       <input type="button" name="button2" value="Reserve" onclick="window.location.href='Reserve.php?bookid= <?php echo $BID; ?>'"/> &nbsp; &nbsp; &nbsp;  

<?php
   	}
  }
 else
   {
	if($role == "Student") //only for students
	{ 
	  if($n5 >= 2) //if user have user already issued 2 books 
	  {
?>
	 &nbsp; &nbsp; &nbsp; <input type="button" name="button1" value="Issue"  onclick="alert(' You have already issued 2 Books.\n So You cannot issue this book.\n Try for Reservation.')"/> &nbsp; &nbsp; &nbsp; 
<?php
	  }
	  if($n6 >0 && $n9 < 2) //if user have already requested to issue this book
	  {
?>
	&nbsp; &nbsp; &nbsp; <input type="button" name="button1" value="Issue"  onclick="alert(' You have already requested to issue this Book.')"/> &nbsp; &nbsp; &nbsp; 
<?php 
	  }	
	  if($n8 > 0 )	//if user have already issued this book
	  {
?>
	&nbsp; &nbsp; &nbsp; <input type="button" name="button1" value="Issue"  onclick="alert(' You have already issued this Book.')"/> &nbsp; &nbsp; &nbsp; 
<?php
	  }
	  if($n9 >= 2 && $n8==0) //if user have given 2 requests to issue Books 
	  {
?>
	&nbsp; &nbsp; &nbsp; <input type="button" name="button1" value="Issue"  onclick="alert('You have already given 2 requests to issue Books.')"/> &nbsp; &nbsp; &nbsp; 
<?php
	  }
			if($n10 >= 2) //if user have user already reserved 2 books
			{ 
?>
	  <input type="button" name="button2" value="Reserve" onclick="alert(' You have already reserved 2 Books.\n So You cannot reserve this book.')" />
&nbsp; &nbsp; &nbsp;  &nbsp;
<?php
			}
			if($n7 >0 && $n10 <2) //if user have user already reserved this book
			{
?>
	 <input type="button" name="button2" value="Reserve" onclick="alert(' You have already reserved this Book.')" />
&nbsp; &nbsp; &nbsp;  &nbsp;
<?php
			}
			if($n5+$n9>=2)
			{
?>
				<input type="button" name="button2" value="Reserve" onclick="alert(' You have already issued 2 books.')" />
				&nbsp; &nbsp; &nbsp; &nbsp;
<?php
			}
			
			
	if($n5<2 && $n6==0 && $n8==0 && $n9<2) //if user have not issued 2 books and user have not already requested to issue this book and user have not already issued this book and user have not give requests to issue 2 books 
	{
?>
       &nbsp; &nbsp; &nbsp;  <input type="button" onclick="validateIssue()"  name="button1" value="Issue" /> &nbsp; &nbsp; &nbsp; &nbsp; 
	   
	   <script>
		function validateIssue()
		{
			bid='<?php echo $BID?>';
			$.post("http://issclibrary.esy.es/library/Issue_check.php",{bid:bid},function(data){
			//alert("|"+data+"|");
			if(data[1]=="y")
			{
			//alert('yes');
			window.location.href='Issue.php?bookid= <?php echo $BID; ?>';
			}else
			{
			alert('Book is not Available');
			//window.location.href='Selectpage.php?bookid= <?php echo $BID; ?>';
			}});
		}
	   </script>
	   
	   <?php /*window.location.href='Issue.php?bookid= <?php echo $BID; ?>' */ ?>
	   

<?php
	}
	if($n7==0 && $n10<2) //if user have not already reserved this book and user have not reserved 2 books
	 {
?>
       <input type="button" name="button2" value="Reserve" onclick="window.location.href='Reserve.php?bookid= <?php echo $BID; ?>'" />
&nbsp; &nbsp; &nbsp;  &nbsp;
  
<?php
	 }
  	} //only for students end
	else
	{
?>
	 &nbsp; &nbsp; &nbsp;  <input type="button" onclick="window.location.href='Issue.php?bookid= <?php echo $BID; ?>'"  name="button1" value="Issue" /> &nbsp; &nbsp; &nbsp; &nbsp; 

	 <input type="button" name="button2" value="Reserve" onclick="window.location.href='Reserve.php?bookid= <?php echo $BID; ?>'" />
&nbsp; &nbsp; &nbsp;  &nbsp;
<?php
	}
   }
?>
	 <input type="button" name="button2" value="Feedback" onclick="window.location.href='Feedback.php?bookid= <?php echo $BID; ?>'"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       <input type="button" name="button2" value="Add Tag" onclick="window.location.href='Tag.php?bookid= <?php echo $BID; ?>'" />
        </form>
 </div>  

<br><br>
<div align="left"  >
   		
 <?php


echo "<table border=0>";
echo "RECOMMENDATIONS FOR YOU";
echo "<br><br>";



//$res4=mysqli_query($conn,"select distinct Book.book_id,ISBN,book_title,category,Author,no_of_pages from Book,user_reccomendation,Bookuser where Bookuser.u_id=user_reccomendation.u_id AND Book.book_id=user_reccomendation.book_id AND Book.category='$cat'");
//echo $db;

$res4=mysqli_query($conn,"select  Book.Book_id,ISBN,Book_Title,Category,Author,No_of_pages from Book,Book_reccomendation where Book.Book_id=Book_reccomendation.book_id AND Book_reccomendation.book_rec=$BID");

$n=mysqli_num_rows($res4);

echo "<table border=0 style='vertical-align: top'><tr>";

while($n>0)
{
 
$count=0;
$line = 3;

while ($row1 = mysqli_fetch_array($res4))
{

        echo "<td valign ='top'>";
$imgurl='http://covers.openlibrary.org/b/isbn/'.$row1['ISBN'].'-M.jpg';
	echo "<a href=Selectpage.php?bookid=".$row1['Book_id']."><img src=".$imgurl." title='".$row1['Book_Title']."' style='margin:10px; background:#808080;' width='200' height='250' /> </a>"; 
	echo "</td>";
$count++;
if($count > $line) break;
}

$n = $n-4;
echo "</tr><tr>";

}//end of outer while

echo "</tr></table>";

echo "  </div>";

       mysqli_close($conn);
?>

</div>



 </div>     </div>
        
 

</body>
</html>


