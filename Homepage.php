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
<!DOCTYPE HTML>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen and (max-device-width: 480px)" /><![endif]-->
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "mobile.html";
}
//-->
</script>

 <script type="text/javascript"
        src="js/jquery.min.js"></script>
        <script type="text/javascript"
        src="js/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="css/jquery-ui.css" />
 
        <script type="text/javascript">
                $(document).ready(function(){
                    $("#bname").autocomplete({
                        source:'getautocomplete.php',
                        minLength:2
                        
                    });
                     $("#aname").autocomplete({
                        source:'getauthor.php',
                        minLength:2
                        
                    });
                    
                });
                
                
        </script> 

<style>
.dropbtn {
    background-color: white;
    color: black;
    padding: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: white;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 140px;
  /*  overflow: auto;
    box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2); */
}

.dropdown-content a {
    color: green;
    font-size: 14px;
    padding: 5px 3px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>

</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
 
 <div id="header">
    <h1 id="logo"><a href=""><img src="css/images/lib1.jpeg" alt="" /></a></h1>
     <!--<div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>-->

    <h1 id="logo1"><img src="css/images/issc.png" alt="" />
    
    <div id="navigation">
      <ul>
           <li><a class="active" href="userindex.php?uid=<?php echo $uid;?>" >DASHBOARD</a></li>
   <!--  <li><a href="#">REGISTRATION</a></li>
 <li><a href="#">LOGIN</a></li>-->
<br><br>
             </ul>
<div id="search">
        <form action="Search.php" method="get"   >
<table border=0><tr>Search By

<input type="text" name="bname" placeholder="Enter   Title" size=35 id="bname">
<input type="text" name="aname" placeholder="Enter   Author" size=35 id="aname"><br>
        <input type="submit" name="submit" value="search" /></tr></table>
        </form> 
    </div>
    <div id="Tag">
        <form name= "myForm" action="tagsearch.php" method="get"  onsubmit="return validateform()" >
<table border=0><tr>Search by Tag <br>
<input type="text" name="tname" placeholder="" size=35 id="tname" >
        <input type="submit" name="submit" value="search" /></tr></table>
        </form>  <br>  

    </div>
     </div>
<br>
<br>

<div class="dropdown">
 <select id="category" name="Category" class="dropbtn" onChange="window.location.href=this.value">          
      
	<?php
		include('conf.php');
		$sql6 = "select DISTINCT Category from Book";
		$result = mysqli_query($conn,$sql6);
		while($row = mysqli_fetch_array($result))
		{
		echo "<option value='tag_view.php?category=".urlencode($row['Category'])."'>";
		echo $row['Category'];
		echo "</option>";
		}
		echo "<option selected disabled>Book Category</option>";
	?>
	    
                   </select>
</div>



<script language="javascript">
function validateform() 
{
	//var Author= document.forms["myForm"]["aname"].value;
	var Tag= document.forms["myForm"]["tname"].value;

	/*function validateName(Author)
	{
		var n1 = new RegExp("^[a-z A-Z]+$");	
		if(!n1.test(Author))
			return 1;
		else
			return 0;
	}

	if (validateName(Author)) 
	{
		alert(" Name not valid");
		return false;
	} */

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
		alert(" Tag Name not valid");
		return false;
	} 
}
</script>   
     <!--accept-charset="utf-8"-->
   

</div>
    </h1>

 
