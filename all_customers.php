<?php

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

include 'config.php';
     
       $emp_id= $_GET['emp_id'];
       
        $sql="SELECT * FROM customer where assigned_to = '$emp_id'";

        $run= mysqli_query($con,$sql);
        
       
          while($data=mysqli_fetch_assoc($run)){
    
         $arr[]=$data;
          
          }  
          
         if($run>0){
             
         echo json_encode(array("statusCode"=>"200","data"=>$arr,"message"=>"Successed"));
         } 
          
      else{
            
            
        echo json_encode(array("statusCode"=>"404","message"=>"Faild"));
        
  
        }

