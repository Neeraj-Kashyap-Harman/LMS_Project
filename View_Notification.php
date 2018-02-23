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
                        <!--<li>
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
                            <li>
                                <a href="#">Search User</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-fw fa-file"></i> Update Books</a>
                    </li>  -->
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
                            View Details
                        </h1>
                        
                    </div>
                </div>
                <br>
	<h2>Book Information</h2>
	<br>
<?php
       
       //$conn=mysqli_connect('10.20.50.1', 'bsonali', 'bsonali') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection

	include('conf.php');
 
     	 $type=$_REQUEST['type'];
         $bookid=$_REQUEST['bid'];
	 $userid=$_REQUEST['uid'];

       $sql = "SELECT * from Book where Book_id = $bookid";
       $result = mysqli_query($conn,$sql);

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

	


	while($row = mysqli_fetch_array($result)) {

	
echo "<font size=4>";
 echo "<table border=0>";
 
        echo "<tr>
		<td valign ='top'>
			<table border=0 >
				<tr>";
	echo "<td> ";

echo "<font size=3>Book ID</font>";
echo "</td><td>";
echo ":\t\t".$row['Book_id'];

echo "</td></tr>";
		echo "<tr><td>";
	 echo " <font size=3>Book Title</font> ";
	echo "</td><td>";
	$book_name = $row['Book_Title'] ;
	echo "  :\t\t".$row['Book_Title'] ;
	echo "</td></tr>";
	echo "<tr><td> ";

echo "<font size=3>ISBN</font>";
echo "</td><td>";
echo ":\t\t".$row['ISBN'];

echo "</td></tr>";

echo "<tr><td> ";
echo "<font size=3>Author</font>";
echo "</td><td>";
echo ":\t\t".$row['Author'];
echo "</td></tr>";

echo "<tr><td><font size=3>Category</font> ";
echo "</td><td>";
echo ":\t\t".$row['Category'] ;
echo "</td></tr>";

echo "<tr><td> ";
echo "<font size=3>No. of Copies</font>";
echo "</td><td>";
echo ":\t\t".$row['No_of_copies'];
echo "</td></tr>";

echo "<tr><td> ";
echo "<font size=3>Available Copies</font>";
echo "</td><td>";
echo ":\t\t".$row['Available_copies'];

echo "</td></tr>";

echo "</table></td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>";
       
	$imgurl='http://covers.openlibrary.org/b/isbn/'.$row['ISBN'].'-L.jpg';
	echo "<img src= ".$imgurl." style ='background:#808080';  width='250' height='270'/>"; 
	echo "</td></tr>";
echo "</font>";
echo "</table>";


	  }


        //echo "</table>";
/*echo  "</tbody>
                            </table>
                        </div>";*/
echo "<br>
	<h2>User Information</h2>
	<br>";
	$sql3 = "SELECT * from users where u_id = $userid";
       $result = mysqli_query($conn,$sql3);

	while($row = mysqli_fetch_array($result)) {

	
echo "<font size=4>";
 echo "<table border=0>";
 
        echo "<tr><td>";
       
	
	 echo " <font size=3>User ID</font> ";
	echo "</td><td>";
	echo "  :\t\t".$row['u_id'] ;
	echo "</td></tr>";
	echo "<tr><td> ";

echo "<font size=3>Name</font>";
echo "</td><td>";
echo ":\t\t".$row['Name'];

echo "</td></tr>";

echo "<tr><td> ";
echo "<font size=3>User Role</font>";
echo "</td><td>";
echo ":\t\t".$row['user_role'];
echo "</td></tr>";

echo "<tr><td><font size=3>Email Id</font> ";
echo "</td><td>";
$uemail = $row['Email'];
echo ":\t\t".$row['Email'] ;
echo "</td></tr>";

echo "<tr><td> ";
echo "<font size=3>Course</font>";
echo "</td><td>";
echo ":\t\t".$row['course'];
echo "</td></tr>";




echo "</font>";
echo "</table>";


	  }
if( $type == 'issue')
{
echo "<div align='center'><form action='' method='post' >
  <br><br>";
 
echo "<input type='submit' name='confirm' value='Confirm' style='color:white; width:80px; height:35px; background-color:#4CAF50; ' /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type='submit' name='reject' value='Reject' style='color:white; width:80px; height:35px; background-color: #f44336;' /> 
</form> </div>";
}

