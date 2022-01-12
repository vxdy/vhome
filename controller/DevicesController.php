<?php

namespace controller;

use JsonException;

class DevicesController
{

    /**
     * @throws JsonException
     */
    public function verarbeiteDaten()
    {
        if(isset($_POST['device-name'])){
            $objDeviceList = json_decode(file_get_contents("python-api/conf/device.json"), true, 512, JSON_THROW_ON_ERROR);
            $objDeviceList[$_POST['device-name']]["name"] = $_POST['device-name'];
            $objDeviceList[$_POST['device-name']]["id"] = 2;
            $objDeviceList[$_POST['device-name']]["type"] = $_POST['device-type'];
            $objDeviceList[$_POST['device-name']]["state"] = null;

            $objFile = fopen('python-api/conf/device.json', 'w');
            fwrite($objFile, json_encode($objDeviceList));
            fclose($objFile);

        }

        $objDeviceList = json_decode(file_get_contents("python-api/conf/device.json"), false, 512, JSON_THROW_ON_ERROR);
        $objDeviceSettings = json_decode(file_get_contents("config/device-preset.json"), false, 512, JSON_THROW_ON_ERROR)->devices;
        $strFileName = "deviceView.php";
        include_once("view/layout.php");

    }
}