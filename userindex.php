<?php
//session_start();
$uid = $_REQUEST['uid'];
if($uid == NULL)
{
		echo "<script type='text/javascript'>";
                echo "alert('You cannot directly access this page.'); ";
		echo "window.location.href='/library/RegistrationLogin/index.html';";
                echo "</script>";
}

session_start();
$_SESSION['uid'] = $uid;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User </title>

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

<script src="js/jquery.min1.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
 
function addmsg1(type, msg){
 
$('#notification_count').html(msg);
 
}
 
function waitForMsg1(){
 
$.ajax({
type: "GET",
url: "user_issue_select.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg1("new", data);
setTimeout(
waitForMsg1,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg1,
15000);
}
});
};
 
function addmsg2(type, msg){
 
$('#notification_count1').html(msg);
 
}
 
function waitForMsg2(){
 
$.ajax({
type: "GET",
url: "user_reserve_select.php",
 
async: true,
cache: false,
timeout:50000,
 
success: function(data){
addmsg2("new", data);
setTimeout(
waitForMsg2,
1000
);
},
error: function(XMLHttpRequest, textStatus, errorThrown){
addmsg("error", textStatus + " (" + errorThrown + ")");
setTimeout(
waitForMsg2,
15000);
}
});
};

$(document).ready(function(){
 
waitForMsg1();
waitForMsg2();
});
 
 
</script>

<script type="text/javascript">
/*
function noback() 
{
window.history.forward();
}
noback();
window.onload = noback;
window.onpageshow = function(evt) { if (evt.persisted) noback() }
window.onunload = function() { void (0) }
*/
</script> 

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
               <!-- <li class="dropdown">
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
                    </ul>
                </li>
                <!--<li class="dropdown">
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
                </li>-->
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
                    <li class="active">
                        <a href="userindex.php?uid=<?php echo $uid;?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <!--  <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
                    </li>
                   <li>
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
                            <li>
                                <a href="#">Search User</a>
                            </li>
                        </ul>
                    </li>
			 <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Update Books</a>
                    </li>-->
		    <li>
                        <a href="Homepage.php"><i class="fa fa-fw fa-file"></i> Search Book</a>
                    </li>
                    <li>
                        <a href="RegistrationLogin/update1.html"><i class="fa fa-fw fa-file"></i> Change Password</a>
                    </li>
					 <!--<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Update <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="#">Upadate Books</a>
                            </li>
                            <li>
                                <a href="#">Update User</a>
                            </li>
                        </ul>
                    </li>--->
                  
                   <!-- <li>
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

<h1 id="logo3" ><img src="css/images/pune2.jpg" align="left" alt="" />
 <br> Interdisciplinary School of Scientific Computing 
 <img src="css/images/issc.png" align="right" alt="" /> </h1>

		 <h1 class="page-header">  </h1>
                      <!--  <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>-->
                    </div>
                </div>
<br>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
					
                                        <div class="huge"></div>
                                        

<span id="notification_count"></span>
<a href="user_issue_notify.php?uid=<?php echo $uid;?>" id="notificationLink" onclick = "return getNotification()"></a>
<div id="HTMLnoti" style="textalign:center"></div>
<div> Issued Books</div>

                                    </div>
                                </div>
                            </div>
                            <a href="user_issue_notify.php?uid=<?php echo $uid;?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
<span id="notification_count1"></span>
<a href="user_reserve_notify.php?uid=<?php echo $uid;?>" id="notificationLink" onclick = "return getNotification()"></a>
<div id="HTMLnoti" style="textalign:center"></div>
<div> Reserved Books</div>
                                    </div>
                                </div>
                            </div>
                            <a href="user_reserve_notify.php?uid=<?php echo $uid;?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

			  <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
<span id="notification_count2"></span>
<a href="user_issue_request_notify.php?uid=<?php echo $uid;?>" id="notificationLink" onclick = "return getNotification()"></a>
<div id="HTMLnoti" style="textalign:center"></div>
<div>Book Issue Requests</div>
                                    </div>
                                </div>
                            </div>
                            <a href="user_issue_request_notify.php?uid=<?php echo $uid;?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
