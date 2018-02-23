<?php

header('Access-Control-Allow-Origin: *');

$result=array();
//$bdd = new PDO('mysqli:host=localhost;dbname=batch2015_asamadhan', 'root', 'harshad');

//$con=mysqli_connect("localhost", "root", "") or die(mysqli_error());
//mysqli_select_db("batch2015_bsonali",$con);
include('conf.php');

//if($con)
//{


$query="SELECT count(issue_id) ,monthname(issue_date) from Issue GROUP BY monthname(issue_date) ORDER BY issue_date";
//$query="select count(*)  as count,issue_date from Issue where issue_date between '2016-04-01' and '2016-04-30'";
//$query="select count(*),monthname(issue_date) from  Issue where issue_date between '2016-04-01' and '2016-04-30'";


$res = mysqli_query($conn,$query);

$month = array();
$count = array();
while($row = mysqli_fetch_array($res))
{
$month[]=$row[1];
$count[]=$row[0];

}
//print_r($tmp);
$result['month'] = $month;
$result['count'] = $count;

echo json_encode($result);


?>
