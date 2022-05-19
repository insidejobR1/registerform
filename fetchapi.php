<?php
header('Content-Type: application/json');

include "config0.php";

$sql="SELECT * FROM ragister_form";

$result=mysqli_query($conn,$sql) or die("sql query failed");

if(mysqli_num_rows($result)>0)
{
    $out=mysqli_fetch_all($result,MYSQLI_ASSOC);
     echo json_encode($out);
}
 else
 {
    echo json_encode(array('message'=>'No record found.', 'status=>false'));

}



?>