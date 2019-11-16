<?php
require 'db.php';

//Get the posted data
$postData = file_get_contents("php://input");

if(isset($postData) && !empty($postData)){
    //Extract data
    $request = json_decode($postData);
    //Validate
    if((int)$request->id<1){
        return http_response_code(400);
    }
    //Sanitize
    $id = mysqli_real_escape_string($con,(int)$request->id);

 }

if(!$id){
    return http_response_code(200);
}

//Query 
$query = "DELETE FROM `users` WHERE `id`='{$id}' LIMIT 1";

if(mysqli_query($con,$query)){
    return http_response_code(204);
}else{
    return http_response_code(422);
}



?>