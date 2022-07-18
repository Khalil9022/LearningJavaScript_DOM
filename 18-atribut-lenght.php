<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribut lenght</title>
</head>

<body>
    <button type="button" onclick="Tombol()">Klik</button>
    <p id="contoh">contoh</p>

    <script type="text/javascript">
        function Tombol() {
            var a = document.getElementsByTagName('button')[0] // sesuai atribut yang ada pada button 
            var b = a.attributes.length
            document.getElementById('contoh').innerHTML = b
        }
    </script>
</body>

</html>