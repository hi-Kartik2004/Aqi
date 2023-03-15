<?php
session_start();

?>


<!DOCTYPE html><!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Wed Mar 15 2023 15:13:53 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="kartikeyas-fantastic-site.webflow.io" data-wf-page="63d595c403886e6c09c5cc4b" data-wf-site="63d595c403886e78e7c5cc4a">

<head>
    <meta charset="utf-8" />
    <title>Kartikeya&#x27;s Fantastic Site</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="https://uploads-ssl.webflow.com/63d595c403886e78e7c5cc4a/css/kartikeyas-fantastic-site.webflow.6224aa1ab.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]
            }
        });
    </script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <!-- <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> -->
    <!-- <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon" /> -->
</head>

<body class="body">
    <div class="f-banner">
        <div class="f-banner-container-between">
            <div class="f-banner-text-wrapper">
                <div class="f-banner-icon-small"><img src="https://uploads-ssl.webflow.com/63d595c403886e78e7c5cc4a/6411d50d1ce94f78fda70cd7_campaign.svg" loading="lazy" alt="" class="f-icon-small" /></div>
                <div class="f-paragraph-regular">This site uses Air Quality API by Weather bit, <span class="f-banner-text-span">25 requests </span>left for today!</div>
            </div>
            <div class="f-banner-block"><a href="#" class="f-banner-button w-button">GitHub Repository Link</a>
                <div class="f-banner-button-divider"></div>
                <div class="f-banner-block">
                    <div class="f-banner-icon">
                        <div class="f-icon-regular w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M7.9935 1.33331C4.3135 1.33331 1.3335 4.31998 1.3335 7.99998C1.3335 11.68 4.3135 14.6666 7.9935 14.6666C11.6802 14.6666 14.6668 11.68 14.6668 7.99998C14.6668 4.31998 11.6802 1.33331 7.9935 1.33331ZM12.6135 5.33331H10.6468C10.4335 4.49998 10.1268 3.69998 9.72683 2.95998C10.9535 3.37998 11.9735 4.23331 12.6135 5.33331ZM8.00016 2.69331C8.5535 3.49331 8.98683 4.37998 9.2735 5.33331H6.72683C7.0135 4.37998 7.44683 3.49331 8.00016 2.69331ZM2.84016 9.33331C2.7335 8.90665 2.66683 8.45998 2.66683 7.99998C2.66683 7.53998 2.7335 7.09331 2.84016 6.66665H5.0935C5.04016 7.10665 5.00016 7.54665 5.00016 7.99998C5.00016 8.45331 5.04016 8.89331 5.0935 9.33331H2.84016ZM3.38683 10.6666H5.3535C5.56683 11.5 5.8735 12.3 6.2735 13.04C5.04683 12.62 4.02683 11.7733 3.38683 10.6666ZM5.3535 5.33331H3.38683C4.02683 4.22665 5.04683 3.37998 6.2735 2.95998C5.8735 3.69998 5.56683 4.49998 5.3535 5.33331ZM8.00016 13.3066C7.44683 12.5066 7.0135 11.62 6.72683 10.6666H9.2735C8.98683 11.62 8.5535 12.5066 8.00016 13.3066ZM9.56016 9.33331H6.44016C6.38016 8.89331 6.3335 8.45331 6.3335 7.99998C6.3335 7.54665 6.38016 7.09998 6.44016 6.66665H9.56016C9.62016 7.09998 9.66683 7.54665 9.66683 7.99998C9.66683 8.45331 9.62016 8.89331 9.56016 9.33331ZM9.72683 13.04C10.1268 12.3 10.4335 11.5 10.6468 10.6666H12.6135C11.9735 11.7666 10.9535 12.62 9.72683 13.04ZM10.9068 9.33331C10.9602 8.89331 11.0002 8.45331 11.0002 7.99998C11.0002 7.54665 10.9602 7.10665 10.9068 6.66665H13.1602C13.2668 7.09331 13.3335 7.53998 13.3335 7.99998C13.3335 8.45998 13.2668 8.90665 13.1602 9.33331H10.9068Z" fill="currentColor" />
                            </svg></div>
                    </div>
                    <div><a href="https://rapidapi.com/weatherbit/api/air-quality" target="_blank" class="link-2">Rapid API</a></div>
                </div>
            </div>
        </div>
    </div>
    <div data-duration-in="300" data-duration-out="100" data-current="Tab 3" data-easing="ease" class="f-tab w-tabs">
        <div class="f-tab-menu w-tab-menu"><a data-w-tab="Tab 1" class="f-tab-button-line w-inline-block w-tab-link">
                <div>Current AQI</div>
            </a><a data-w-tab="Tab 2" class="f-tab-button-line w-inline-block w-tab-link">
                <div>Predict AQI</div>
            </a><a data-w-tab="Tab 3" class="f-tab-button-line w-inline-block w-tab-link w--current">
                <div>Past AQI </div>
            </a></div>
        <div class="w-tab-content">
            <div data-w-tab="Tab 1" class="f-tab-pane w-tab-pane">
                <div class="f-section-large-2">
                    <div class="f-container-regular">
                        <div class="w-layout-grid f-contact-grid">
                            <div>
                                <div class="f-margin-bottom-48">
                                    <div class="f-margin-bottom-08">
                                        <div class="f-heading-detail-small">Current AQi</div>
                                    </div>
                                    <div class="f-margin-bottom-16">
                                        <h1 class="f-h3-heading-2">Logitude &amp; Latitude</h1>
                                    </div>
                                    <p class="f-paragraph-large-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque arcu sed felis</p>
                                </div>
                                <div class="">
                                    <form id="" action="action.php" method="post" name="" data-name="Contact Form" class="f-contact-form">
                                        <div class="f-margin-bottom-16"><label for="Contact-Name-Field-02" class="f-field-label">Longitude</label><input type="text" name="long" required class="f-field-input w-input" maxlength="256" data-name="Contact Name Field 02" placeholder="" id="" /></div>
                                        <div class="f-margin-bottom-16"><label for="Contact-Email-Field-02" class="f-field-label">Latitude</label><input required type="text" name="lati" class="f-field-input w-input" maxlength="256" data-name="Contact Email Field 02" placeholder="" id="" required /></div><input name="current_aqi_btn" type="submit" value="Submit" data-wait="Please wait..." class="f-button-neutral w-button" />
                                    </form>
                                    <div class="f-success-message w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="f-error-message w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </div>
                            <div id="w-node-b272af7b-7b1d-0338-73c6-9c6b9c51e9dd-09c5cc4b" class="f-contact-image-wrapper">
                                <div class="f-section-large-3">
                                    <div class="f-container-regular">
                                        <div class="w-layout-grid f-grid-two-column">
                                            <div id="w-node-eced649b-1019-6299-d976-33c1d0ab9584-09c5cc4b" class="f-pricing-card-outline">
                                                <div class="f-pricing-card-title-wrapper">
                                                    <div class="div-block">
                                                        <div class="f-pricing-plan-type-wrapper">
                                                            <h5 class="f-h5-heading">#<?php if (isset($_SESSION['c_response'])) {
                                                                                            $r_data = $_SESSION['c_response'];
                                                                                            $city = $r_data['data'][0]['aqi'];
                                                                                            echo $city;
                                                                                        } ?></h5>
                                                            <div class="f-badge-filled">
                                                                <div>Current AQI</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="f-pricing-price-text"><?php if (isset($_SESSION['c_response'])) {
                                                                                            $r_data = $_SESSION['c_response'];
                                                                                            $city = $r_data['city_name'];
                                                                                            echo $city;
                                                                                        } ?><span class="f-pricing-month-span">/<?php if (isset($_SESSION['c_response'])) {
                                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                                    $city = $r_data['country_code'];
                                                                                                                                    echo $city;
                                                                                                                                } ?></span></div>
                                                </div>
                                                <div class="f-pricing-divider"></div>
                                                <div class="w-layout-grid f-pricing-feature-grid">
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab9597-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Co Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['co'];
                                                                                                                    echo $city;
                                                                                                                } ?></div>
                                                    </div>
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab959b-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 25 Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['pm25'];
                                                                                                                    echo $city;
                                                                                                                } ?> </div>
                                                    </div>
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab959f-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">No2 Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['no2'];
                                                                                                                    echo $city;
                                                                                                                } ?> </div>
                                                    </div>
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab95a3-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 10 Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['pm10'];
                                                                                                                    echo $city;
                                                                                                                } ?></div>
                                                    </div>
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab95a7-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">O3 Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['o3'];
                                                                                                                    echo $city;
                                                                                                                } ?></div>
                                                    </div>
                                                    <div id="w-node-eced649b-1019-6299-d976-33c1d0ab95ab-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">So2 Rating : <?php if (isset($_SESSION['c_response'])) {
                                                                                                                    $r_data = $_SESSION['c_response'];
                                                                                                                    $city = $r_data['data'][0]['so2'];
                                                                                                                    echo $city;
                                                                                                                } ?></div>
                                                    </div>
                                                </div>
                                                <div class="f-line-large"><a href="api_response.php" class="link-3">Know more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 2" class="f-tab-pane w-tab-pane">
                <div class="f-section-large-2">
                    <div class="f-container-regular">
                        <div class="w-layout-grid f-contact-grid">
                            <div>
                                <div class="f-margin-bottom-48">
                                    <div class="f-margin-bottom-08">
                                        <div class="f-heading-detail-small">Current AQi</div>
                                    </div>
                                    <div class="f-margin-bottom-16">
                                        <h1 class="f-h3-heading-2">Logitude &amp; Latitude</h1>
                                    </div>
                                    <p class="f-paragraph-large-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque arcu sed felis</p>
                                </div>
                                <div class="">
                                    <form id="" action="action.php" method="post" name="" data-name="Contact Form" class="f-contact-form">
                                        <div class="f-margin-bottom-16"><label for="Contact-Name-Field-02" class="f-field-label">Longitude</label><input type="text" name="long" required class="f-field-input w-input" maxlength="256" data-name="Contact Name Field 02" placeholder="" id="" /></div>
                                        <div class="f-margin-bottom-16"><label for="Contact-Email-Field-02" class="f-field-label">Latitude</label><input required type="text" name="lati" class="f-field-input w-input" maxlength="256" data-name="Contact Email Field 02" placeholder="" id="" required /></div><input name="predict_aqi_btn" type="submit" value="Submit" data-wait="Please wait..." class="f-button-neutral w-button" />
                                    </form>
                                    <div class="f-success-message w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="f-error-message w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </div>
                            <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2302-09c5cc4b" class="f-contact-image-wrapper">
                                <div class="f-section-large-3">
                                    <div class="f-container-regular">
                                        <div class="w-layout-grid f-grid-two-column">
                                            <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2306-09c5cc4b" class="f-pricing-card-outline">
                                                <div class="f-pricing-card-title-wrapper">
                                                    <div class="div-block">
                                                        <div class="f-pricing-plan-type-wrapper">
                                                            <h5 class="f-h5-heading">#97.2</h5>
                                                            <div class="f-badge-filled">
                                                                <div>Current AQI</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="f-pricing-price-text">DELHI<span class="f-pricing-month-span">/Place</span></div>
                                                </div>
                                                <div class="f-pricing-divider"></div>
                                                <div class="w-layout-grid f-pricing-feature-grid">
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2315-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Co Rating : </div>
                                                    </div>
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2319-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 25 Rating : </div>
                                                    </div>
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e231d-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">No2 Rating : </div>
                                                    </div>
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2321-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 10 Rating :</div>
                                                    </div>
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2325-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">O3 Rating :</div>
                                                    </div>
                                                    <div id="w-node-_9612dce5-a985-78c0-2735-ea6cf37e2329-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">So2 Rating :</div>
                                                    </div>
                                                </div>
                                                <div class="f-line-large"><a href="#" class="link-3">Know more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 3" class="f-tab-pane w-tab-pane w--tab">
                <div class="f-section-large-2">
                    <div class="f-container-regular">
                        <div class="w-layout-grid f-contact-grid">
                            <div>
                                <div class="f-margin-bottom-48">
                                    <div class="f-margin-bottom-08">
                                        <div class="f-heading-detail-small">Current AQi</div>
                                    </div>
                                    <div class="f-margin-bottom-16">
                                        <h1 class="f-h3-heading-2">Logitude &amp; Latitude</h1>
                                    </div>
                                    <p class="f-paragraph-large-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque arcu sed felis</p>
                                </div>
                                <div class="">
                                    <form id="" action="action.php" method="post" name="" data-name="Contact Form" class="f-contact-form">
                                        <div class="f-margin-bottom-16"><label for="Contact-Name-Field-02" class="f-field-label">Longitude</label><input type="text" name="long" required class="f-field-input w-input" maxlength="256" data-name="Contact Name Field 02" placeholder="" id="" /></div>
                                        <div class="f-margin-bottom-16"><label for="Contact-Email-Field-02" class="f-field-label">Latitude</label><input required type="text" name="lati" class="f-field-input w-input" maxlength="256" data-name="Contact Email Field 02" placeholder="" id="" required /></div><input name="past_aqi_btn" type="submit" value="Submit" data-wait="Please wait..." class="f-button-neutral w-button" />
                                    </form>
                                    <div class="f-success-message w-form-done">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                    <div class="f-error-message w-form-fail">
                                        <div>Oops! Something went wrong while submitting the form.</div>
                                    </div>
                                </div>
                            </div>
                            <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d52042d-09c5cc4b" class="f-contact-image-wrapper">
                                <div class="f-section-large-3">
                                    <div class="f-container-regular">
                                        <div class="w-layout-grid f-grid-two-column">
                                            <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520431-09c5cc4b" class="f-pricing-card-outline">
                                                <div class="f-pricing-card-title-wrapper">
                                                    <div class="div-block">
                                                        <div class="f-pricing-plan-type-wrapper">
                                                            <h5 class="f-h5-heading">#97.2</h5>
                                                            <div class="f-badge-filled">
                                                                <div>Current AQI</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="f-pricing-price-text">DELHI<span class="f-pricing-month-span">/Place</span></div>
                                                </div>
                                                <div class="f-pricing-divider"></div>
                                                <div class="w-layout-grid f-pricing-feature-grid">
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520440-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Co Rating : </div>
                                                    </div>
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520444-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 25 Rating : </div>
                                                    </div>
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520448-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">No2 Rating : </div>
                                                    </div>
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d52044c-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">Pm 10 Rating :</div>
                                                    </div>
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520450-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">O3 Rating :</div>
                                                    </div>
                                                    <div id="w-node-_69800d61-8e35-c874-8a14-5d1f7d520454-09c5cc4b" class="f-pricing-feature-item">
                                                        <div class="f-icon-regular w-embed"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="2" width="20" height="20" rx="10" fill="#F3F5FB" />
                                                                <path d="M10.9003 14.118L17.3999 8L18.4004 8.94102L10.9003 16L6.40039 11.7647L7.40021 10.8237L10.9003 14.118Z" fill="#160042" />
                                                            </svg></div>
                                                        <div class="f-paragraph-small card-text">So2 Rating :</div>
                                                    </div>
                                                </div>
                                                <div class="f-line-large"><a href="#" class="link-3">Know more</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63d595c403886e78e7c5cc4a" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/63d595c403886e78e7c5cc4a/js/webflow.513cf0e9b.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

    <script>
        $(document).ready(function() {
            $(".w-webflow-badge").removeClass("w-webflow-badge").empty();
        });
    </script>
</body>

</html>