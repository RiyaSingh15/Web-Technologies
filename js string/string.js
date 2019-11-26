function exponent() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.exp(val1);
}

function round() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.round(val1);
}

function floor() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.floor(val1);
}

function log() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.log(val1);
}

function absolute() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.abs(val1);
}

function sine() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.sin(val1);
}

function cose() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.cos(val1);
}

function tan() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.tan(val1);
}

function squareroot() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.sqrt(val1);
}

function ceil() {
    var val1 = document.getElementById("disp1").value;
    document.getElementById("disp2").value = Math.ceil(val1);
}

function len() {
    var val1 = document.getElementById("disp3").value;
    document.getElementById("disp4").value = val1.length;
}

function index() {
    var val1 = document.getElementById("disp3").value;
    var val2 = prompt("Enter Item to find index");
    document.getElementById("disp4").value = val1.indexOf(val2);
}

function sub() {
    var val1 = document.getElementById("disp3").value;
    var var2 = parseInt(prompt("Enter starting index"));
    var val3 = parseInt(prompt("Enter ending index"));
    document.getElementById("disp4").value = val1.substring(var2, val3);
}

function replac() {
    var val1 = document.getElementById("disp3").value;
    var var2 = prompt("Enter string to be replaced");
    var val3 = prompt("Enter new string");
    document.getElementById("disp4").value = val1.replace(var2, val3);
}