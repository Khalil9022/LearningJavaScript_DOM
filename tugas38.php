<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Belajar Javascript - NIOMIC</title>
    <style media="screen">
        .contohstyle {
            color: red;
        }
    </style>
</head>

<body>
    <button type="button" onclick="Tombol()" name="button">Jalankan</button>
    <br />
    <br />
    <hr />
    Atribut <b>removeNamedItem()</b> : <br />
    <input value="Inputan" /> <br />
    <hr />
    Atribut <b>setNamedItem()</b> : <br />
    <i>contoh</i>
    <hr />
    Atribut <b>value()</b> :
    <p id="paragraph">contoh</p>
    <hr />

    <script type="text/javascript">
        function Tombol() {
            var soal1 = document.getElementsByTagName('input')[0]
            var b = soal1.attributes.removeNamedItem('value')

            var soal2 = document.getElementsByTagName('i')[0]
            var d = document.createAttribute('class')
            d.value = 'contohstyle'
            soal2.attributes.setNamedItem(d)

            var soal3 = document.getElementsByTagName('button')[0]
            var f = soal3.attributes[0].value
            document.getElementById('paragraph').innerHTML = f
        }
    </script>
</body>

</html>