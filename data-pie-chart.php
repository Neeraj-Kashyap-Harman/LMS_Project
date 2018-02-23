<?php

header('Access-Control-Allow-Origin: *');


#Pie Chart
include('conf.php');

//$result = mysqli_query($conn,"SELECT name, val FROM web_marketing");
$result = mysqli_query($conn,"SELECT count(issue_id) as count ,monthname(issue_date) as month from Issue GROUP BY monthname(issue_date) ORDER BY issue_date");
//$rows = array();
$rows['type'] = 'pie';
$rows['name'] = 'Revenue';
$rows['innerSize'] = '50%';
while ($r = mysqli_fetch_array($result)) {
    $rows['data'][] = array($r['month'], $r['count']);    
}
$rslt = array();
array_push($rslt,$rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);

mysqli_close($con);


?>