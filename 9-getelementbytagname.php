<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <input type="text" class="middle" value="Alivia"><br>
    <button type="button" onclick="jalanScript()">jalan</button>
    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementsByTagName('input'));
        }
    </script>
</body>

</html>