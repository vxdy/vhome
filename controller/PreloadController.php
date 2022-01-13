<?php

namespace controller;

class PreloadController
{
    public function verarbeiteDaten()
    {
        if(isset($_GET['page'])){
            include_once("view/". $_GET['page'] .".php");
        }
    }
}