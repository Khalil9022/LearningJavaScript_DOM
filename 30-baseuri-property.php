<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <p id="contoh">contoh</p>

    <button onclick="Tombol()">Klik</button>

    <script type="text/javascript">
        function Tombol() {
            var a = document.baseURI
            document.getElementById('contoh').innerHTML = a
        }
    </script>
</body>

</html>