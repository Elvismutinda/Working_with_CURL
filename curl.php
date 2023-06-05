<?php

$curl = curl_init();        // $curl is the data type curl resource

$search_string = "pc video games 2016";
$url = "https://www.amazon.com/s?k=$search_string";

curl_setopt($curl, CURLOPT_URL, $url);  // this will load amazon.com dynamically on our localhost
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);          // since amazon uses SSL we can set it to false with curl here
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// https://m.media-amazon.com/images/I/81IiXIFw0lL._AC_UY218_.jpg

$result = curl_exec($curl);
echo $result;

curl_close($curl);