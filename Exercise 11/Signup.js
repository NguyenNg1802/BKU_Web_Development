email_valid = false;
password_valid = false;

function validatePassword(password){
    var pass = document.getElementById("validatePassword");
    if (password != document.getElementById("password").value) {
        pass.innerText = "(*) Passwords don't match.";
        pass.setAttribute("class", "error");
        password_valid = false;
    }
    else {
        pass.innerText = "(*) Passwords match.";
        pass.setAttribute("class", "validate");
        password_valid = true;
    }
}

function validateEmail(value) {
    var xmlhttp = new XMLHttpRequest();
    var email = document.getElementById("validateEmail");
    xmlhttp.open("POST", "EmailCheck.php", true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("error").innerText = this.responseText;
            if (this.responseText == "True") {
                email.innerText = "(*) Email available.";
                email.setAttribute("class", "validate");
                email_valid = true;
            }
            else if (this.responseText == "False") {
                email.innerText = "(*) Email already exists.";
                email.setAttribute("class", "error");
                email_valid = false;
            }
        }
    };
    xmlhttp.send("email=" + value);
}


document.getElementById("signup").addEventListener("click", () => {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var confirm = document.getElementById("repassword");
    if (password_valid && email_valid) {
        var param = "name=" + name.value + "&email=" + email.value + "&password=" + password.value + "&confirm=" + confirm.value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "Signup.php", true);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("You have sucessfully signed up");
                document.getElementById("form").reset();
                document.getElementById("validatePassword").innerText = "";
                document.getElementById("validateEmail").innerText = "";
            }
        };
        xmlhttp.send(param);
    }
})