if(isset($_POST['confirm']))
{
	
	$id = date('Y-m-d');
	$rd = date('Y-m-d' ,strtotime("+14 days"));

	$sql3 = "insert into Issue(u_id,Book_id,issue_date,return_date) values($userid,$bookid,'$id','$rd')";
	if(mysqli_query($conn,$sql3))
	{
		mysqli_query($conn,"update Notification set status='read' where u_id=$userid and Book_id=$bookid");
	  	echo "<script type='text/javascript'>";
		echo "alert('Book has been Successfully issued \\n Issue Date :$id\\n Return Date:$rd');";
		echo "window.location.href='issue_notify.php';";
                echo "</script>";

		//decrement No. of copies of book
		$sql5 = mysqli_query($conn,"update Book set Available_copies = Available_copies-1 where Book_id=$bookid");
 

		$to = $uemail; 
  		$subject = 'Book Successfully Issued'; 
  		$message = 'You have Issued Book Successfully : 
	--------------------------------------------------------
		Book Name :'.$book_name.'
		Date of Issue  :'.$id.'
		Date of Returning Book  :'.$rd.'
		
	--------------------------------------------------------';
  		$headers = 'From:issclms@gmail.com' . "\r\n";
		error_reporting(E_ERROR | E_PARSE);
		mail($to,$subject,$message,$headers);
		$sqlz=mysqli_query($conn,"select * from Book where Available_copies=0 and Book_id=$bookid");
		$cnt=mysqli_num_rows($sqlz);
		if($cnt>0)
		{	
			$sqlz = "SELECT * from users,Notification where users.u_id=Notification.u_id and Book_id = $bookid and Notification.type='issue' and Notification.status='unread'";
			$resultz = mysqli_query($conn,$sqlz);
			
			$st = date('Y-m-d');
			$today = date("Y-m-d g:i:s"); 
			$ed=date_format(date_add(date_create($st),date_interval_create_from_date_string("14 days")),"Y-m-d");
			echo "<script>alert('<?php echo $st.$ed ?>');</script>";
			/*$issueNotification=mysqli_query($conn,"update Notification set type='reserve',notify_date='".$today."' where Book_id=$bookid and type='issue' and status='unread'");
			if($issueNotification)
				   echo "<script>alert('Record updated successfully');</script>";
				   else {
					echo "<script>alert('Record updated Unsuccessfully');</script>";//. mysqli_error($conn);
						}
			$issueTransaction=mysqli_query($conn,"update transaction set type='reserve',start_date='".$st."',end_date='".$ed."' where Book_id=$bookid and type='issue'");*/
			
		while($row = mysqli_fetch_array($resultz))
		{
			
		$uemail=$row['Email'];
			
		$to = $uemail; 
  		$subject = 'Issue request transferred to Reserve'; 
  		$message = 'The book you requested to issue is transferred to reserve request as it was issued to someone before you : 
	--------------------------------------------------------
		Your book reservation details :
		Book Name :'.$book_name.'
		Reservation Start Date : '.$today.'
		Reservation End Date : '.$ed.'
		
		
	--------------------------------------------------------';
  		$headers = 'From:issclms@gmail.com' . "\r\n";
		error_reporting(E_ERROR | E_PARSE);
		mail($to,$subject,$message,$headers);
		}
		}
	}
}

if(isset($_POST['reject']))
{
		mysqli_query($conn,"update Notification set status='read' where u_id=$userid and Book_id=$bookid");
	  	echo "<script type='text/javascript'>";
		echo "alert('Issue Request has been Rejected \\n');";
		echo "window.location.href='issue_notify.php';";
                echo "</script>";

		$to = $uemail; 
  		$subject = 'Issue Request Rejected'; 
  		$message = 'Your Request to issue this book is rejected Because this has been issued by other user : 
	--------------------------------------------------------
		Book Name :'.$book_name.'
		
		
	--------------------------------------------------------';
  		$headers = 'From:issclms@gmail.com' . "\r\n";
    		error_reporting(E_ERROR | E_PARSE);
		mail($to,$subject,$message,$headers);
	
}

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

