<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <h1>Belajar HTML collection lenght</h1>

    <p>Paragraf pertama</p>
    <p>Paragraf kedua</p>
    <p>Paragraf ketiga</p>
    <p>Paragraf keempat</p>
    <p>Paragraf kelima</p>

    <button onclick="item_method()">Tombol Alert 2</button>

    <script type="text/javascript">
        function item_method() {
            var x = document.getElementsByTagName('P')
            alert(x.length)

            for (let i = 0; i < x.length; i++) {
                const element = x[i];
                alert(x.item(i).innerHTML)
            }
        }
    </script>
</body>

</html>