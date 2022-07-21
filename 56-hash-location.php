<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <p id="hash"></p>
    <button onclick="hashLoaction()">Panggil Niomic 1</button>
    <button onclick="hashLoaction2()">Panggil Niomic 2</button>

    <script type="text/javascript">
        function hashLoaction() {
            location.hash = "niomic1"
            var x = "Sekarang anchornya " + location.hash
            document.getElementById('hash').innerHTML = x
        }

        function hashLoaction2() {
            location.hash = "niomic2"
            var x = "Sekarang anchornya " + location.hash
            document.getElementById('hash').innerHTML = x
        }
    </script>
</body>

</html>