<?php
$url = 'http://localhost:3000/merchant/7d992f49-c42e-4459-9157-0eb9e4f1b283/balance';
$fields = array(
	'password' => '123456'
);

//url-ify the data for the POST
$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);


print_r($result);

//close connection
curl_close($ch);