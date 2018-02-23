<?php
$result=array();
//$bdd = new PDO('mysql:host=localhost;dbname=batch2015_asamadhan', 'root', 'harshad');

$con=mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("batch2015_bsonali",$con);


if($con)
{


$query="SELECT count(issue_id) ,monthname(issue_date) from Issue GROUP BY monthname(issue_date) ORDER BY issue_date";
//$query="select count(*)  as count,issue_date from Issue where issue_date between '2016-04-01' and '2016-04-30'";
//$query="select count(*),monthname(issue_date) from  Issue where issue_date between '2016-04-01' and '2016-04-30'";


$res = mysql_query($query);

$month = array();
$count = array();
while($row = mysql_fetch_array($res))
{
$month[]=$row[1];
$count[]=$row[0];

}
//print_r($tmp);
$result['month'] = $month;
$result['count'] = $count;

echo json_encode($result);
}

?>
