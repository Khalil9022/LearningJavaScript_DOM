<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="jawab()">Klik Saya</button>
    <p id="jawaban"></p>

    <script type="text/javascript">
        function jawab() {
            var nama = prompt('Masukan nama kamu', "Namamu")
            if (nama != null) {
                document.getElementById("jawaban").innerHTML = "Hello " + nama + " apa kabar ?"
            }
        }
    </script>
</body>

</html>