<!DOCTYPE HTML>
<html>
<head>
<title>The Free Education-Plan for Mobile Website Template | About :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/examples.css" type="text/css" media="all" />
<script src="js/jquery-1.8.1.min.js"></script>
<script src="js/jquery.carouFredSel-6.0.5-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(function() {
				
$("#foo1").carouFredSel();
$("#foo2").carouFredSel({
	width	: 1000,
	items	: 8,
	scroll	: 4
});
$("#foo3").carouFredSel({
	items 		: 1,
	direction	: "up",
	auto : {
		easing		: "elastic",
		duration	: 1000,
		timeoutDuration: 2000,
		pauseOnHover: true
	}
}).find(".slide").hover(
	function() { $(this).find("div").slideDown(); },
	function() { $(this).find("div").slideUp();	}
);
			});
		</script>
		<script type="text/javascript" language="javascript">
			var siteroot = "../";
		</script>
</head>
<body>
<div class="header-bg">
	<div class="wrap">
	<div class="wrapper">
		<div class="header">
	       <div class="logo">
			<a href="index.html"><img src="/lib1/images/logo1111.png" /></a>
	       </div>
		   <div class="menu">
				<ul>
					 <li><a href="index.html">Home</a></li>
					 
					 <div class="clear"></div>
				</ul>
			</div>
		<div class="clear"></div>
		</div>
<div class="transparent p1">
   	
<div class="wrap">
<div class="wrapper">
<div class="content">		
		<div class="about">
   		<div class="about-top">
   			<div class="about-left">

   			   <h3>WELCOME</h3>
<?php
 session_start();
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'root';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 mysqli_select_db('batch2015_vprachi');
  // $retval = mysqli_query( $conn,$sql );
$db=$_GET['category'];
//$uname=$_SESSION["uname"];
//echo"uname";
//echo $uname;
//echo $db;

//$db='Mathematics';

