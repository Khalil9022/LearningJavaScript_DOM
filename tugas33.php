<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 33</title>
</head>

<body>
    <input type="text" class="bio" value="Nama Depan" /> <br />
    <input type="text" class="bio" value="Nama Belakang" /> <br />
    <input type="text" class="bio" value="Hobi" /> <br /><br />

    <button type="button" name="button" onclick="jalanScript()">Jalan</button>

    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementsByClassName('bio'));
        }
    </script>
</body>

</html>