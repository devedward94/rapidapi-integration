<?php
$filedata 	= 	file_get_contents("response.txt");
$decodedata = 	json_decode($filedata);
$myArray 	= 	json_decode(json_encode($decodedata), true);
$fixtures 	= 	$myArray["api"]["fixtures"];
foreach($fixtures as $key=>$data){
	//echo "<pre>";
	//print_r($data);
	echo $data['league']['name'];
	echo $data['league']['country'];
	echo $data['league']['logo'];
	
}
?>
