<?php

header('Access-Control-Allow-Origin: *');

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
	$BID=$_REQUEST['bookid'];
	session_start();
	$_SESSION['bookid']=$BID;
       // $isbn=$_SESSION['II'];
	//$bookid=$_SESSION['BI'];
       // $book=$_SESSION['book_name'];

	   $i = $_REQUEST['isbn'];
	   $bname = $_REQUEST['bname'];

      //echo "bname=".$book;
	//mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	
	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());


	//$strSQL = "SELECT Book_Title,Category,Author,No_of_pages,ISBN,Total_Available_Quantity,Currently_Available,Total_Available_Quantity-Currently_Available as Issued FROM Book where Book.Book_id=Book_Details.Book_id and ISBN='".$isbn."'";
	
	//$strSQL = "SELECT Book_Title,Category,Author,No_of_pages,ISBN,No_of_pages,No_of_copies,Available_copies FROM Book where ISBN='".$isbn."'";

	if($BID!=NULL )
	{
		$strSQL = "SELECT * FROM Book where Book_id=$BID";
	}

	
	/*if($i==NULL)
	{
	$strSQL = "SELECT Book_Title,Category,Author,No_of_pages,ISBN,No_of_pages,No_of_copies,Available_copies FROM Book where Book_Title like '%".$bname."%'";
	}

	if($i!=NULL)
	{
	$strSQL = "SELECT Book_Title,Category,Author,No_of_pages,ISBN,No_of_pages,No_of_copies,Available_copies FROM Book where ISBN=".$i;
	}*/
	
//$_SESSION['isbn']=$isbn;
//$_SESSION['book_name']=$book;
	//echo "".$_SESSION['isbn'];
	$rs = mysqli_query($conn,$strSQL);
	

	while($row = mysqli_fetch_array($rs)) {

	  /*echo 'Book Title = ' .$row['Book_Title'] . "<br />";
          echo $row['Category'] . "<br />";
          echo $row['Author'] . "<br />";
          echo $row['ISBN'] . "<br />";

        echo "<br /> <img src= ".$row['imgurl']." />";*/
 //echo $row['Category'] . "<br />";
echo "<font size=4>";
 echo "<table border=0>";
 
        echo "<tr><td>";
        $cat=$row['Category'];
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-L.jpg';
	echo " <a href=Selectpage.php?bookid=$BID><img src= ".$imgurl." style ='background:#808080';  width='250' height='270'/>"; 
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
$book_name=$row['Book_Title'];
$ISBN=$row['ISBN'];
$isbn=$row['ISBN'];
//$isbn=$row['Book_id'];
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


	
?>


<style type="text/css">.main { 
                width: 900px; 
                margin: 0 auto; 
                height: 700px;
                border: 1px solid #ccc;
                padding: 20px;
            }

            .header{
                height: 100px;    
            }
            .content{    
                height: 700px;
                border-top: 1px solid #ccc;
                padding-top: 15px;
            }
            .footer{
                height: 100px;  
                bottom: 0px;
            }
            .heading{
                color: #FF5B5B;
                margin: 10px 0;
                padding: 10px 0;
                font-family: trebuchet ms;
            }

            #dv1, #dv0{
                width: 408px;
                border: 1px #ccc solid;
                padding: 15px;
                margin: auto;

            }
           
            /*downloaded from http://devzone.co.in*/
        </style>
        <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 4px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     


            /* Downloaded from http://devzone.co.in/ */
        </style>
        <script src="js/jquery.min2.js"></script>

        <script src="index_files/ca-pub.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>
        <script>
                        $(document).ready(function () {
                            $("#demo2 .stars").click(function () {
                            var star = $(this).val();
                            document.cookie = "star = " + star;
                                alert("Thank You For Rating The Book.");
                                $(this).attr("checked");
                                window.location.assign("rating.php");
                            });
                        });
                    </script>
	<h3>Rating</h3>
         <div class="clear"></div>
         <fieldset id='demo2' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half" name="rating" value="4.5" />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half" name="rating" value="3.5" />
                        <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half" name="rating" value="2.5" />
                        <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half" name="rating" value="1.5" />
                        <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf" name="rating" value="0.5" />
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
             <div class="clear"></div>
	<br><br>
<?php
  echo	"<h3>Comments</h3>
	<form action='' method='post' >
	<textarea id='txtArea' rows='4' cols='50' name='txt'></textarea> <br><br>
	<input type='submit' name='submit_btn' value='Submit'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input type='submit' name='cancel_btn' value='Cancel'>
	</form>";

if(isset($_POST['submit_btn']))
{
 if(isset($_POST['txt']) && !empty($_POST['txt']))
  {
	$text = $_POST['txt'];
	//echo $txt;
	$sql="insert into comments(comments,ISBN) values('".$text."','".$ISBN."')";
	
	mysqli_query($conn,$sql);
		echo "<script type='text/javascript'>";
		echo "alert('Thank You For Comments.'); ";
		echo "window.location.href='Selectpage.php?bookid=$BID';";
                echo "</script>";
  }
 else
  {
		echo "<script type='text/javascript'>";
                echo "alert('Please Write the Comments.'); ";
		echo "window.location.href='Feedback.php?bookid=$BID';";
                echo "</script>";
  }
}
if(isset($_POST['cancel_btn']))
{
		echo "<script type='text/javascript'>";
		echo "window.location.href='Selectpage.php?bookid=$BID';";
                echo "</script>";
}
mysqli_close($conn);
?>
</body>
</html>

