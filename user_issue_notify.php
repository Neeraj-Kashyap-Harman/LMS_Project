<?php
$uid = $_REQUEST['uid'];
if($uid == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationLogin/index.html';";
                echo "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

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
                <a class="navbar-brand" href="userindex.php?uid=<?php echo $uid;?>">User</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
		<?php
		  include('conf.php');
			$sql1 = "select Name from users where u_id=$uid";
			$res = mysqli_query($conn,$sql1);
			while ($row1 = mysqli_fetch_array($res))
			{
				echo $row1['Name'];
			}
		?>

<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="user-header"></li>
                    
                           <!-- <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>-->
                         
                           <!-- <a href="#" class="fa fa-fw fa-power-off" onclick="return logout();">LogOut</a>-->
                           
                            <li class="user-footer border_gray">
                            <br>
                            <center>
	

	<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image" size="40">
<input name="upload" type="submit" value="upload" />
 
</form>
<?php 
if(isset($_POST['upload']))
{
include('conf.php');
//$con = mysqli_connect('localhost', 'root', 'harshad'); //Update hostname
//mysqli_select_db("batch2015_bsonali", $con); //Update database name
 
define ("MAX_SIZE","1000"); 
function getExtension($str)
{
	 $i = strrpos($str,".");
	 if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
 
$errors=0;
$image=$_FILES['image']['name'];
if ($image) 
{
	$filename = stripslashes($_FILES['image']['name']);
	$extension = getExtension($filename);
	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") 
		&& ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG") 
		&& ($extension != "PNG") && ($extension != "GIF")) 
	{
		echo '<h3>Unknown extension!</h3>';
		$errors=1;
	}
	else
	{
		$size=filesize($_FILES['image']['tmp_name']);
 
		if ($size > MAX_SIZE*1024)
		{
			echo '<h4>You have exceeded the size limit!</h4>';
			$errors=1;
		}
 
		$image_name=time().'.'.$extension;
		
		$newname="images/".$image_name;
 
		$copied = copy($_FILES['image']['tmp_name'], $newname);
		if (!$copied) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
			$errors=1;
		}
		else echo '<h3>uploaded successfull!</h3>';
	
		$rs1=mysqli_query($conn,"select * from user_image where uid=$uid");
		$nn =mysqli_num_rows($rs1);
		if($nn>0)
		{
			mysqli_query($conn,"update user_image set path='".$newname."' where uid=".$uid);
		}
 		else
		{
		mysqli_query($conn,"insert into user_image(uid,path) values('".$uid."','".$newname."')");
		}
	}
 
	//Display image
	$rs=mysqli_query($conn,"select * from user_image where uid=$uid");
	$nn =mysqli_num_rows($rs);
	if($nn>0)
	{
		while($row=mysqli_fetch_array($rs))
		{
		 ?>
		 <img width="150" src="<?php echo $row['path'];?>"><br>
		 <?php 
		}
	}
	else
	{
		echo "<img class=' img-responsive img-thumbnail ' src='css/images/profile1.png'></img>";
	}
	
}
}

if(!isset($_POST['upload']))
{
//Display image
	$rs=mysqli_query($conn,"select * from user_image where uid=$uid");
	$nn =mysqli_num_rows($rs);
	if($nn>0)
	{
		while($row=mysqli_fetch_array($rs))
		{
		 ?>
		 <img width="150" src="<?php echo $row['path'];?>"><br>
		 <?php 
		}
	}
	else
	{
		echo "<img class=' img-responsive img-thumbnail ' src='css/images/profile1.png'></img>";
	}
}
?>

                          <!-- <img class=" img-responsive img-thumbnail " src="css/images/profile1.png"></img> -->
                            
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
                        <a href="userindex.php?uid=<?php echo $uid;?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                    </li>-->
                        <!--<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> User Transactions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Upadate User</a>
                            </li>
                            <li>
                                <a href="#">Search User</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Update Books</a>
                    </li>
		<li>
                        <a href="adminsearch.php"><i class="fa fa-fw fa-file"></i> Search Book</a>
                    </li>
                <li>
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
                              Books Issued By You
                        </h1>
                        
                    </div>
                </div>
                
<?php
       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     $sql = "SELECT * from Issue,Book where Issue.Book_id=Book.Book_id and u_id=$uid ";
       $result = mysqli_query($conn,$sql);
      // $row = $result->fetch_assoc();
      // $count = $result->num_rows;
       //echo $count;
echo "<div class='row'>
                    <div class='col-lg-12'>
                       
                        <div class='table-responsive' >
                            <table class='table table-bordered table-hover table-striped'>
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
					<th>Book Title</th>
					<th>Category</th>
					<th>Issue Date</th>
                                        <th>Return Date</th>
					<th>Status</th>
					<th>Penalty</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
          /*                          <tr class="active">
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr class="success">
                                        <td>/about.html</td>
                                        <td>261</td>
                                        <td>33.3%</td>
                                        <td>$234.12</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>/sales.html</td>
                                        <td>665</td>
                                        <td>21.3%</td>
                                        <td>$16.34</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>/blog.html</td>
                                        <td>9516</td>
                                        <td>89.3%</td>
                                        <td>$1644.43</td>
                                    </tr>
                                    <tr>
                                        <td>/404.html</td>
                                        <td>23</td>
                                        <td>34.3%</td>
                                        <td>$23.52</td>
                                    </tr>
                                    <tr>
                                        <td>/services.html</td>
                                        <td>421</td>
                                        <td>60.3%</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                                        <td>/blog/post.html</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>";
*/
	//echo "<table border=1>";
        //echo "<tr> <th>ID</th> <th>Notification</th> <th>Status</th> </tr>";
	$id=1;
	while($row = mysqli_fetch_array($result))
	{
	echo " <tr><td>";
	echo $id;
	echo "</td><td>";
		$bid = $row['Book_id'];
	
			$res2 = mysqli_query($conn,"SELECT Book_Title,Category from Book where Book_id=$bid");
			while($row2 = mysqli_fetch_array($res2))
			{
				echo $row2['Book_Title'];
				echo "</td><td>";
				echo $row2['Category'];
				echo "</td><td>";
			}
	echo $row['issue_date'];
	echo "</td><td>";
	echo $row['return_date'];
	echo "</td><td>";
	echo $row['book_status'];
	echo "</td><td>";
	echo $row['penalty'];
	echo "</td><td>";
	//echo "<a href='View_Notification.php?type=issue&uid=$uid&bid=$bid'><input type='button' style='background-color:lightgreen' name='btn1' value='View Details' ></a>";
	//echo $row['status'];
	echo "</td></tr>";
   	
	$id = $id+1;
	}
        //echo "</table>";
echo  "</tbody>
                            </table>
                        </div>
                    </div>";
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

