<?php

namespace controller;

use JsonException;

class WidgetloaderController
{
    /**
     * @throws JsonException
     */
    public function verarbeiteDaten(): void
    {
        if (isset($_GET['widget'])) {
            $objAppConfig = json_decode(file_get_contents("config/default.json"), false, 512, JSON_THROW_ON_ERROR);
            $strPath = "widgets/".$_GET['widget'].".php";
            include_once($strPath);
        }
    }
}