<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar JavaScript</title>
</head>

<body onclick="Tombol()">
    <p>
        nama Lengkap <input type="text" value="Field"> <button>Klik</button>
    </p>

    <p id="contoh">contoh</p>

    <script type="text/javascript">
        function Tombol() {
            var a = document.activeElement.tagName
            document.getElementById('contoh').innerHTML = a
        }
    </script>
</body>

</html>