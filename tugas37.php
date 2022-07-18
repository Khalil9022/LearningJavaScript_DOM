<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Belajar Javascript - NIOMIC</title>
</head>

<body>
    <button type="button" onclick="Tombol()" name="button">Jalankan</button>
    <br />
    <br />
    <hr />
    Atribut <b>getNamedItem()</b> :
    <p id="nama-item">contoh</p>
    <hr />
    Atribut <b>name()</b> :
    <p id="nama">contoh</p>
    <hr />
    Atribut <b>length()</b> :
    <p id="length">contoh</p>
    <hr />

    <script type="text/javascript">
        function Tombol() {
            var a = document.getElementsByTagName('button')[0]
            var b = a.attributes.getNamedItem('onclick').value
            var c = a.attributes[0].name
            var d = a.attributes.length

            document.getElementById('nama-item').innerHTML = b
            document.getElementById('nama').innerHTML = c
            document.getElementById('length').innerHTML = d
        }
    </script>
</body>

</html>