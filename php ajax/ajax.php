<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Click button to load the numbers from 1100 to 1160</h1>
    <div id="counting">

    </div>
    <center>
        <form action="">
            <input type="submit" value="Get" onclick="myFunction(); return false;">
        </form>
    </center>
</body>
<script>
    function myFunction() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                document.getElementById('counting').innerHTML = xmlHttp.responseText;
            }
        }
        xmlHttp.open("post", "getmessages.php");
        xmlHttp.send();
    }
</script>

</html>