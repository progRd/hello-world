<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$array=array();
for($i=0;$i<10000;$i++){
	$array[$i]['title']='My title'.$i+1;
	$array[$i]['description']='My description'.$i+1;
	$array[$i]['id']=$i+1;
	//print_r($array);
}
/*echo '<pre>';
print_r($array);
echo '</pre>';*/
echo json_encode($array);