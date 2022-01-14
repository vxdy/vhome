$(document).ready(function(){
    updatePlug()
    updateDoor()
}).next(function () {
        console.log(123)
}
)

setInterval(function () {
    updateDoor()
}, 5000);



function assignToggleBtn(){
    $(".toggle-device-btn").each(function (intIndex, objElement) {
        console.log("init")
        $(objElement).change(function () {
            let data = $(objElement).data("deviceName")
            $.ajax({
                url: "http://46.87.171.138:8888/api/powerplug?toggle=1&devicename=" + data,
                type: "GET",
                success: function(result) {
                    $(objElement).html(JSON.parse(result)['POWER'])
                },
                error: function(error) {

                }

            })
        })
    })
}

function updateDoor(){
    $(".load-widget-door-sensor").each(function (intIndex, objElement) {
        $(objElement).load("Widgetloader?widget=widget-door-sensor")
    })
}

function updatePlug(){
    $(".load-widget-toggle").each(function (intIndex, objElement) {
        $(objElement).load("Widgetloader?widget=widget-toggle")
    })
    setTimeout(function (){
        assignToggleBtn()
    }, 2000)

}

