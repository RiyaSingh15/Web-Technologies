function number() {
    var num = prompt("Enter the number of elements in array");
    var arr = new Array();
    var i = 0;
    while (i < num) {
        while (true) {
            var element = parseInt(prompt("Enter element " + (i + 1)));
            if (Number.isInteger(element)) {
                arr.push(element);
                break;
            }
            else {
                alert("Enter correct number");
                continue;
            }
        }
        i += 1;
    }
    document.getElementById("par1").innerHTML = "The elements you entered : " + arr;
    document.getElementById("par2").innerHTML = "The elements you entered sorted in ascending order : " + arr.sort()
}