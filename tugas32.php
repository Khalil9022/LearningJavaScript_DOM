<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 32</title>
</head>

<body>
    <input type="text" id="namadepan" value="Nama Depan" /> <br />
    <input type="text" id="namabelakang" value="Nama Belakang" /> <br />
    <input type="text" id="hobi" value="Hobi" /> <br /><br />

    <button type="button" name="button" onclick="jalanScript()">Jalan</button>

    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementById('namadepan'));
            console.log(document.getElementById('namabelakang'));
            console.log(document.getElementById('hobi'));
        }
    </script>
</body>

</html>