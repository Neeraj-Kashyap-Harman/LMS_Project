<?php
header('Access-Control-Allow-Origin: *');
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
        <li><a class="active" href="#">HOME</a></li>
        <li><a href="Registration.html">REGISTRATION</a></li>
 <li><a href="Login.html">LOGIN</a></li><br><br>
             </ul>
<div id="search">
        <form action="Search.php" method="post" accept-charset="utf-8">
<?php
$txt="Enter text";
?>
<table border=0><tr><tc>Search&nbsp;&nbsp;&nbsp;&nbsp;</tc><tc><input type="text" name="bname" value="<?php echo $txt; ?>">&nbsp;&nbsp;&nbsp;</tc>
        <tc><input type="submit" name="submit" value="search" /></tc></tr></table>
        </form> 
    </div>
     </div>
   
     
      

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
    
       <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span>--><a href="Selectpage.php?isbn=0321181050"><img src="http://covers.openlibrary.org/b/isbn/0321181050-M.jpg" alt="" /></a></div>
         
          <div class="rating">
            <p>RATING  </p> <br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">8</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?isbn=8170089530"><img src="http://covers.openlibrary.org/b/isbn/8170089530-M.jpg" alt=""  width="128" height="160"/></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">1</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?isbn=0321992474"><img src="http://covers.openlibrary.org/b/isbn/0321992474-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">1</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span>--> <a href="Selectpage.php?isbn=0071498508"><img src="http://covers.openlibrary.org/b/isbn/0071498508-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?isbn=1558604383"><img src="http://covers.openlibrary.org/b/isbn/1558604383-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">10</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">DATABASE</span></span> --><a href="Selectpage.php?isbn=1844804526"><img src="http://covers.openlibrary.org/b/isbn/1844804526-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">2</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          <h2>MATHEMATICS</h2>
          <p class="text-right"><a href="tag_view.php?category=Mathematics">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?isbn=0201441411"><img src="http://covers.openlibrary.org/b/isbn/0201441411-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span> --><a href="Selectpage.php?isbn=0486284247"><img src="http://covers.openlibrary.org/b/isbn/0486284247-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">2</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?isbn=8131501728"><img src="http://covers.openlibrary.org/b/isbn/8131501728-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">5</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?isbn=1402054947"><img src="http://covers.openlibrary.org/b/isbn/1402054947-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">MATHEMATICS</span></span>--> <a href="Selectpage.php?isbn=0486453561"><img src="http://covers.openlibrary.org/b/isbn/0486453561-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"><!-- <span class="play"><span class="name">MATHEMATICS</span></span> --><a href="Selectpage.php?isbn=0673452638"><img src="http://covers.openlibrary.org/b/isbn/0673452638-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="box">
        <div class="head">
          <h2>PRINCIPLES OF PROGRAMMING LANGUAGE </h2>
          <p class="text-right"><a href="tag_view.php?category=Principles of Programming Lang">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?isbn=0262033844"><img src="http://covers.openlibrary.org/b/isbn/0262033844-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span> --><a href="Selectpage.php?isbn=0201896850"><img src="http://covers.openlibrary.org/b/isbn/0201896850-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?isbn=0534953417"><img src="http://covers.openlibrary.org/b/isbn/0534953417-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?isbn=0030617111"><img src="http://covers.openlibrary.org/b/isbn/0030617111-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?isbn=0137098731"><img src="http://covers.openlibrary.org/b/isbn/0137098731-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">PPL</span></span>--> <a href="Selectpage.php?isbn=0201504014"><img src="http://covers.openlibrary.org/b/isbn/0201504014-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div><div class="box">
        <div class="head">
          <h2>SOFTWARE ENGINEERING</h2>
          <p class="text-right"><a href="tag_view.php?category=Software Engineering">See all</a></p>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?isbn=0072989572"><img src="http://covers.openlibrary.org/b/isbn/0072989572-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?isbn=9781590594643"><img src="http://covers.openlibrary.org/b/isbn/9781590594643-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?isbn=0138229821"><img src="http://covers.openlibrary.org/b/isbn/0138229821-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">SOFTWARE </span></span> --><a href="Selectpage.php?isbn=1895186137"><img src="http://covers.openlibrary.org/b/isbn/1895186137-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie">
          <div class="movie-image"><!-- <span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?isbn=0201760436"><img src="http://covers.openlibrary.org/b/isbn/0201760436-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="movie last">
          <div class="movie-image"> <!--<span class="play"><span class="name">SOFTWARE </span></span>--> <a href="Selectpage.php?isbn=003011618X"><img src="http://covers.openlibrary.org/b/isbn/003011618X-M.jpg" alt="" /></a> </div>
          <div class="rating">
            <p>RATING</p><br>
            <div class="stars">
              <div class="stars-in"> </div>
            </div>
            <span class="comments">12</span> </div>
        </div>
        <div class="cl">&nbsp;</div>
      </div>
    </div>

    <div id="news">
      <div class="head">
        <h3>Search By</h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        
        <h2><font size=3>Database Management System</font></h2>
        
        <a href="tag_view.php?category=Database">View</a> </div>
      <div class="content">
        
        <h2><font size=3>Mathematics</font></h2>
        
        <a href="tag_view.php?category=Mathematics">View</a> </div>
      <div class="content">
        
        <h2><font size=3>Principle Of Programming Language</font></h2>
        
        <a href="tag_view.php?category=Principles of Programming Lang">View</a> </div>
  
        <div class="content">
        
        <h2><font size=3>Software Engineering</font></h2>
        
        <a href="tag_view.php?category=Software Engineering">View</a> </div>
    </div>
    <div id="coming">
      <div class="head">
        <h3>Most Rated Books</h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <h4>Software Engineering</h4>
        <h2>By Roger Pressman</h2>
         <a href="Selectpage.php?isbn=0072989572">View</a> </div>
      <div class="content">
        <h4>Calculus</h4>
<h2>By Thomas & Finney</h2>
      <a href="Selectpage.php?isbn=0201441411">View</a> </div>
 
    
  </div>
  <div id="footer">
    
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
<div align=center>Visit us on <a href='http://issc.unipune.ac.in'><font size=4 color=blue>issc.unipune.ac.in</font></a></div></body>
</html>
