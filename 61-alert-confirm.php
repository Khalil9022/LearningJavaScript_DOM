<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="anda_yakin()">Klik Saya</button>
    <p id="hasil"></p>
    <script type="text/javascript">
        function anda_yakin() {
            var text
            var x = confirm("Anda Yakin?")
            if (x == true) {
                text = "kamu telah yakin"
            } else {
                text = " Kamu tidak yakin"
            }
            document.getElementById('hasil').innerHTML = text
        }
    </script>
</body>

</html>