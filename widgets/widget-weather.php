<?php
/**
 * @var object $objWeatherData
 */

$objAppConfig = json_decode(file_get_contents("config/default.json"), false, 512, JSON_THROW_ON_ERROR);
$strLocation = $objAppConfig->location;
$objWeatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$strLocation."&APPID=dd36f3ba9aa4ef8d61333064a127ed1e"), false, 512, JSON_THROW_ON_ERROR);

?>

<div class="widget" id="weather">
    <div class="widget-weather">
        <div class="widget-name">
            <span>
                Wetter
            </span>
        </div>
        <div class="widget-content">
            <div class="widget-weather">
                <div class="row">
                    <div class="col-2 text-center"><i class="fa-duotone fa-location-dot"></i> </div>
                    <div class="col-10"><?= $objWeatherData->name ?></div>
                </div>
                <div class="row">
                    <div class="col-2 text-center"><i class="fa-duotone fa-cloud-sun"></i> </div>
                    <div class="col-10"><?= ($objWeatherData->weather[0]->description) ?></div>
                </div>
                <div class="row">
                    <div class="col-2 text-center"><i class="fa-duotone fa-temperature-high"></i></div>
                    <div class="col-10"><?= round((-273.15 + (float) $objWeatherData->main->temp), 2) ?>°C</div>
                </div>    
            </div>
        </div>
    </div>
</div>
