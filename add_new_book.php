
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Library Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminindex.html">Library Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
             <!--   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>-->
                </li>
               <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> LMS Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>-->
 <li class="user-header"></li>
                    
                           <!-- <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>-->
                         
                           <!-- <a href="#" class="fa fa-fw fa-power-off" onclick="return logout();">LogOut</a>-->
                           
                            <li class="user-footer border_gray">
                            <br>
                            <center>
                           <img class=" img-responsive img-thumbnail " src="css/images/profile1.png"></img>
                            
                            </center>
                           <br></br>
                            </li>
                            <li class="user-footer border_gray"></li>
                            <div class="pull-left">
                            <a class="btn btn-info waves-effect waves-light"> Cancel</a>
                            </div>
                            <div class="pull-right">
                            <a href="/library/RegistrationLogin/index.html" class="btn btn-success waves-effect waves-light"> Logout</a>
                            </div>
                            
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="adminindex.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
                    </li>
                    <!--<li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Notifications</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> User Transactions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Upadate User</a>
                            </li>
                          
                        </ul>
                    </li>-->
				<!--	 <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Update Books</a>
                    </li> -->
		<li>
                        <a href="admin_booklist.php"><i class="fa fa-fw fa-file"></i>  Book List</a>
                    </li>
                   <!-- <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add New Book Details 
                        </h1>
                        
                    </div>
                </div>
                <br>
	
	<br>
<script language="javascript">
function validateform() 
{
	
	conf=confirm("The data you have entered may not be saved!\nAre you sure you want to go back to list?");
	if(conf)
	{
	   window.location.href='admin_booklist.php';
	}
	else
	{
	   header($_SERVER['PHP_SELF']);
	}
}
</script>   
<?php
header('Access-Control-Allow-Origin: *');       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	
         
	

       //$sql = "SELECT * from Book where Book_id = $bookid";
       //$result = mysqli_query($conn,$sql);

	//$sql2 = "update Notification set status = 'read' where type ='$type' and u_id=$userid and Book_id=$bookid";
	//mysqli_query($conn,$sql2);

      // $row = $result->fetch_assoc();
      // $count = $result->num_rows;
       //echo $count;
echo "<div class='row'>";
                    /*<div class='col-lg-6'>
                       
                        <div class='table-responsive' >
                            <table class='table table-bordered table-hover table-striped'>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Notifications</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
        
	//echo "<table border=1>";
        //echo "<tr> <th>ID</th> <th>Notification</th> <th>Status</th> </tr>";*/


	echo "<form action='' method='post'>";
echo "<font size=3>";
 echo "<table border=0 >";
 
        echo "<tr><td>";
	/*$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-L.jpg';
	echo "<img src= ".$imgurl." style ='background:#808080';  width='250' height='270'/>"; 
	echo "</td>
		<td  valign ='top'>
			<table border=0 >
				<tr>";
	echo "<td> ";*/




	echo "<tr><td>";
	echo " <font size=3>Book Title</font> ";
	echo "</td><td>";
	echo "  :\t\t<input type='text' size=80 name='title' placeholder='Enter   Title'>" ;
	echo "</td></tr>";
	
echo "<tr><td><br>         </td></tr> ";

echo "<tr><td> ";
echo "<font size=3>ISBN</font>";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='isbn' placeholder='Enter   ISBN'>";
echo "</td></tr>";

echo "<tr><td><br>         </td></tr> ";

echo "<tr><td> ";
echo "<font size=3>Author</font>";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='author' placeholder='Enter   Author  Name'>";
echo "</td></tr>";

echo "<tr><td><br>         </td></tr> ";

echo "<tr><td><font size=3>Category</font> ";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='cat' placeholder='Enter New Category or Choose From List' list='category'>";
	
echo " <datalist id='category'>";
		$sql6 = "select DISTINCT Category from Book";
		$result = mysqli_query($conn,$sql6);
		while($row = mysqli_fetch_array($result))
		{
		echo "<option value=".urlencode($row['Category']).">";
		echo $row['Category'];
		echo "</option>";
		}
echo "</datalist>";

echo "</td></tr>";

echo "<tr><td><br>         </td></tr> ";

echo "<tr><td> ";
echo "<font size=3>No. of Copies</font>";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='copy1' placeholder='Enter No. of Copies of Book'>";
echo "</td></tr>";

echo "<tr><td><br>         </td></tr> ";

echo "<tr><td> ";
echo "<font size=3>Available Copies</font>";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='copy2' placeholder='Enter Available Copies of Book'>";
echo "</td></tr>";

echo "<tr><td><br>         </td></tr> ";

echo "<tr><td> ";
echo "<font size=3>No. of Pages</font>";
echo "</td><td>";
echo ":\t\t<input type='text' size=80 name='page' placeholder='Enter No. of Pages of Book'>";
echo "</td></tr>";


echo "</table>";
       
echo "<div align='center'>
  <br><br>";
 
echo "<input type='submit' name='save' value='Save' style='color:white; width:70px; height:35px; background-color:#F39C12; ' /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type='button' name='cancel' value='Cancel' style='color:black; width:70px; height:35px; background-color: #D0D0D0;' onclick='return validateform()' /> 
</form> </div>";
	//echo "</td></tr>";
echo "</font>";
//echo "</table>";

if(isset($_POST['save']))
{
	$title = $_POST['title'];
	$isbn = $_POST['isbn'];
	$cat = urldecode($_POST['cat']);
	//echo "aaaaaaa".$cat;
	$author = $_POST['author'];
	$no_copy = $_POST['copy1'];
	$a_copy = $_POST['copy2'];
	$pages = $_POST['page'];
	$sql = "insert into Book(Book_Title,ISBN,Category,Author,No_of_copies,Available_Copies,No_of_pages) values('$title','$isbn','$cat','$author',$no_copy,$a_copy,$pages)";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>";
		echo "confirm('New Book has been Successfully added.');";
		echo "window.location.href='admin_booklist.php';";
                echo "</script>";
	}
}

	  


        //echo "</table>";
/*echo  "</tbody>
                            </table>
                        </div>";*/

                  echo "  </div>";
       mysqli_close($conn);
?>




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>

</body>

</html>

