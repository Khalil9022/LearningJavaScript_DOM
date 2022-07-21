<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <p id="hostname"></p>
    <button onclick="lihatHostname()">Lihat Hostname</button>

    <script type="text/javascript">
        function lihatHostname() {
            var x = location.hostname
            document.getElementById('hostname').innerHTML = x // ini akan menghasilkan hanya hostnamenya saja, tanpa adanya tambahan port(jika ada)
        }
    </script>
</body>

</html>