<?php

use controller\IndexController;

require_once "vendor/autoload.php";

$strDir = __DIR__;

$strVerzeichnis = str_replace('\\', '/', $strDir);

$strDirName = dirname($strDir);

$strProjektOhneRoot = str_replace($_SERVER['DOCUMENT_ROOT'], '', $strVerzeichnis);
define("BASEPATH", $strProjektOhneRoot);

$strController = str_replace($strProjektOhneRoot, '', $_SERVER['REQUEST_URI']);

$strControllerName = explode("?", ltrim($strController, '/'))[0];

if($strControllerName === '')
{
    $strController = 'IndexController';
    define("ACTIVE", "index");
}
else
{
    $strController = ucfirst($strControllerName) . 'Controller';
    define("ACTIVE", $strControllerName);
}

$strControllerClass = 'controller\\' . $strController;

$strControllerClass = str_replace('/', '\\', $strControllerClass);

session_start();
if(class_exists($strControllerClass))
{

    $objController = new $strControllerClass();

}
else
{
    //Controller wurde nicht gefunden
    $objController = new IndexController();
    //$objController = new ErrorController();
}
$objController->verarbeiteDaten();