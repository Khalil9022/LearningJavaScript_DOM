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
    <b>Base URI</b> Property : <br />
    <p id="soal1">contoh</p>
    <hr />
    <b>Body</b> Property : <br />
    <p id="soal2">contoh</p>
    <hr />
    <b>Create</b> Element : <br /><br />

    <script type="text/javascript">
        function Tombol() {
            var soal1 = document.baseURI
            document.getElementById('soal1').innerHTML = soal1

            var soal2 = document.body.style.backgroundColor = 'green'
            document.getElementById('soal2').innerHTML = "green"

            var soal3 = document.createElement("input") // membuat element 
            document.body.appendChild(soal3)
        }
    </script>
</body>

</html>