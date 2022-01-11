<?php
$arrSettings = ["LED" => "led", "Sicherheit" => "led", "3D Druck" => "http://octopi.local",
    "Elektonik" => "led", "Video" => "led", "Audio" => "led",
    "Sonstige" => "led", "Monitoring" => "led", "Einstellungen" => "led"]
?>

<div class="overview">
    <div class="row">
        <?php foreach ($arrSettings as $strSetting => $strPath): ?>
            <div class="col-12 col-md-4 align-self-center">
                <a href="<?= $strPath ?>">
                    <div class=" setting d-flex flex-column align-items-center justify-content-center">
                        <?= $strSetting ?>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>
