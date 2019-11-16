<?php 
require 'db.php';

//Get posted data
$postData = file_get_contents("php://input");

if(isset($postData) && !empty($postData)){
    //Extract the data
    $request = json_decode($postData);

    //Validate data
    if(trim($request->username)==='' || trim($request->fname)=== '' || trim($request->lname)===''){
        return http_response_code(400);
    }

    //Sanitize
    $username = mysqli_real_escape_string($con, trim($request->username));
    $fname = mysqli_real_escape_string($con, trim($request->fname));
    $lname = mysqli_real_escape_string($con, trim($request->lname));

    //Query
    $query = "INSERT INTO `users`(`id`,`username`,`fname`,`lname`) VALUES (null,'{$username}','{$fname}','{$lname}')";

    if(mysqli_query($con,$query)){
        http_response_code(201);
        $users = [
            'username' => $username,
            'fname' => $fname,
            'lname' => $lname,
            'id' => mysqli_insert_id($con)
        ];
        echo json_encode($users);

    }else{
        http_response_code(422);
    }


}


?>