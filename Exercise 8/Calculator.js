function checkOperator() {
    var plus = document.getElementById("plus");
    var minus = document.getElementById("minus");
    var multiply = document.getElementById("multiply");
    var division = document.getElementById("division");

    if (plus.checked == true ) {
        return {
            name: plus,
            operator: '+'
        };
    }
    else if (minus.checked == true) {
        return {
            name: minus,
            operator: '-'
        };
    }
    else if (multiply.checked == true ) {
        return {
            name: multiply,
            operator: '*'
        };
    }
    else if (division.checked == true) {
        return {
            name: division,
            operator: '/'
        };
    }
}
function calculate() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var op = checkOperator();
    var result = 0;
    if (op.operator == '+') {
        result = parseInt(a) + parseInt(b);
    }
    else if (op.operator == '-') {
        result = parseInt(a) - parseInt(b);
    }
    else if (op.operator == '*') {
        result = parseInt(a) * parseInt(b);
    }
    else if (op.operator == '/') {
        if (b == '0') {
            document.getElementById("result").innerText = "Error! b is equal to 0";
            return;
        }
        if (b != '0') {
            result = parseInt(a) / parseInt(b);
        }
    }
    document.getElementById("result").innerText = a + op.operator + b + '=' +result;
}

function r() {
    document.getElementById("a").value = "";
    document.getElementById("b").value = "";
    document.getElementById("result").innerHTML = "";
}