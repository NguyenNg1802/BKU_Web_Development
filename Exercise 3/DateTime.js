var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
setInterval(() => {
    var d = new Date();
    document.getElementById('day').innerHTML = days[d.getDay() - 2];
    document.getElementById('hour').innerHTML = d.getHours();
    document.getElementById('ampm').innerHTML = d.getHours() >= 12 ? 'am':'pm';
    document.getElementById('minutes').innerHTML = d.getMinutes();
    document.getElementById('second').innerHTML = d.getSeconds();
}, 1000)