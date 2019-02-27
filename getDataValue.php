<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$json = file_get_contents("php://input");
$obj = json_decode($json);
//print_r($obj);
/*if(isset($obj) && $obj!='' && count($obj)>0){
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}*/
echo json_encode('hi');
?>