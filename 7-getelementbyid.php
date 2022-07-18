<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTML</title>
</head>

<body>
    <input type="text" name="" id="namadepan" value="Alivia">
    <br>
    <input type="text" name="" id="namabelakang" value="Putri">
    <br>
    <button type="button" name="button" onclick="jalanScript()">jalan</button>

    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementById('namadepan'));
            console.log(document.getElementById('namabelakang'));
        }
    </script>
</body>

</html>