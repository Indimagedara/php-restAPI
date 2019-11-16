<?php

require 'db.php';

//Get the posted data
$postData = file_get_contents("php://input");

if(isset($postData) && !empty($postData)){
    //Extract data
    $request = json_decode($postData);
    //Validate
    if((int)$request->id<1 || trim($request->username) == '' || trim($request->fname) == '' || trim($request->lname) == ''){
        return http_response_code(400);
    }
    //Sanitize
    $id = mysqli_real_escape_string($con,(int)$request->id);
    $username = mysqli_real_escape_string($con,trim($request->username));
    $fname = mysqli_real_escape_string($con,trim($request->fname));
    $lname = mysqli_real_escape_string($con,$request->lname);
    //Query
    $query = "UPDATE `users` SET `id`='{$id}',`username`='{$username}',`fname`='{$fname}',`lname`='{$lname}' WHERE `id`='{$id}' LIMIT 1";
    //Execute
    if(mysqli_query($con,$query)){
        return http_response_code(204);
        echo "userID "+$id+" updated successfully";
    }else{
        return http_response_code(422);
    }
}



?>