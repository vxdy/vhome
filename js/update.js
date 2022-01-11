$(document).ready(function(){
    updateDoor()
})

setInterval(function () {
    updateDoor()
}, 15000);


function updateDoor(){
    $(".load-widget-door-sensor").each(function (intIndex, objElement) {
        $(objElement).load("Widgetloader")
    })
}