<?php

namespace controller;

class WidgetloaderController
{
    public function verarbeiteDaten()
    {
        include_once("widgets/widget-door-sensor.php");
    }
}