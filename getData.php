<?php

include 'connect.php';

$sel = mysqli_query($con,"select * from register");
$data = array();

while ($row = mysqli_fetch_array($sel)) {
    $data[] = array("name"=>$row['name'],"email"=>$row['email'],"phone"=>$row['phone'],"location"=>$row['location'],"message"=>$row['message']);
}

echo json_encode($data);
