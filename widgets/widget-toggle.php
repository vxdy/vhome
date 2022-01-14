<?php

$json = file_get_contents(NODEIP . 'api/device');
$arrDevices = json_decode($json);

?>

<div class="widget">
    <div class="widget-name">Steckdosen</div>
    <div class="widget-door-sensor widget-toggle">
        <?php foreach ($arrDevices as $strDeviceName => $strValue): ?>
            <?php if ($strValue->type === "smartplug-tasmota"): ?>
                <div class="sensor-row">
                    <div class="sensor-name">
                        <i class="fa-duotone fa-cube"></i> <?= $strDeviceName ?>:
                    </div>
                    <div class="sensor-value">
                        <?php if ($strValue->state !== null): ?>
                            <label class="switch">
                                <input type="checkbox" class="toggle-device-btn"
                                       data-device-name="<?= $strDeviceName ?>" <?= ($strValue->state == "ON") ? "checked" : "" ?>>
                                <span class="slider round"></span>
                            </label>
                        <?php endif ?>

                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>