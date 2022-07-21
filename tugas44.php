<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 44</title>
</head>

<body>
    <h1>Tugas 44 </h1>
    <p>Jangan Rubah yang ini</p>

    <p>Ubah warna yang ini</p>

    <button onclick="myFunction()">Ubah Warna</button>

    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementsByTagName('P')[1]
            x.style.color = "blue"
        }
    </script>
</body>

</html>