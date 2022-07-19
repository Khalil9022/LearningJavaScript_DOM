<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <button type="button" onclick="Tombol()" name="button">klik</button>
    <br><br>
    <input type="button" value="SIAP">

    <script type="text/javascript">
        function Tombol() {
            var a = document.getElementsByTagName('input')[0]
            a.attributes.removeNamedItem('value')
            a.attributes.removeNamedItem('type')
        }
    </script>
</body>

</html>