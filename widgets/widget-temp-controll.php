<?php

?>

<div class="widget">
    <div class="widget-name">Temperatur <i class="fa-duotone fa-temperature-empty"></i></div>
    <div class="widget-temp-controll">
        <div data-preset="fan"
             class="ldBar label-center w-100"
             data-value="10"
             data-max="50"
        ></div>
    </div>
    <div class="widget-temp-input">
        <div class="row">
            <div class="col-12">
                <label for="temp-input"></label>
                <input id="temp-input" type="number" min="0" max="50">
                <button><i class="fa-duotone fa-check"></i></button>
            </div>
        </div>
    </div>
</div>
<script src="js/widgets/half-circle-progress.js"></script>