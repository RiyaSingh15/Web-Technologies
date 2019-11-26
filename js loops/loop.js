function prime() {
  var i, flag = 0, item;
  item = Number(document.getElementById("number").value);

  for (i = 2; i <= item / 2; i++) {
    if (item % i == 0) {
      flag = 1;
      break;
    }
  }
  if (flag == 0) {
    document.getElementById("para1").innerHTML = item + " is prime.";
  }
  else {
    document.getElementById("para1").innerHTML = item + " is composite.";
  }
}

function factorial() {

  var i, no, fact;
  fact = 1;
  no = Number(document.getElementById("fact").value);
  for (i = 1; i <= no; i++) {
    fact = fact * i;
  }
  document.getElementById("para2").innerHTML = no + "! = " + fact;
}

function palindrome() {
  var a, no, b, temp = 0;

  no = Number(document.getElementById("palin").value);

  b = no;
  while (no > 0) {
    a = no % 10;
    no = parseInt(no / 10);
    temp = temp * 10 + a;
  }
  if (temp == b) {
    document.getElementById("para3").innerHTML = Number(document.getElementById("palin").value) + " is palindrome ";
  }
  else {
    document.getElementById("para3").innerHTML = Number(document.getElementById("palin").value) + " is not palindrome ";
  }
}

function fibonacci() {
  count = parseInt(document.getElementById("fibo").value);
  a = 0, b = 1, sum = 0;
  output = "<b>The first " + count + " elements in the Fibonacci series:</b> ";

  for (i = 0; i < count; i++) {
    output += a + "     ";
    sum = a + b;
    a = b;
    b = sum;
  }

  document.getElementById("para4").innerHTML = output;
}

function days() {
  var d = parseInt(document.getElementById("day").value);
  switch (d) {
    case 0:
      day = "Sunday";
      break;
    case 1:
      day = "Monday";
      break;
    case 2:
      day = "Tuesday";
      break;
    case 3:
      day = "Wednesday";
      break;
    case 4:
      day = "Thursday";
      break;
    case 5:
      day = "Friday";
      break;
    case 6:
      day = "Saturday";
      break;
    default:
      day = "Unknown Day";
  }
  document.getElementById("para5").innerHTML = day;
}