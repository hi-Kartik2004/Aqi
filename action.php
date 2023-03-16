<?php
session_start();
require('fetch_data.php');
require('predict_data.php');
require('past_data.php');
require('location.php');

if (isset($_POST['current_aqi_btn'])) {
    $long = $_POST['long'];
    $lati = $_POST['lati'];
    $response = fetchCurrentAqi($long, $lati);
    $_SESSION['c_response'] = $response;
    // print_r($_SESSION['c_response']);
    header("location: index.php");
} else if (isset($_POST['predict_aqi_btn'])) {
    $long = $_POST['long'];
    $lati = $_POST['lati'];
    $response = predictAqi($long, $lati);
    $_SESSION['p_response'] = $response;
    // print_r($_SESSION['p_response']);
    echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
} else if (isset($_POST['past_aqi_btn'])) {
    $long = $_POST['long'];
    $lati = $_POST['lati'];
    $response = pastAqi($long, $lati);
    $_SESSION['past_response'] = $response;
    print_r($_SESSION['past_response']);
    echo '<script type="text/javascript">
    window.location = "index.php"
</script>';
} 
else if(isset($_POST['city-btn'])){
    // echo $_POST['city'];
    $data=getLocation($_POST['city']);
    $_SESSION['location'] = $data;
    // print_r($_SESSION['location']);
    echo "<br>";
    $long = $_SESSION['location'][0]['lon'];
    echo "<br>";
    $lati =  $_SESSION['location'][0]['boundingbox'][0];
    $response = fetchCurrentAqi($long, $lati);
    $_SESSION['c_response'] = $response;
    echo '<script type="text/javascript">
    window.location = "index.php"
</script>';
}
else if(isset($_POST['p-city-btn'])){
    // echo $_POST['city'];
    $data=getLocation($_POST['city']);
    $_SESSION['location'] = $data;
    // print_r($_SESSION['location']);
    echo "<br>";
    $long = $_SESSION['location'][0]['lon'];
    echo "<br>";
    $lati =  $_SESSION['location'][0]['boundingbox'][0];
    $response = predictAqi($long, $lati);
    $_SESSION['p_response'] = $response;
    echo '<script type="text/javascript">
    window.location = "index.php"
</script>';
}
else if(isset($_POST['past-city-btn'])){
    // echo $_POST['city'];
    $data=getLocation($_POST['city']);
    $_SESSION['location'] = $data;
    // print_r($_SESSION['location']);
    echo "<br>";
    $long = $_SESSION['location'][0]['lon'];
    echo "<br>";
    $lati =  $_SESSION['location'][0]['boundingbox'][0];
    $response = pastAqi($long, $lati);
    $_SESSION['past_response'] = $response;
    echo '<script type="text/javascript">
    window.location = "index.php"
</script>';
}
else {
    echo "Stop playing around with the posts requests! Something went wrong!";
}
