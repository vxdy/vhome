<?php

$json = file_get_contents(NODEIP.'api/device');
$arrDevices = json_decode($json);

?>

<div class="widget">
    <div class="widget-name">Türsensoren</div>
    <div class="widget-door-sensor">
        <?php foreach ($arrDevices as $strDeviceName => $strValue): ?>
            <?php if ($strValue->type === "contact-sensor"): ?>
                <div class="sensor-row">
                    <div class="sensor-name">
                        <i class="fa-duotone fa-cube"></i> <?= $strDeviceName ?>:
                    </div>
                    <div class="sensor-value">
                        <?php if ($strValue->state !== null): ?>
                            <?php if (time() - (int)$strValue->update < 60): ?>
                                <?= $strValue->state ?>
                            <?php else: ?>
                                No Con.
                            <?php endif ?>
                        <?php else: ?>
                            No Con.
                        <?php endif ?>

                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>