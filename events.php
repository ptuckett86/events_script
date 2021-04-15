#!/usr/bin/php

<?php
function get_data_from_api() {
	$curl = curl_init();
	$url = "http://18.188.242.35/api/v1/events/";
	curl_setopt_array($curl, array(
  			CURLOPT_URL => $url,
  			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
  			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
  			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  			CURLOPT_CUSTOMREQUEST => "GET",
  			// CURLOPT_POSTFIELDS => "{\n\"body\": \"{}\"\n}",
  			CURLOPT_HTTPHEADER => array(
    			"Accept: */*",
		    	"Cache-Control: no-cache",
		    	"Connection: keep-alive",
		    	"Content-Type: application/json",
  			)
		)
	);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	if ($err){
		echo $err;
		print_r($err);
	};
	echo $response;
	// $data = json_decode($response);
	// print_r($data);
	// return $data;
	// echo json_encode($data);
	curl_close($curl);
}	
get_data_from_api();
?>
