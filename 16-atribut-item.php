<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button type="button" onclick="Tombol()" name="button">Klik</button>
    <button type="button" onclick="Tombol2()" name="button">Klik 2</button>
    <p id="contoh">contoh</p>

    <script type="text/javascript">
        function Tombol() {
            var a = document.getElementsByTagName("button")[0]
            var b = a.attributes.item(0).name
            document.getElementById('contoh').innerHTML = b
        }

        function Tombol2() {
            document.getElementById('contoh').innerHTML = "Berhasil dirubah"
        }
    </script>
</body>

</html>