<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <style>
        body {
            text-align: center;
            background-color: #483D8B;
        }

        th {
            font-size: xx-large;
            color: #F0E68C;
        }

        td {
            font-size: large;
            color: #FF8C00;
        }
    </style>
</head>

<body>
    <?php
    $num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "<table>";
    echo "<th colspan='5'> Table of 26 </th>";
    for ($x = 1; $x < 11; $x++) {
        echo "<tr>";
        echo "<td>" . "26" . "</td>";
        echo "<td>" . "*" . "</td>";
        echo "<td>" . $x . "</td>";
        echo "<td>" . "=" . "</td>";
        echo "<td>" . 26 * $x . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<table>";
    echo "<th colspan='5'> Table of 19 </th>";
    foreach ($num as $value) {
        echo "<tr>";
        echo "<td>" . "19" . "</td>";
        echo "<td>" . "*" . "</td>";
        echo "<td>" . $value . "</td>";
        echo "<td>" . "=" . "</td>";
        echo "<td>" . 19 * $value . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<table>";
    echo "<th colspan='5'> Table of 29 </th>";
    $x = 0;
    while ($x < 11) {
        echo "<tr>";
        echo "<td>" . "29" . "</td>";
        echo "<td>" . "*" . "</td>";
        echo "<td>" . $x . "</td>";
        echo "<td>" . "=" . "</td>";
        echo "<td>" . 29 * $x . "</td>";
        echo "</tr>";
        $x++;
    }
    echo "</table>";
    ?>
</body>

</html>