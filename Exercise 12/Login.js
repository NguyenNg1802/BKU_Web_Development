document.getElementById("login").addEventListener("click", () => {
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var param = "email=" + email.value + "&password=" + password.value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "Login.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // alert(this.responseText);
            // document.getElementById("form").reset();
            if (this.responseText == true) {
                window.location.href = "./Welcome.php";
            }
            else {
                alert(this.responseText);
            }

        }
    };
    xmlhttp.send(param);
})

