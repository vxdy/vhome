<?php
/**
 * @var Object $objDeviceList
 * @var Object $objDeviceSettings
 */
?>


<div class="device">
    <div class="w-100"></div>
    <!-- Explain Bar -->
    <div class="infobar">
        <div class="row">
            <div class="col-1"><span>ID</span></div>
            <div class="col-6"><span>Name</span></div>
            <div class="col-4"><span>Type</span></div>
            <div class="col-1"><a id="add-btn">+</a></div>
        </div>
    </div>
    <!-- End -->
    <?php foreach ($objDeviceList as $strDeviceName => $strDeviceInfo): ?>
        <div class="device-row">
            <div class="row">
                <div class="col-1"><span class="editable"><?= $strDeviceInfo->id ?></span></div>
                <div class="col-6"><span class="editable"><?= $strDeviceName ?></span></div>
                <div class="col-3"><span class="editable-dd"><?= $strDeviceInfo->type ?></span></div>
                <div class="col-1"><a href="">Edit</a></div>
                <div class="col-1"><a href="">-</a></div>
            </div>
        </div>
    <?php endforeach ?>
    <div class="save-btn">
        <button type="submit" class="">Save</button>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-new-device">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="create-new-device" tabindex="-1" aria-labelledby="create-new-device" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="devices" method="POST" class="device-form">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gerät hinzufügen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="row setting-row">
                            <div class=" col-3 input-label">
                                Name:
                            </div>
                            <div class="col-9">
                                <input type="text" name="device-name">
                            </div>
                        </div>
                        <div class="row setting-row">
                            <div class=" col-3 input-label">
                                Typ:
                            </div>
                            <div class="col-9">
                                <select name="device-type" id="">
                                    <?php foreach ($objDeviceSettings as $strDeviceType => $strDeviceLabel): ?>
                                        <option value="<?= $strDeviceType ?>"><?= $strDeviceLabel ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                    <button type="submit" class="btn btn-primary">Hinzufügen</button>
                </div>
            </form>
        </div>
    </div>
</div>
