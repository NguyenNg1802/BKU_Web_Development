function showDatabase() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mydb").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Show.php", true);
    xmlhttp.send();
}

function insertDatabase() {
    var id = document.getElementById("insertid").value;
    var fname = document.getElementById("insertfname").value;
    var phone = document.getElementById("insertphone").value;
    var email = document.getElementById("insertemail").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mydb").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Insert.php?id=" + id + "&fname=" + fname + "&phone=" + phone + "&email=" + email, true);
    xmlhttp.send();
}

function updateDatabase() {
    var id = document.getElementById("updatetid").value;
    var fname = document.getElementById("updatefname").value;
    var phone = document.getElementById("updatephone").value;
    var email = document.getElementById("updateemail").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mydb").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Update.php?id=" + id + "&fname=" + fname + "&phone=" + phone + "&email=" + email, true);
    xmlhttp.send();
}

function retreiveDatabase() {
    var id = document.getElementById("retreiveid").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mydb").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Retreive.php?id=" + id, true);
    xmlhttp.send();
}

function deleteDatabase() {
    var id = document.getElementById("deleteid").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mydb").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "Delete.php?id=" + id, true);
    xmlhttp.send();
}