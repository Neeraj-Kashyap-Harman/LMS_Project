<?php


header('Access-Control-Allow-Origin: *');


include('conf.php');
 //mysqli_connect("10.20.50.1","bsonali","bsonali");
 //mysqli_select_db("batch2015_bsonali");
 
 $term=$_GET["term"];
 
 
 $query=mysqli_query($conn,"SELECT * FROM Book where Author like '".$term."%' order by Author ");
 $json=array();
 
    while($book=mysqli_fetch_array($query)){
         $json[]=array(
                    'value'=> $book["Author"],
                    'label'=>$book["Author"]
                        );
    }
 
 echo json_encode($json);

/*$q = strtolower($_GET["q"]);
if (!$q) return;

$sql = "select * from  Book where Book_Title like '%$q%' order by Book_Title";
$rsd = mysqli_query($conn,$sql);
while($rs = mysqli_fetch_array($rsd)) {
	$cname = $rs['Book_Title'];
	echo "$cname\n";
}
*/

?>
