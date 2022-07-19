<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <a href="#" name="sumatera">Pulau Sumatera</a> <br>
    <a href="#" name="jawa">Pulau Jawa</a> <br>
    <a href="#" name="kalimantan">Pulau papua</a> <br>
    <a href="#" name="papua">Pulau papua</a> <br>

    <p id="contoh">contoh</p>

    <button onclick="Tombol()" type="button" name="button">Klik</button>

    <script type="text/javascript">
        function Tombol() {
            var a = document.anchors.length //menghitung a (anchor) element yg ada, penghitungan diliat dari atribut name pada anchor
            document.getElementById('contoh').innerHTML = a
        }
    </script>
</body>

</html>