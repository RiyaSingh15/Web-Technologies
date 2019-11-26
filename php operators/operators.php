<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operators</title>
</head>
<style>
    @font-face {
        font-family: krinkes;
        src: url(KrinkesDecorPERSONAL.ttf);
    }

    form {
        margin: 0.5%;
        background-color: #7B68EE;
        color: #BDB76B;
        padding: 2%;
        border: 10px solid #FFA500;
        border-radius: 20%;
        font-family: krinkes;
        font-size: 50px;
    }

    input {
        margin: 1%;
        font-size: 40px;
        width: 20%;
        padding: 1%;
        border: 5px solid #8B0000;
        border-radius: 20%;
        -webkit-transition: 1s;
        transition: 1s;
        outline: none;
    }

    input:focus {
        font-size: 40px;
        padding: 1%;
        width: 20%;
        border: 5px solid #2F4F4F;
        border-radius: 50px;
    }

    input[type="submit"] {
        margin: 1%;
        font-size: 40px;
        width: 10%;
        padding: 1%;
        border: 5px solid #FFF0F5;
        border-radius: 20%;
        -webkit-transition: 1s;
        transition: 1s;
        outline: none;
    }

    input[type="submit"]:hover {
        font-size: 40px;
        padding: 1%;
        width: 10%;
        border: 5px solid #A52A2A;
        border-radius: 50px;
        background: #000080;
        color: #008B8B;
    }
</style>

<body>
    <form method="post">
        <?php
        if (array_key_exists('add', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '+');
        else if (array_key_exists('subtract', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '-');
        else if (array_key_exists('multiply', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '*');
        else if (array_key_exists('divison', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '/');
        else if (array_key_exists('remainder', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '%');
        else if (array_key_exists('power', $_POST))
            $result = Binary($_POST["num1"], $_POST["num2"], '**');

        function Binary($a, $b, $c)
        {
            switch ($c) {
                case '+':
                    return ($a + $b);
                case '-':
                    return ($a - $b);
                case '/':
                    return ($a / $b);
                case '*':
                    return ($a * $b);
                case '%':
                    return ($a % $b);
                case '**':
                    return ($a ** $b);
                default:
                    return "No case defined";
            }
        }
        ?>
            <p>Binary Arithmetic Operators</p>
            <input type="number" name="num1" id="num1" required>
            <input type="number" name="num2" id="num2" required>
            <input type="number" name="disp1" id="disp1" value="<?php echo @$result; ?>" readonly><br>
            <input type="submit" name="add" value="+">
            <input type="submit" name="subtract" value="-">
            <input type="submit" name="multiply" value="*">
            <input type="submit" name="divison" value="/">
            <input type="submit" name="remainder" value="%">
            <input type="submit" name="power" value="**">
    </form>

    <form action="" method="post">
        <?php
        if (array_key_exists('increment', $_POST))
            $res = Unary($_POST["num3"], '++');
        else if (array_key_exists('decrement', $_POST))
            $res = Unary($_POST["num3"], '--');
        function Unary($a, $b)
        {
            switch ($b) {
                case '++':
                    return (++$a);
                case '--':
                    return (--$a);
                default:
                    return "No case defined";
            }
        }
        ?>
            <p>Urany Arithmetic Operators</p>
            <input type="number" name="num3" id="num3" required>
            <input type="number" name="disp2" id="disp2" value="<?php echo @$res; ?>" readonly>
            <input type="submit" name="increment" value="++">
            <input type="submit" name="decrement" value="--">

    </form>

</body>

</html>