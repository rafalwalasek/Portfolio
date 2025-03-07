function odliczanie() {
    const time = new Date();

    let day = time.getDate();
    if(day < 10) day = "0" + day;
    
    let month = time.getMonth() + 1;
    if(month < 10) month = "0" + month;

    const year = time.getFullYear();

    let hour = time.getHours();
    if(hour < 10) hour = "0" + hour;

    let minute = time.getMinutes();
    if(minute < 10) minute = "0" + minute;

    let second = time.getSeconds();
    if(second < 10) second = "0" + second;

    document.getElementById("zegar").innerHTML = day + "/" + month + "/" + year + "<br> --------------- <br>" + hour + ":" + minute + ":" + second;
}

setInterval(odliczanie,1000);

odliczanie();