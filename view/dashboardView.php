<?php
?>

<div class="dashboard">
    <div class="row">
        <div class="topnav">
            <div class="col-12">
                <div class="room-bar">
                    <div class="room-name active"><a href="">Übersicht</a></div>
                    <div class="room-name"><a href="">Wohnzimmer</a></div>
                    <div class="room-name"><a href="">Badezimmer</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
            <!-- Col1 -->
            <div class="row">
                <div class="col-12">
                    <?php include "widgets/widget-mode.php" ?>
                    <?php include "widgets/widget-light-switch.php" ?>
                    <?php include "widgets/widget-half-circle-progress.php" ?>

                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
            <!-- Col1 -->
            <div class="row">
                <div class="col-12">
                    <?php include "widgets/widget-temp-controll.php" ?>
                    <?php include "widgets/widget-air-quality.php" ?>
                    <?php include "widgets/widget-status.php" ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
            <!-- Col1 -->
            <div class="row">
                <div class="col-12">
                    <?php include "widgets/widget-weather.php" ?>
                    <?php include "widgets/widget-cam.php" ?>
                    <?php include "widgets/widget-lock.php" ?>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 ">
            <!-- Col1 -->
            <div class="row">
                <div class="col-12">
                    <?php //include "widgets/widget-door-sensor.php" ?>
                    <?php //include "widgets/widget-toggle.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/update.js"></script>