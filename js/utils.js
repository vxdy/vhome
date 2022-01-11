//Set Time Counter
setInterval(function () {
    let strCurrentDate = new Date
    let intHours = ("00" + (strCurrentDate.getHours().toString())).slice(-2)
    let intMinutes = ("00" + (strCurrentDate.getMinutes().toString())).slice(-2)
    let intSeconds = ("00" + (strCurrentDate.getSeconds().toString())).slice(-2)
    $('.clock').text(intHours + ":" + intMinutes + ":" + intSeconds);
}, 100);

//Set Date Counter
setInterval(function () {
    let strCurrentDate = new Date
    let strDay = ("00" + (strCurrentDate.getDate().toString())).slice(-2)
    let strMonths = ("00" + ((strCurrentDate.getMonth()+1).toString())).slice(-2)
    let strYears = 20+("00" + (strCurrentDate.getFullYear().toString())).slice(-2)

    $('.date').text(strDay + "." + strMonths + "." + strYears);
}, 100);
