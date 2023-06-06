<?php

$url = "https://reqres.in/api/users";

$data_array = array(
    'name' => 'John Doe',
    'job' => 'Web Developer'
);

$data = http_build_query($data_array);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

if($e = curl_error($curl)){
    echo $e;
}
else{
    $decoded = json_decode($result);
    foreach($decoded as $key => $value){
        echo $key . ': ' .  $value . '<br>';
    }
}

curl_close($curl);