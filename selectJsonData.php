<?php
include('dbcon.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
$json = array();
$sql="SELECT * FROM json_data";
if ($result=mysqli_query($conn,$sql)){
	while ($row=mysqli_fetch_array($result))
    {
	    $json[]= array(
	    	'id'=>$row['id'],
		    'title' => $row['title'],
		    'description' => $row['description']
	    );
    }
$data_string = json_encode($json);
echo $data_string;
/*$url='http://localhost:4200/';
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FAILONERROR, true); 

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
); 
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_TIMEOUT, 5);
//curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);            
                                                                                                                     
$result = curl_exec($ch);
if (curl_error($ch)) {
    $error_msg = curl_error($ch);
}
curl_close($ch);

if (isset($error_msg)) {
    // TODO - Handle cURL error accordingly
    echo $error_msg;
}

//curl_close($ch);
echo $result;*/
}
?>