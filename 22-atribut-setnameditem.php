<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
    <style media="screen">
        .contohcss {
            color: red;
        }
    </style>
</head>

<body>
    <button type="button" onclick="Tombol()" name="button">klik</button>
    <br>
    <h1>hello world</h1>

    <script type="text/javascript">
        function Tombol() {
            var a = document.getElementsByTagName('h1')[0]
            var b = document.createAttribute('class') //membuat atribut baru
            b.value = "contohcss"
            a.attributes.setNamedItem(b) //memasukkan atribut baru yang telah di buat pada variable b ke dalam H1
        }
    </script>
</body>

</html>