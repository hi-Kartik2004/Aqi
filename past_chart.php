<?php
session_start();

if (isset($_SESSION['past_response'])) {
    $data1 = $_SESSION['past_response']['data'][0]['aqi'];
    $data2 = $_SESSION['past_response']['data'][1]['aqi'];
    $data3 = $_SESSION['past_response']['data'][2]['aqi'];
    $data4 = $_SESSION['past_response']['data'][3]['aqi'];
    $data5 = $_SESSION['past_response']['data'][4]['aqi'];
    $data6 = $_SESSION['past_response']['data'][5]['aqi'];
    $data7 = $_SESSION['past_response']['data'][6]['aqi'];
    $data8 = $_SESSION['past_response']['data'][7]['aqi'];
    $data9 = $_SESSION['past_response']['data'][8]['aqi'];
    $data10 = $_SESSION['past_response']['data'][9]['aqi'];
    $data11 = $_SESSION['past_response']['data'][10]['aqi'];
    $data12 = $_SESSION['past_response']['data'][11]['aqi'];
    $data13 = $_SESSION['past_response']['data'][12]['aqi'];
    $data14 = $_SESSION['past_response']['data'][13]['aqi'];
} else {
    die("Please enter a valid logitude and latitude to see the chart");
    exit();
}




?>


<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "1hr-",
                "2hr-",
                "3hr-",
                "4hr-",
                "5hr-",
                "6hr-",
                "7hr-",
                "8hr-",
                "9hr-",
                "10hr-",
                "11hr-",
                "12hr-",
                "13hr-",
                "14hr-",
            ],
            datasets: [{
                    data: [<?= $data1 ?>, <?= $data2 ?>, <?= $data3 ?>, <?= $data4 ?>, <?= $data5 ?>, <?= $data6 ?>, <?= $data7 ?>, <?= $data8 ?>, <?= $data9 ?>, <?= $data10 ?>, <?= $data11 ?>, <?= $data12 ?>, <?= $data13 ?>, <?= $data14 ?>, ],
                    label: "AQI (Past, hourly)",
                    borderColor: "rgb(62,149,205)",
                    backgroundColor: "rgb(62,149,205,0.1)",
                },
                // {
                //   data: [70, 90, 44, 60, 83, 90, 100],
                //   label: "Accepted",
                //   borderColor: "rgb(60,186,159)",
                //   backgroundColor: "rgb(60,186,159,0.1)",
                // },
                // {
                //   data: [10, 21, 60, 44, 17, 21, 17],
                //   label: "Pending",
                //   borderColor: "rgb(255,165,0)",
                //   backgroundColor: "rgb(255,165,0,0.1)",
                // },
                // {
                //   data: [6, 3, 2, 2, 7, 0, 16],
                //   label: "Rejected",
                //   borderColor: "rgb(196,88,80)",
                //   backgroundColor: "rgb(196,88,80,0.1)",
                // },
            ],
        },
    });
</script>