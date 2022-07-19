<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="Tombol()">Klik</button> <br>
    <p id="contoh">contoh</p>

    <script type="text/javascript">
        function Tombol() {
            var a = document.documentURI
            document.getElementById('contoh').innerHTML = a
        }
    </script>
</body>

</html>