<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" class="middle" name="" value="Alivia">
    <input type="text" class="middle" name="" value="Putri">

    <br>
    <button type="button" onclick="jalanScript()">Jalan 1</button>
    <button type="button" onclick="jalanScript2()">Jalan 2</button>

    <script text="text/javascript">
        function jalanScript() {
            console.log(document.querySelector(".middle"))
        }

        function jalanScript2() {
            console.log(document.querySelectorAll('.middle'));
        }
    </script>
</body>

</html>