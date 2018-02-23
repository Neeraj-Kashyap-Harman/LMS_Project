<?php

header('Access-Control-Allow-Origin: *');

include('conf.php');
 //mysqli_connect("10.20.50.1","bsonali","bsonali");
 //mysqli_select_db("batch2015_bsonali");
// $opt=$_GET["option"];
 $term=$_GET["term"];
 if($opt=="Title")
 {
 
 $query=mysqli_query($conn,"SELECT * FROM Book where Book_Title like '%".$term."%' order by Book_Title limit 10");
 $json=array();
 
    while($book=mysqli_fetch_array($query)){
         $json[]=array(
                    'value'=> $book["Book_Title"],
                    'label'=>$book["Book_Title"]
                        );
    }
 
 echo json_encode($json);
}

?>
