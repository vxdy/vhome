$(document).ready(function(){
    updateDoor()
})

setInterval(function () {
    updateDoor()
}, 5000);


function updateDoor(){
    $(".load-widget-door-sensor").each(function (intIndex, objElement) {
        $(objElement).load("Widgetloader?widget=widget-door-sensor")
    })
}