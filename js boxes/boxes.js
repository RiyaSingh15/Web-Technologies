function alertbox() {
  alert("Fill out the form properly")
}

function dialogbox() {
  var regex = /^[a-zA-Z]+$/;
  var name = prompt("Please Enter Your First Name");
  if (regex.test(name) == false) {
    alert("Please enter a valid first name");
    dialogbox();
    return false;
  }
  if (name == " ") {
    alert("Please enter a valid first name");
    dialogbox();
    return false;
  }
  document.getElementById("name").value = name;
  return true;
}

function dialogbo() {
  var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
  var email = prompt("Please Enter Your Email");
  if (regex.test(email)) {
    document.getElementById("email").value = email;
    return true;
  }
  else {
    alert("Please enter a valid email");
    dialogbo();
    return false;
  }
}

function confirmbox() {
  if (confirm("Do you want to submit your data ?")) {
    document.getElementById("result").innerHTML = "Data Submitted Successfully";
  } else {
    document.getElementById("result").innerHTML = "Data Submission Canceled";
  }
}