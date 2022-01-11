<?php

namespace controller;

class WidgetloaderController
{
    public function verarbeiteDaten(): void
    {
        if (isset($_GET['widget'])) {
            $strPath = "widgets/".$_GET['widget'].".php";
            include_once($strPath);
        }
    }
}