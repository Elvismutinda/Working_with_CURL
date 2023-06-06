<?php

$url = "https://reqres.in/api/users/2";

$data_array = array(
    'name' => 'John Doe',
    'job' => 'Web Developer'
);

$data = http_build_query($data_array);

$header = array(
    'Authorization: fjueowhhfsdj'   // only needed if the api asks for an authorization header
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

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