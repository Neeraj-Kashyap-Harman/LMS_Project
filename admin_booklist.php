
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
                <li class="dropdown">
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
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Update Books</a>
                    </li>
		<li>
                        <a href="Homepage.html"><i class="fa fa-fw fa-file"></i> Search Book</a>
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
                           Book List  </h1>
	<div align="right">
		<input type="button" name="btn3" value="Add New Book" style="color:white; width:140px; height:35px; background-color:#FE642E;" onclick ="window.location.href='add_new_book.php'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" name="btn2" value="Generate Excel File" style="color:white; width:140px; height:35px; background-color:#4CAF50;" onclick ="window.location.href='excel.php'" >
                        </div>
                        <br>

                   <form method='get'>
			
			<input type="text" name="bname" placeholder="Enter   Title" size=35 id="bname">
			<input type="text" name="aname" placeholder="Enter   Author" size=35 id="aname">
			
			 <select id="category" name="Category">
          
          <!--  <option value="Database">&nbsp;Database&nbsp;</option>
            <option value="Maths">&nbsp;Mathematics&nbsp;</option>
            <option value="Software Engineering">&nbsp;Software Engineering&nbsp;</option>
	    <option value="C">&nbsp;C&nbsp;</option>
	    <option value="C++">&nbsp;C++&nbsp;</option>
	    <option value="AI">&nbsp;Artificial Intelligence&nbsp;</option>
	    <option value="Graphics">&nbsp;Graphics&nbsp;</option>
	    <option value="JAVA">&nbsp;JAVA&nbsp;</option>
	    <option value="LINUX">&nbsp;Linux&nbsp;</option>
	    <option value="NA">&nbsp;Numerical Analysis&nbsp;</option>
	    <option value="Parallel Computing">&nbsp;Parallel Computing&nbsp;</option>
	    <option value="PPL">&nbsp;PPL&nbsp;</option>
	    <option value="VB">&nbsp;Visual Basics&nbsp;</option>
	    <option value="UNIX">&nbsp;UNIX&nbsp;</option> -->
	<?php
		include('conf.php');
		$sql6 = "select DISTINCT Category from Book";
		$result = mysqli_query($conn,$sql6);
		while($row = mysqli_fetch_array($result))
		{
		echo "<option value=".urlencode($row['Category']).">";
		echo $row['Category'];
		echo "</option>";
		}
		echo "<option selected disabled>Book Category</option>";
	
	?>
	    
                   </select> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="btn1" value="Search" style="color:white; width:70px; height:35px; background-color:#0080FF;"> 
		
                   </form>
                <br>

<script  type="text/javascript">
function Func_Delete(id) 
{
	
	conf=confirm("Are you sure you want to delete the record?");
	if(conf)
	{
	   window.location.href="book_delete.php?bid="+id;
	}
	else
	{
	   header($_SERVER['PHP_SELF']);
	}
}
</script>   

<?php
       include('conf.php');
	
 $rec_limit = 10;

if(isset($_GET['btn1']))
{
	echo "<a href='admin_booklist.php'><input type='button' value='Back..'></a> ";
	$bname=$_GET['bname'];
	$aname=$_GET['aname'];
	$cat=urldecode($_GET['Category']);


	if($bname!=NULL && $aname==NULL && $cat==NULL) //only book name
		$strSQL = "SELECT * FROM Book where Book_Title like '%".$bname."%'";
	if($aname!=NULL && $bname==NULL && $cat==NULL) //only author name
		$strSQL = "SELECT * FROM Book where Author like '%".$aname."%'";
	if($bname!=NULL && $aname!=NULL && $cat==NULL) //both book name & author name
		$strSQL = "SELECT * FROM Book where Book_Title like '%".$bname."%' and Author like '%".$aname."%'";
	if($bname!=NULL && $aname==NULL && $cat!=NULL) //both book name & category
		$strSQL = "SELECT * FROM Book where Book_Title like '%".$bname."%' and Category='".$cat."'";
	if($bname==NULL && $aname!=NULL && $cat!=NULL) //both author name & category
		$strSQL = "SELECT * FROM Book where Author like '%".$aname."%' and Category='".$cat."'";
	if($cat!=NULL && $bname==NULL && $aname==NULL) // only category
		$strSQL = "SELECT * FROM Book where Category='".$cat."'";
	if($bname!=NULL && $aname!=NULL && $cat!=NULL) //for all author name & book name & category
		$strSQL = "SELECT * FROM Book where Book_Title like '%".$bname."%' and Author like '%".$aname."%' and Category='".$cat."'";

	
	 $result = mysqli_query($conn,$strSQL);

	 $num=mysqli_num_rows($result);
        if($num>0)
	{
     
echo "<div class='row'>
                    <div class='col-lg-12'>
                       
                        <div class='table-responsive' >
                            <table class='table table-bordered table-hover table-striped' style='overflow-x:scroll;'>

                                <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>Book Title</th>
                                        <th>ISBN</th>
					<th>Author</th>
					<th>Category</th>
					<th>Pages</th>
					<th>Total Copies</th>
					<th>Available Copies</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>";
        
	while($row = mysqli_fetch_array($result))
	{
	$bid = $row['Book_id'];
	echo " <tr>
                                        <td>";
	echo $row['Book_id'];
	echo "</td>
                                  