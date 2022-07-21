<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <h1>Belajar HTML collection item() method()</h1>

    <p>Paragraf pertama</p>
    <p>Paragraf kedua</p>
    <button onclick="item_method()">Tombol Alert</button>

    <script type="text/javascript">
        function item_method() {
            var x = document.getElementsByTagName('P')
            alert(x.item(0).innerHTML) //jika ingin memanggil index p yg pertama, maka tulis angka 0 didalam item()

        }
    </script>
</body>

</html>