<?php
header('Access-Control-Allow-Origin: *');
?>



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
                    </li> -->
		<li>
                        <a href="admin_booklist.php"><i class="fa fa-fw fa-file"></i>Book List</a>
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
                             Reserved Books
                        </h1>
                        
                    </div>
                </div>
          
 	 <form method='get'>
			<input type="text" name="uname" placeholder="Enter User Name" size=35 id="uname"> 
			
	
			<input type="submit" name="btn1" value="Search" style="color:white; width:60px; height:35px; background-color:#0080FF;"><br><br>
                   </form>


                
<?php
       
       //$conn=mysqli_connect('localhost', 'root', '') or die (mysqli_error ());

	//mysqli_select_db("batch2015_bsonali") or die(mysqli_error());
       // Check connection
 	
	include('conf.php');
	 $rec_limit = 10;
	
	if(isset($_GET['btn1']))
{
	echo "<a href='admin_book_reserved.php'><input type='button' value='Back..'></a> ";
	
	$uname=$_GET['uname'];
	
	if($uname!=NULL)
		$sql = "SELECT * FROM transaction,users where transaction.u_id=users.u_id and type='reserve' and Name like '%".$uname."%'";
	

	//$sql = "SELECT * from Issue,Users where book_status='$stat'";
       $result = mysqli_query($conn,$sql);
	
	echo "<div class='row'>
                    <div class='col-lg-12'>
                       
                        <div class='table-responsive' >
                            <table class='table table-bordered table-hover table-striped'>
                                <thead>
                                    <tr>
                                         <th>Sr.No</th>
					<th>Name</th>
					<th>Book Title</th>
					<th>Start Date</th>
                                        <th>End Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
         
       
	$id=1;
	while($row = mysqli_fetch_array($result))
	{
	echo " <tr><td>";
	echo $id;
	echo "</td><td>";
		$uid = $row['u_id'];
		$bid = $row['Book_id'];
		
			$res1 = mysqli_query($conn,"SELECT Name from users where u_id=$uid");
			while($row1 = mysqli_fetch_array($res1))
			{
				echo $row1['Name'];
				echo "</td><td>";	
			}
			$res2 = mysqli_query($conn,"SELECT Book_Title from Book where Book_id=$bid");
			while($row2 = mysqli_fetch_array($res2))
			{
			//$bid = $row['Book_id'];
	
                                //echo $row['Book_id'];
                                //echo "</td><td>";
				echo $row2['Book_Title'];
				echo "</td><td>";
			}
	
	
	echo $row['start_date'];
	echo "</td><td>";
	echo $row['end_date'];
	
	echo "</td>";
	echo "</tr>";
   	
	$id = $id+1;
	}
        //echo "</table>";
echo  "</tbody>
                            </table>
                        </div>
                    </div>";
}
/*******************************************************************************/
	if(!isset($_GET['btn1']))
{
     $sql = "SELECT count(trans_id) FROM transaction where type='reserve'";
         $retval = mysqli_query( $conn,$sql );
         
         if(! $retval )
         {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQLI_NUM );
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

       $sql1 = "SELECT * from transaction where type='reserve' LIMIT $offset, $rec_limit";
       $result = mysqli_query($conn,$sql1);

	 $num=mysqli_num_rows($result);
        if($num>0)
	{
      
echo "<div class='row'>
                    <div class='col-lg-12'>
                       
                        <div class='table-responsive' >
                            <table class='table table-bordered table-hover table-striped'>
                                <thead>
                                    <tr>
                                         <th>Sr.No</th>
					<th>Name</th>
					<th>Book Title</th>
					<th>Start Date</th>
                                        <th>End Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
         
       
	$id=1;
	while($row = mysqli_fetch_array($result))
	{
	echo " <tr><td>";
	echo $id;
	echo "</td><td>";
		$uid = $row['u_id'];
		$bid = $row['Book_id'];
		
			$res1 = mysqli_query($conn,"SELECT Name from users where u_id=$uid");
			while($row1 = mysqli_fetch_array($res1))
			{
				echo $row1['Name'];
				echo "</td><td>";	
			}
			$res2 = mysqli_query($conn,"SELECT Book_Title from Book where Book_id=$bid");
			while($row2 = mysqli_fetch_array($res2))
			{
			//$bid = $row['Book_id'];
	
                                //echo $row['Book_id'];
                                //echo "</td><td>";
				echo $row2['Book_Title'];
				echo "</td><td>";
			}
	
	
	echo $row['start_date'];
	echo "</td><td>";
	echo $row['end_date'];
	echo "</td><td>";
	
	echo "</tr>";
   	
	$id = $id+1;
	}
        //echo "</table>";
echo  "</tbody>
                            </table>
                        </div>
                    </div>";
}//if ends

	   if( $page == 0 )
         {
             echo "<center>";
             echo "<a href=\"$_PHP_SELF?page=$page\">Next Page >>></a>";
	     echo "</center>";
         }
			
         else if( $left_rec < $rec_limit && $page > 0 )
         {
            $last = $page - 2;
            echo "<center>";
            echo "<a href=\"$_PHP_SELF?page=$last\"><<< Previous Page</a>";
            echo "</center>";
         }
 	else if( $page > 0 )
         {
            $last = $page - 2;
            echo "<center>";
            echo "<a href=\"$_PHP_SELF?page=$last\"><<< Previous Page</a>   ||";
            echo "<a href=\"$_PHP_SELF?page=$page\"> Next Page >>></a>";
            echo "</center>";
         }
}
       mysqli_close($conn);
?>


<script type="text/javascript">
function Fun_return(id,id2) 
{
	
	conf=confirm("Are you sure you want to return the Book?");
	if(conf)
	{
	   window.location.href="book_return.php?bid="+id+"&uid="+id2;
	}
	else
	{
	   header($_SERVER['PHP_SELF']);
	}
}  
</script>



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

