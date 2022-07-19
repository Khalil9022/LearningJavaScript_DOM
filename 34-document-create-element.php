<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="Tombol()">klik</button> <br>

    <script type="text/javascript">
        function Tombol() {
            var a = document.createElement("button") // membuat element 
            a.innerHTML = "TOMBOL"
            document.body.appendChild(a) // jika di klik button maka akan dilakukan secara berulan ulang
        }
    </script>
</body>

</html>