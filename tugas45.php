<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 45</title>
</head>

<body>
    <p id="lokasi"></p>
    <button onclick="cekHref()">cek href</button>

    <script type="text/javascript">
        function cekHref() {
            var x = location.href
            document.getElementById('lokasi').innerHTML = x
        }
    </script>

</body>

</html>