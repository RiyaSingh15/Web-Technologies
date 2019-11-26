<?php
session_start();
if (!isset($_SESSION["name"]))
    header('Location: index.php');
if (isset($_POST["logout"]))
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
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

        h1 {
            margin: 2%;
            font-family: krinkes;
            font-size: 70px;
        }

        button {
            margin: 5%;
            width: 50%;
            font-size: 25px;
            outline: none;
            border: 2px solid black;
            background: transparent;
        }

        button:hover {
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
    <h1>Hello there!</h1>
    <button name="logout" type="submit">Logout</button>
</body>

</html>