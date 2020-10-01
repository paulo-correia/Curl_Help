<?php

$first_post = urlencode('teste2');
$second_post = urlencode('987654');
$third_post = urlencode('sample');

$url='';

$str_post = "var_one=".$first_post."&var_two=".$second_post."&var_tree=".$third_post;

$ch2=curl_init();
curl_setopt($ch2,CURLOPT_URL,$url);
curl_setopt ($ch2, CURLOPT_POST, 1);
curl_setopt($ch2,CURLOPT_SSL_VERIFYPEER,false); 
curl_setopt($ch2,CURLOPT_SSL_VERIFYHOST,1);
curl_setopt($ch2, CURLOPT_SSLVERSION, 6);
curl_setopt ($ch2, CURLOPT_POSTFIELDS, $str_post);
$response = curl_exec ($ch);	//print_r($response);		 
if (curl_errno($ch)) {
  $error_msg = curl_error($ch);
}				
curl_close ($ch);

