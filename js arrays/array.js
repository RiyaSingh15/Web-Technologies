var arr = new Array()
function add() {
    var x = document.getElementById("element").value;
    arr.push(x);
    document.getElementById("element").value = "";
}
function check() {
    var ele = document.getElementById("item").value;
    if (arr.includes(ele)) {
        document.getElementById("para1").innerHTML = ele + " exists in array";
    }
    else {
        document.getElementById("para1").innerHTML = ele + " do not exist in array";
    }
}

function display() {
    document.getElementById("para2").innerHTML = "Elements in array : " + arr;
}