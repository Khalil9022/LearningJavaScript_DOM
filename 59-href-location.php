<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <p id="href"></p>
    <button onclick="lihatHref()">Lihat Href</button>

    <script type="text/javascript">
        function lihatHref() {
            var x = location.href
            document.getElementById('href').innerHTML = x
        }
    </script>
</body>

</html>