<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$array=array();
for($i=1;$i<=10;$i++){
	$arr['userId']=$i;
	$arr['id']='1';
	$arr['title']='qui est esse';
	$arr['body']='hello';
	array_push($array, $arr);
}
//$newArr['data']=$array;
//print_r($array);
//echo '<pre>';
//print_r($newArr);
/*echo '<pre>';
print_r($array);
echo '<pre>';*/
echo json_encode($array);
//echo '</pre>';
 ?> 