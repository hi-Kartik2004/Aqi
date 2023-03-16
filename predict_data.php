<?php

function predictAqi($long, $lati)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://air-quality.p.rapidapi.com/forecast/airquality?lat=" . $lati . "&lon=" . $long . "&hours=25",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: air-quality.p.rapidapi.com",
            "X-RapidAPI-Key: d5200bb0dbmshde9b1d9b209aa21p16f89ejsnbeeadcf1f73a"
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