<br><br><br>
 <div id="sub-navigation">
  <div id="main">
    <div id="content">
      <div class="box">
        <div class="head">
          <h2>DATABASE</h2>
          <p class="text-right"><a href="tag_view.php?category=Database">See all</a></p>
        </div>
        <div class="movie">
    
       <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span>--><a href="Selectpage.php?bookid=79"><img src="http://covers.openlibrary.org/b/isbn/0321181050-M.jpg" title="Database" /></a></div>
         
       <!--   <div class="rating">
            <p>RATING  </p> <br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">8</span> </div> -->
        </div> 
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?bookid=106"><img src="http://covers.openlibrary.org/b/isbn/8170089530-M.jpg" title="Database"  width="128" height="160"/></a></div>
        
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?bookid=80"><img src="http://covers.openlibrary.org/b/isbn/0321992474-M.jpg" title="Database" /></a></div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span>--> <a href="Selectpage.php?bookid=81"><img src="http://covers.openlibrary.org/b/isbn/0071498508-M.jpg" title="Database"/></a></div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?bookid=82"><img src="http://covers.openlibrary.org/b/isbn/1558604383-M.jpg" title="Database" /></a></div>
       
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?bookid=83"><img src="http://covers.openlibrary.org/b/isbn/1844804526-M.jpg" title="Database" /></a></div>
        
        </div>
        <div class="cl">&nbsp;</div>
      </div>

      <div class="box">
        <div class="head">
          <h2>MATHEMATICS</h2>
          <p class="text-right"><a href="tag_view.php?category=Mathematics">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?bookid=84"><img src="http://covers.openlibrary.org/b/isbn/0201441411-M.jpg" title="MATHEMATICS" /></a> </div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span> --><a href="Selectpage.php?bookid=85"><img src="http://covers.openlibrary.org/b/isbn/0486284247-M.jpg" title="MATHEMATICS" /></a> </div>
  
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?bookid=86"><img src="http://covers.openlibrary.org/b/isbn/8131501728-M.jpg" title="MATHEMATICS" /></a> </div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?bookid=87"><img src="http://covers.openlibrary.org/b/isbn/1402054947-M.jpg" title="MATHEMATICS" /></a> </div>
       
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?bookid=88"><img src="http://covers.openlibrary.org/b/isbn/0486453561-M.jpg" title="MATHEMATICS" /></a> </div>
       
        </div>
        <div class="movie last">
          <div class="movie-image"><!-- <span class="play"><span class="name">MATHEMATICS</span></span> --><a href="Selectpage.php?bookid=89"><img src="http://covers.openlibrary.org/b/isbn/0673452638-M.jpg" title="MATHEMATICS" /></a> </div>
       
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          <h2>PRINCIPLES OF PROGRAMMING LANGUAGE </h2>
          <p class="text-right"><a href="tag_view.php?category=Principles of Programming Lang">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?bookid=90"><img src="http://covers.openlibrary.org/b/isbn/0262033844-M.jpg" title="PPL" /></a> </div>
         
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span> --><a href="Selectpage.php?bookid=91"><img src="http://covers.openlibrary.org/b/isbn/0201896850-M.jpg" title="PPL" /></a> </div>
       
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?bookid=92"><img src="http://covers.openlibrary.org/b/isbn/0534953417-M.jpg" title="PPL" /></a> </div>
     
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?bookid=93"><img src="http://covers.openlibrary.org/b/isbn/0030617111-M.jpg" title="PPL" /></a> </div>
    
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?bookid=95"><img src="http://covers.openlibrary.org/b/isbn/0137098731-M.jpg" title="PPL" /></a> </div>
     
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?bookid=94"><img src="http://covers.openlibrary.org/b/isbn/0201504014-M.jpg" title="PPL" /></a> </div>
        
        </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div><div class="box">
        <div class="head">
          <h2>SOFTWARE ENGINEERING</h2>
          <p class="text-right"><a href="tag_view.php?category=Software Engineering">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?bookid=96"><img src="http://covers.openlibrary.org/b/isbn/0072989572-M.jpg" title="SOFTWARE ENGINEERING" /></a> </div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?bookid=97"><img src="http://covers.openlibrary.org/b/isbn/9781590594643-M.jpg" title="SOFTWARE ENGINEERING" /></a> </div>
        
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?bookid=98"><img src="http://covers.openlibrary.org/b/isbn/0138229821-M.jpg" title="SOFTWARE ENGINEERING" /></a> </div>
      
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">SOFTWARE </span></span> --><a href="Selectpage.php?bookid=99"><img src="http://covers.openlibrary.org/b/isbn/1895186137-M.jpg" title="SOFTWARE ENGINEERING"/></a> </div>
        
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?bookid=107"><img src="http://covers.openlibrary.org/b/isbn/0201760436-M.jpg" title="SOFTWARE ENGINEERING" /></a> </div>
       
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?bookid=101"><img src="http://covers.openlibrary.org/b/isbn/003011618X-M.jpg" title="SOFTWARE ENGINEERING" /></a> </div>
       
        </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div>

 <!--<div align="center">
        <h3>Most Rated Books</h3>

 
      </div>

    <div id="news">
        <div class="content">
        <h4>Software Engineering</h4>
        <h2>By Roger Pressman</h2>
         <a href="Selectpage.php?bookid=96">View</a> </div>
    </div>
    <div id="coming">

      
      <div class="content">
        <h4>Calculus</h4>
<h2>By Thomas & Finney</h2>
      <a href="Selectpage.php?bookid=84">View</a> </div>
    
  </div> -->
  <div id="footer">
    
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<div align=center>Visit us on :&nbsp; &nbsp;&nbsp;&nbsp;<a href='http://issc.unipune.ac.in'><font size=4 color=#87CEEB>issc.unipune.ac.in</font></a></div></body>
</html>
