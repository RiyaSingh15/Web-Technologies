<?php
session_start();
if (isset($_POST["login"])) {
    $conn = mysqli_connect('localhost', "root", "pwdpwd", "test");
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        while ($row = $result->fetch_assoc())
            if ($_POST["username"] == $row["username"] && password_verify($_POST["password"], $row["password"])) {
                echo "welcome";
                $_SESSION["name"] = $_POST["username"];
                header('Location: success.php');
            }
    mysqli_close($conn);
} else if (isset($_POST["signUp"])) {
    $conn = mysqli_connect('localhost', "root", "pwdpwd", "test");
    $sql = "INSERT INTO users VALUES('" . $_POST["susername"] . "' ,'" . password_hash($_POST["spassword"], PASSWORD_BCRYPT) . "')";
    $result = $conn->query($sql);
    mysqli_close($conn);
    $_SESSION["name"] = $_POST["susername"];
    header('Location: register.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

        .sin {
            background-color: #FFEFD5;
        }

        h1 {
            margin: 5%;
            font-family: krinkes;
            font-size: 70px;
        }

        .jumbotron {
            background: transparent;
        }

        input {
            margin: 5%;
            width: 70%;
            outline: none;
            border: none;
            background: transparent;
            border-bottom: 2px solid black;
            font-family: font-family: "Times New Roman", Times, serif;
            ;
        }

        input[type="submit"] {
            margin: 5%;
            width: 70%;
            outline: none;
            border: 2px solid black;
            background: transparent;
        }

        input[type="submit"]:hover {
            margin: 5%;
            width: 70%;
            outline: none;
            border: 2px solid black;
            background-color: black;
            color: white;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container"></div>
        </div>
        <div class="row">
            <div class="col-lg-5 log">
                <h1>Login</h1>
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" value="Login" name="login"><br>
                </form>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 sin">
                <h1>Sign Up</h1>
                <form action="" method="POST">
                    <input type="text" name="susername" placeholder="Username" required><br>
                    <input type="password" name="spassword" placeholder="Password" required><br>
                    <input type="submit" value="Sign Up" name="signUp"><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>