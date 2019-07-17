<?php

$first_get  = urlencode('testing');
$second_get = urlencode('12345');
$third_get  = urlencode('mensage');

$url = "";

$str_get = "?var_one=".$first_get."&var_two=".$second_get."&var_tree=".$third_get;

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL, $url.''.$str_get);
curl_exec($ch);
curl_close($ch);

