<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 46</title>
</head>

<body>
    <p>click untuk merubah warna</p>
    <button onclick="myFunction()">Ubah Warna</button>
    <script type="text/javascript">
        function myFunction() {
            var nama = prompt('Masukkan Warna yang kamu inginkan (english)')
            if (nama != null) {
                document.body.style.background = nama
            }
        }
    </script>
</body>

</html>