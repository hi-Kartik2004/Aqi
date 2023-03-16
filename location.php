<?php


function getLocation($city){
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://forward-reverse-geocoding.p.rapidapi.com/v1/forward?city=".$city,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: forward-reverse-geocoding.p.rapidapi.com",
            "X-RapidAPI-Key: 6680311b9fmshc91781a5f6f7a98p158c82jsn52a16020ec5e"
        ],
    ]);

    $api_response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $response = json_decode($api_response, true);
        print_r($response);
        return $response;
    }

    return -1;
}



?>