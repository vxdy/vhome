<?php
/**
 * @var string $strFileName
 */


?>

<html lang="">
<head>
    <link rel="icon" type="image/x-icon" href="img/Logo/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vHome | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="css/overview.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/device.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/weather.css">
    <link rel="stylesheet" type="text/css" href="css/loading-bar.css"/>
    <script type="text/javascript" src="js/loading-bar.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 align-self-center">
            <div class="row headline">
                <div class="col-1 d-none d-md-flex align-items-center justify-content-center">
                    <i class="fa-light fa-scrubber"></i>
                </div>
                <div class="col-3 d-none d-md-flex align-items-center justify-content-center">
                    <span class="date">01.01.2020</span>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                    <div class="pagetitel"><a href="<?= BASEPATH ?>">vHome</a></div>
                </div>
                <div class="col-3 d-none d-md-flex align-items-center justify-content-center">
                    <span class="clock">00:00:00</span>
                </div>
                <div class="col-1 d-none d-md-flex align-items-center justify-content-center">
                    <i class="fa-light fa-bell"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-2">
            <div class="navbar">
                <div class="clickable-icon">
                    <a href=".">
                        <div class="icon-box <?= (ACTIVE === "index") ? "active" : "" ?>"><i
                                    class="fa-light fa-grid-horizontal"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box" <?= (ACTIVE === "") ? "active" : "" ?>><i
                                    class="fa-light fa-bolt-lightning"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box <?= (ACTIVE === "") ? "active" : "" ?>"><i
                                    class="fa-light fa-lightbulb"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box <?= (ACTIVE === "") ? "active" : "" ?>"><i
                                    class="fa-light fa-camera-cctv"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box <?= (ACTIVE === "") ? "active" : "" ?>"><i class="fa-light fa-cube"></i>
                        </div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="weather">
                        <div class="icon-box <?= (ACTIVE === "weather") ? "active" : "" ?>"><i
                                    class="fa-light fa-cloud-bolt-sun"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box <?= (ACTIVE === "") ? "active" : "" ?>"><i
                                    class="fa-light fa-volume-high"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="">
                        <div class="icon-box <?= (ACTIVE === "") ? "active" : "" ?>">
                            <i class="fa-light fa-chart-candlestick"></i></div>
                    </a>
                </div>
                <div class="clickable-icon">
                    <a href="devices">
                        <div class="icon-box <?= (ACTIVE === "devices") ? "active" : "" ?>">
                            <i class="fa-light fa-gear"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-11 col-sm-10">
            <?php include_once("view/" . $strFileName) ?>
        </div>
    </div>
</div>
<script src="js/utils.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="js/devices.js"></script>
</body>
</html>

