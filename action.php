<?php
session_start();
require('fetch_data.php');

if (isset($_POST['current_aqi_btn'])) {
    $long = $_POST['long'];
    $lati = $_POST['lati'];
    $response = fetchCurrentAqi($long, $lati);
    $_SESSION['c_response'] = $response;
    // print_r($_SESSION['c_response']);
    header("location: index.php");
} else if (isset($_POST['predict_aqi_btn'])) {
    print_r($_POST);
} else if (isset($_POST['past_aqi_btn'])) {
    print_r($_POST);
} else {
    echo "Stop playing around with the posts requests! Something went wrong!";
}
