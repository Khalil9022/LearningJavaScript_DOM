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
    <b>Active Element</b> Property : <br />
    <p id="soal1">contoh</p>
    <hr />
    <b>addEventListener()</b> Property : <br />
    <p id="soal2">contoh</p>
    <hr />
    <b>Anchor</b> Property (<a name="jeruk" href="#">Jeruk</a>
    <a name="semangka" href="#">Semangka</a>) : <br />
    <p id="soal3">contoh</p>
    <hr />

    <script type="text/javascript">
        function Tombol() {
            var a = document.activeElement.tagName
            document.getElementById('soal1').innerHTML = a

            var b = document.addEventListener("click", function() {
                document.getElementById('soal2').innerHTML = "Sukses! Merubah addEventListener()"
            })

            var c = document.anchors.length
            document.getElementById('soal3').innerHTML = c
        }
    </script>
</body>

</html>