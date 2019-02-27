<?php
	$response=array();
	$posts[] = array('title'=> 'title', 'url'=> 'url');
	$posts[]=array('title'=> 'title1', 'url'=> 'url1');
	$response['posts'] = $posts;
	$fp = fopen('results.json', 'w');
	fwrite($fp, json_encode($response));
	fclose($fp);

 ?>