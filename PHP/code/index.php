<?php

    $key = '563492ad6f91700001000001221023eb1bf342928c8800aad8ddf27c';
    $host = 'https://api.pexels.com/';
    $query =   "https://api.pexels.com/v1/search?query=desert&per_page=1"; 

    $headers = array(
        'Authorization: ' . $key
    );

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_URL, $query);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    $img = json_decode($response, true);

    $myimg = ($img['photos']['0']['src']['original']);

    echo '<img src="'.$myimg.'">';