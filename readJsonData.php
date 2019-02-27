<?php
include('dbcon.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$json = file_get_contents("php://input");
$obj = json_decode($json);
if(isset($obj) && $obj!='' && count($obj)>0){
$sql = "INSERT INTO json_data (title, description)
VALUES ('$obj->title', '$obj->desc')";

if ($conn->query($sql) === TRUE) {
    echo json_encode("New record created successfully");
} else {
    echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}
}
?>