<?php 

require('db.php');

$users = [];
$query = "SELECT * FROM users";

if($results = mysqli_query($con,$query)){
    $i = 0;
    while($row = mysqli_fetch_assoc($results)){
        $users[$i]['id'] = $row['id'];
        $users[$i]['username'] = $row['username'];
        $users[$i]['fname'] = $row['fname'];
        $users[$i]['lname'] = $row['lname'];
        $i++;
    }
    echo json_encode($users);
}else{
    http_response_code(404);
}


?>