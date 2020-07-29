function showReverse(str) {
    if (str.length == 0) {
        document.getElementById("result").innerText = "";
        return;
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerText = this.responseText;
            }
        };
        xmlhttp.open("GET", "Reverse.php?q=" + str, true);
        xmlhttp.send();
    }
}