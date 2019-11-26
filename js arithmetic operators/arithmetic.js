function add() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) + parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function sub() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) - parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function divide() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) / parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function mul() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) * parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function rem() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) % parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function val() {
    var number1 = document.getElementById("disp1").value;
    var number2 = document.getElementById("disp2").value;

    var number3 = parseFloat(number1) ** parseFloat(number2);
    document.getElementById("disp3").value = number3;
}

function incr() {
    var number1 = document.getElementById("disp4").value;
    var number3 = parseFloat(number1) + 1;
    document.getElementById("disp5").value = number3;
}

function decr() {
    var number1 = document.getElementById("disp4").value;
    var number3 = parseFloat(number1) - 1;
    document.getElementById("disp5").value = number3;
}

function chg() {
    var number1 = document.getElementById("disp4").value;
    var number3 = -parseFloat(number1);
    document.getElementById("disp5").value = number3;
}