<?php

$curl = curl_init();        // $curl is the data type curl resource

$url = "https://reqres.in/api/users?page=2";  // this is the url we want to load

curl_setopt($curl, CURLOPT_URL, $url);  
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);          // used when the url uses SSL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

if($e = curl_error($curl)){
    echo $e;
}
else{
    $decoded = json_decode($result, true);
    echo "<pre>";
    print_r($decoded);
    echo "</pre>";
}

curl_close($curl);