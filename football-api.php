<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	/* CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v2/fixtures/live",*/
	CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v2/fixtures/date/2020-01-22",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: api-football-v1.p.rapidapi.com",
		"x-rapidapi-key: 97843b32b7mshf690160370b7b40p1e5dbdjsn2565440846c8"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo "<pre>";
	$arrayresponse = $response;
	$var1 = json_decode($arrayresponse);
	$file = fopen("response.txt","w");
	echo fwrite($file,$arrayresponse);
	fclose($file);
}