<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <input type="text" class="middle" value="Aliv"><br>
    <input type="text" class="middle" value="Olivia"><br>
    <button type="button" name="button" onclick="jalanScript()">Jalan</button>

    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementsByClassName('middle'));
        }
    </script>
</body>

</html>