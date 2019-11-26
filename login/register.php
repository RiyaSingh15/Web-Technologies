<?php
session_start();
if (!isset($_SESSION["name"]))
    header('Location: index.php');
if (isset($_POST["submit"])) {
    $conn = mysqli_connect('localhost', "root", "pwdpwd", "test");
    $sql = "INSERT INTO userdetails VALUES('" . $_SESSION["name"] . "' ,'" . $_POST["fname"]
        . "' ,'" . $_POST["lname"] . "' ,'" . $_POST["mail"] . "' ,'" . $_POST["number"] . "')";
    $result = $conn->query($sql);
    echo $_POST["fname"] . " " . $_POST["lname"];
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <style>
        @font-face {
            font-family: krinkes;
            src: url("KrinkesDecorPERSONAL.ttf");
        }

        * {
            padding: 0.5%;
        }

        body {
            background-image: url("triangles-1430105_1280.png");
            background-size: cover;
            text-align: center;
            font-size: x-large;
        }

        .log {
            background-color: #FFEFD5;
        }

        h1 {
            margin: 2%;
            font-family: krinkes;
            font-size: 70px;
        }


        input {
            margin: 1%;
            width: 50%;
            outline: none;
            border: none;
            background: transparent;
            border-bottom: 2px solid black;
            font-family: font-family: "Times New Roman", Times, serif;
            font-size: 20px;
        }

        input[type="submit"] {
            margin: 5%;
            width: 50%;
            font-size: 25px;
            outline: none;
            border: 2px solid black;
            background: transparent;
        }

        input[type="submit"]:hover {
            margin: 5%;
            width: 50%;
            font-size: 25px;
            outline: none;
            border: 2px solid black;
            background-color: black;
            color: white;

        }
    </style>
</head>

<body>
    <div class="row">
        <div class="log">
            <form method="POST">
                <h1>New Registration</h1>
                <input type="text" name="fname" placeholder="First Name" required><br>
                <input type="text" name="lname" placeholder="Last Name" required><br>
                <input type="email" name="mail" placeholder="Email" required><br>
                <input type="text" name="number" placeholder="Contact Number" required><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>

</body>

</html>