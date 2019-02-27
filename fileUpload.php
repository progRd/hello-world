<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
//$json = file_get_contents("php://input");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);
//var_dump($data);
/*if(isset($json['avatar']['filename']) && isset($json['avatar']['value'])){
	$json_file = file_put_contents($json['avatar']['filename'], base64_decode($json['avatar']['value']));
	//print_r($json_file);
	//echo $json['avatar']['filename'];
}
//$obj = json_decode($json);

/*if(isset($obj) && $obj!='' && count($obj)>0){
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}*/
echo json_encode($data['avatar']['value']);