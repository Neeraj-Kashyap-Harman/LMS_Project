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
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href=""><img src="css/images/lib1.jpeg" alt="" /></a></h1>
    <h1 id="logo1"><img src="css/images/issc.png" alt="" />
    <div id="navigation">
      <ul>
        <li><a class="active" href="Homepage.php">HOME</a></li>
       
             </ul>
    </div>
</h1>
</div>
    
     <!--  <ul>
        
<li><a href="#">CATEGORY</a></li>
      </ul>
     <div id="search">
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
    
  
<br><br>

<br><br><br>
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <font size=5 style=bold color=white>Tags Results</font>
         </div></div>
        <div class="movie">
       <div class="border"></div>
       <div class="search box">

	<?php
	include('conf.php');
          $rec_limit = 10;
	$tname=$_GET['tname'];
	
	
        
        
        
        
       // print_r($t);
       // var_dump( explode( ' ', $tname ) );
        
        //echo $bname;
        //echo "<br>".$option;

	//$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());
	
	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
/********************************if search is empty ******************************************************/
	/*if($tname==NULL)
	{
            $sql = "SELECT count(Book_id) FROM Book,tag";
         $retval = mysqli_query( $conn,$sql );
         
         if(! $retval )
         {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, mysqli_NUM );
         $rec_count = $row[0];
       
         if( isset($_GET{'page'} ) )
         {
            $page = $_GET{'page'} + 1;     
            $offset = $rec_limit * $page ;	
         }
         else
         {
            $page = 0;
            $offset = 0;
         }
         $left_rec = $rec_count - ($page * $rec_limit);
*/
$a=[];
        $t=(explode(" ",$tname));
        //print_r($t);
        foreach($t as $v)
        {
        $strSQL="select Book.Book_id,ISBN,Book_Title,Category,Author,No_of_pages from Book,tag where Book.Book_id=tag.Book_id and tagname='".$v."'";
        $a[] = mysqli_query($conn,$strSQL);
//        $a[]=$strSQL;
        
       // print_r($v);
       //print_r($strSQL);
        }
 // print_r($a);      



//$strSQL="select ISBN,Book_Title,Category,Author,No_of_pages from Book,tag where Book.Book_id=tag.Book_id and tagname='".$tname."'";


//$strSQL="select ISBN,Book_Title,Category,Author,No_of_pages from Book,tag where Book.Book_id=tag.Book_id and tagname like '%$tname%'";

        //$strSQL = "SELECT Book_Title,ISBN,Author,No_of_pages FROM Book where Category like '%".$bname."%' LIMIT $offset, $rec_limit";

	//$rs = mysqli_query($conn,$strSQL);
       
        $n=count($a);
        $n1=$n/2;
        //echo "n=".$n;
         if(! $a )
         {
            die('Could not get data: ' . mysqli_error());
         }
      /* Sections Table : Start */
foreach($a as $newa)
{

echo '<table border=0><tr><td>';
      /*	Book List Table : Start */     
         $count =0;  
	while($row = mysqli_fetch_array($newa)) {

echo "<table border=0>";
        echo "<tr><td>";
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-M.jpg';
	echo "<a href=Selectpage.php?bookid=".$row['Book_id']."><img src= ".$imgurl." style ='background:#808080';  width='128' height='160'/></a>"; 
	echo "</td>
		<td valign ='top'>
			<table border=0 >
				<tr>
			<td>";
	 echo " <h2>Book Title</h2>   ";
	echo "</td><td>";
	echo $row['Book_Title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";

echo "<h2>ISBN</h2>  ";
echo "</td><td>";
echo $row['ISBN'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<h2>Author</h2>  ";
echo "</td><td>";
echo $row['Author'];
echo "</td></tr>";
		echo "<tr><td> <h2>Category</h2> ";
echo "</td><td>";
echo $row['Category'] ;
echo "</td></tr>";
echo "<tr><td> ";
echo "<h2>Pages</h2>  ";
echo "</td><td>";
echo $row['No_of_pages'];
echo "</td></tr>";
echo "</table></td></tr>";
echo "</table>";

         echo "<br>";
 $count++; 
if ($count >= 5) break;
	  } //end of 1st while loop
}
/*	Book List Table : End */  
echo '</td><td style="vertical-align:top">';

/*	Book List Table : Start */     

$count =0;

error_reporting(E_ERROR | E_PARSE);
while($row = mysqli_fetch_array($a)) {

if ($count > 5)
	break;
echo "<table border=0>";
        echo "<tr><td>";
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-M.jpg';
	echo " <a href=Selectpage.php?bookid=".$row['Book_id']."><img src= ".$imgurl."  width='128' height='160'/>"; 
	echo "</td>
		<td >
			<table border=0 >
				<tr>
			<td>";
	 echo " <h2>Book Title</h2> ";
	echo "</td><td>";
	echo $row['Book_Title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";

echo "<h2>ISBN</h2>";
echo "</td><td>";
echo $row['ISBN'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<h2>Author</h2>";
echo "</td><td>";
echo $row['Author'];
echo "</td></tr>";
		echo "<tr><td> <h2>Category</h2> ";
echo "</td><td>";
echo $row['Category'] ;
echo "</td></tr>";
echo "<tr><td> ";
echo "<h2>Pages</h2>";
echo "</td><td>";
echo $row['No_of_pages'];
echo "</td></tr>";
echo "</table></td></tr>";
echo "</table>";
		
      
          
     echo "<br>";    
       
        $count++; 
	  }//end of 2nd  while loop

/*	Book List Table : End */  

echo '</td></tr></table>';

/* Sections Table : End */
	
         /*if( $page == 0 )
         {
             echo "<center>";
             echo "<a href=\"$_PHP_SELF?page=$page\">Next Page >>></a>";
	     echo "</center>";
         }
			
         else if( $left_rec < $rec_limit && $page > 0 )
         {
            $last = $page - 2;
            echo "<center>";
            echo "<a href=\"$_PHP_SELF?page=$last\"><<< Last Page</a>";
            echo "</center>";
         }
 	else if( $page > 0 )
         {
            $last = $page - 2;
            echo "<center>";
            echo "<a href=\"$_PHP_SELF?page=$last\"><<< Last Page</a>   ||";
            echo "<a href=\"$_PHP_SELF?page=$page\"> Next Page >>></a>";
            echo "</center>";
         }
         
*/
 mysqli_close($conn);	
//end of if loop   

?>



         <!-- <div class="rating">
            <p>RATING</p>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>-->
        </div><br><br>



</body>
</html>


