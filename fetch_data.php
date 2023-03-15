<?php

function fetchCurrentAqi($long, $lati)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://air-quality.p.rapidapi.com/current/airquality?lon=" . $long . "&lat=" . $lati,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: air-quality.p.rapidapi.com",
            "X-RapidAPI-Key: 05a1d027bcmsh4696fdb923bcd99p1b1584jsnc0eb4d43fc88"
        ],
    ]);

    $api_resonse = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // $output = json_decode($response);
        // echo "This is the json format of the response";
        // echo $response;
        // echo "<br>";

        $response = json_decode($api_resonse, true);
        print_r($response);

        return $response;
    }

    return -1;
}