echo "<table border=5>";
//echo "<tr><th>BOOK ID</th><th>ISBN</th><th>BOOK TITLE</th><th>CATEGORY</th><th>AUTHOR</th><th>NO_OF_PAGES</th></tr>";
//$res2=mysqli_query($conn,"select distinct Book.book_id,ISBN,book_title,category,Author,no_of_pages,imgurl from Book,user_reccomendation,Bookuser where Bookuser.u_id=user_reccomendation.u_id AND Book.book_id=user_reccomendation.book_id AND Book.book_id=$db");
$res2=mysqli_query($conn,"select book_id,ISBN,book_title,category,Author,no_of_pages from Book where book_id='$db'");
while ($row1 = mysqli_fetch_array($res2))
{
echo "<table border=1 style='vertical-align: top'>";
        echo "<tr><td valign ='top'>";
$imgurl='http://covers.openlibrary.org/b/isbn/'.$row1['ISBN'].'-M.jpg';
	echo "<a href=refer11.php?category=".$row1['category']."><img src=".$imgurl." width='250' height='300' /></a>"; 
	echo "</td><td style='vertical-align: top'>";
$cat=$row1['category'];
echo $cat;
	/* Inner Table for Book Information */
	echo "<table border=1 > <tr> <td>";
        echo "<h2>Book Id</h2>";
        echo"</td><td>";
        echo $row1['book_id'];
        echo "</td></tr>";
	echo " <h2>BOOK Title</h2>   ";
	echo "</td><td>";
	echo $row1['book_title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";
	echo "<h2>ISBN</h2>  ";
	echo "</td><td>";
	echo $row1['ISBN'];
	echo "</td></tr>";

	echo "<tr><td> ";
	echo "<h2>Author</h2>  ";
	echo "</td><td>";
	echo $row1['Author'];
	echo "</td></tr>";
			echo "<tr><td> <h2>Category</h2> ";
	echo "</td><td>";
	echo $row1['category'] ;
	echo "</td></tr>";
	echo "<tr><td> ";
	echo "<h2>Pages</h2>  ";
	echo "</td><td>";
	echo $row1['no_of_pages'];
	echo "</td></tr>";
	echo "</table></td></tr>";

	/* Inner Table End */
  			

           // echo"<tr><td>"; 
	   // <tr><th>BOOK ID</th>               
            //echo"<br>";echo "Book_id:-". $row1['book_id'];echo "<br>";
            //echo"</td><td>";
            //echo "ISBN:-". $row1['ISBN'];echo "<br>";
            //echo"</td><td>";
            //echo "Book Title:-". $row1['book_title'];echo "<br>";
            //echo"</td><td>";
            //echo"Category:-".  $row1['category'];echo "<br>";
	    //echo"</td><td>";
            //echo "Author:-". $row1['Author'];echo "<br>";
            //echo"</td><td>";
            //echo "No of Pages:-". $row1['no_of_pages'];echo "<br>";
           // echo"</td></tr>";
//echo "<a href=refer.php?category=".$row1['category']."><img src=".$row1['imgurl']." width='250' height='300' /></a>"; 
}
echo "</table>";
         

         
?>
   			   
   			     			   
   			  
   			    <div class="left-bot-img">
   			    	
					 </div>
   			   
   		    </div>
   		    <div class="Recommendations For you">
</div>
   

<div class="about-right">
   		
   		    	
   		 <?php


echo "<table border=0>";
echo"RECOMMENDATIONS FOR YOU";echo"<br>";



//$res4=mysqli_query($conn,"select distinct Book.book_id,ISBN,book_title,category,Author,no_of_pages from Book,user_reccomendation,Bookuser where Bookuser.u_id=user_reccomendation.u_id AND Book.book_id=user_reccomendation.book_id AND Book.category='$cat'");
//echo $db;
$res4=mysqli_query($conn,"select  Book.book_id,ISBN,book_title,category,Author,no_of_pages from Book,Book_reccomendation where Book.book_id=Book_reccomendation.book_id AND Book_reccomendation.book_rec=$db");

while ($row1 = mysqli_fetch_array($res4))
{
echo "<table border=1 style='vertical-align: top'>";
        echo "<tr><td valign ='top'>";
$imgurl='http://covers.openlibrary.org/b/isbn/'.$row1['ISBN'].'-M.jpg';
	echo "<a href=refer11.php?category=".$row1['$db']."><img src=".$imgurl." width='200' height='250' /></a>"; 
	echo "</td><td style='vertical-align: top'>";
//echo"<h2>Book ID</h2>";
//echo $row1['book_id'];
	/* Inner Table for Book Information 
	echo "<table border=1 > <tr> <td>";
	echo " <h2>BOOK Title</h2>   ";
	echo "</td><td>";
	echo $row1['book_title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";
	echo "<h2>ISBN</h2>  ";
	echo "</td><td>";
	echo $row1['ISBN'];
	echo "</td></tr>";

	echo "<tr><td> ";
	echo "<h2>Author</h2>  ";
	echo "</td><td>";
	echo $row1['Author'];
	echo "</td></tr>";
			echo "<tr><td> <h2>Category</h2> ";
	echo "</td><td>";
	echo $row1['category'] ;
	echo "</td></tr>";
	echo "<tr><td> ";
	echo "<h2>Pages</h2>  ";
	echo "</td><td>";
	echo $row1['no_of_pages'];
	echo "</td></tr>";*/
	echo "</table></td></tr>";

	/* Inner Table End */
  			

           // echo"<tr><td>"; 
	   // <tr><th>BOOK ID</th>               
            //echo"<br>";echo "Book_id:-". $row1['book_id'];echo "<br>";
            //echo"</td><td>";
            //echo "ISBN:-". $row1['ISBN'];echo "<br>";
            //echo"</td><td>";
            //echo "Book Title:-". $row1['book_title'];echo "<br>";
            //echo"</td><td>";
            //echo"Category:-".  $row1['category'];echo "<br>";
	    //echo"</td><td>";
            //echo "Author:-". $row1['Author'];echo "<br>";
            //echo"</td><td>";
            //echo "No of Pages:-". $row1['no_of_pages'];echo "<br>";
           // echo"</td></tr>";
//echo "<a href=refer.php?category=".$row1['category']."><img src=".$row1['imgurl']." width='250' height='300' /></a>"; 
}
echo "</table>";
         
   ?>	
			    	
   			
   	</div>

   	<div class="clear"></div>
</div>
</div>	
</div>
</div></div>
<div class="footer-top">
<div class="wrap">
	<div class="footer">
			<div class="footer-nav">
			   
             </div>
			<div class="clear"></div>
		</div>	
		</div>
</div>
<div class="footer-bottom">
<div class="wrap">
	<div class="footer-text">
		<div class="copy">
			<p>&copy; Recommendor Systems  | Design by  Prachi,Pritam,Pooja </p>
	    </div>
		
    <div class="clear"></div>
		</div>	
		</div>	
</div>


</body>
</html>
