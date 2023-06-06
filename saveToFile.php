<?php

$curl = curl_init();        // $curl is the data type curl resource

$url = "https://reqres.in/api/users?page=2";  // this is the url we want to load

$file = fopen("file.txt", "w");

curl_setopt($curl, CURLOPT_URL, $url);  
curl_setopt($curl, CURLOPT_FILE, $file);

curl_exec($curl);

if($e = curl_error($curl)){
    echo $e;
}

fclose($file);
curl_close($curl);