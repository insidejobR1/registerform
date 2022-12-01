<?php
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include 'config.php';

    $mob_num= mysqli_real_escape_string($con, $_POST['email']);
    $pass =  mysqli_real_escape_string($con,$_POST['password']);
    
    
    //Checking User Here
    $check ="SELECT  * FROM `employee` WHERE `email`='$mob_num' and `password` = '$pass'";
   
    $res=mysqli_query($con,$check);

    $num_rows = mysqli_num_rows($res);
    
   
    if($num_rows>0){
           
          $data = mysqli_fetch_assoc($res);
         
         echo json_encode(array("statusCode"=>"200","data"=>$data,"message"=>"Successed"));
        
    }
        
    else{
            
        echo json_encode(array("statusCode"=>"404","message"=>"Failed"));
    
    
  } 

?>