<span id="notification_count3"></span>
<a href="user_suggession.php?uid=<?php echo $uid;?>" id="notificationLink" onclick = "return getNotification()"></a>
<div id="HTMLnoti" style="textalign:center"></div>
                                        <div>Add Suggestions</div>
                                    </div>
                                </div>
                            </div>
                            <a href="user_suggession.php?uid=<?php echo $uid;?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
               </div>


                  <!--  <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Regisration Requests!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Suggestions  from Users!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                   <!--  <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Notification Panel</h3>
                            </div>
                           <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

	 <?php
 include('conf.php');


//echo "aaaaaaaaaaaaaaaaaaa = $uid";
echo "<table border=0 >";
echo"<h2>RECOMMENDATIONS FOR YOU<h2>";
echo"<br>";


$res3=mysqli_query($conn,"select * from Book where Book.Book_id IN(select distinct Book_reccomendation.book_id from Book_reccomendation,recommendations where recommendations.bookid=Book_reccomendation.book_id AND recommendations.bookid IN(select recommendations.bookid from recommendations,Bookuser where recommendations.u_id=Bookuser.u_id AND Bookuser.u_id=$uid))");
$n=mysqli_num_rows($res3);
//echo $n;

/*************************new user********************************/
if($n==0)
{
$res4=mysqli_query($conn,"Select * from Book,popular where Book.Book_id=popular.Book_id ");
$n1=mysqli_num_rows($res4);

while($n1 >0)
{
$line = 5;
$count=0;

echo "<table border=0 style='vertical-align: top;' ><tr>";

while ($row1 = mysqli_fetch_array($res4))
{
	$image=$row1['ISBN'];
	if($image == NULL)
	{
	 echo "<td valign ='top'>";
	echo "<a href=Selectpage.php?bookid=".$row1['Book_id']."><img src='css/images/noimage.jpeg' title='".$row1['Book_Title']."' style='margin:20px; background:#808080; border:3px solid black;' width='170' height='200' /></a>"; 
	}
	else
	{
        echo "<td valign ='top'>";
$imgurl='http://covers.openlibrary.org/b/isbn/'.$row1['ISBN'].'-M.jpg';
	echo "<a href=Selectpage.php?bookid=".$row1['Book_id']."><img src=".$imgurl." title='".$row1['Book_Title']."' style='margin:20px; background:#808080; border:3px solid black;' width='170' height='200' /></a>"; 
	echo "</td>";
	}
$count++;
if($count > $line) break;
}

$n1 = $n1-6;
echo "</tr><tr>";

}//end of outer while

	echo"</tr></table>";

}

/*************************new user********************************/

else
{

echo '<table border=0 ><tr>';

while($n>0)
{
 
$count=0;
$line = 5;

while ($row1 = mysqli_fetch_array($res3))
{
	$image=$row1['ISBN'];
	if($image == NULL)
	{
	 echo "<td valign ='top'>";
	echo "<a href=Selectpage.php?bookid=".$row1['Book_id']."><img src='css/images/noimage.jpeg' title='".$row1['Book_Title']."' style='margin:20px; background:#808080; border:3px solid black;' width='170' height='200' /></a>"; 
	}
	else
	{
        echo "<td valign ='top'>";
$imgurl='http://covers.openlibrary.org/b/isbn/'.$row1['ISBN'].'-M.jpg';
	echo "<a href=Selectpage.php?bookid=".$row1['Book_id']."><img src=".$imgurl." title='".$row1['Book_Title']."' style='margin:20px; background:#808080; border:3px solid black;'   width='170' height='200' /></a>"; 
	echo "</td>";
	}
$count++;
if($count>$line) break;
}

$n = $n-6;
echo "</tr><tr>";

}//end of outer while

echo "</tr></table>";

}
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

</body>

</html>
