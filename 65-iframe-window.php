<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="panggil_frame()">Buka Link</button>
    <br><br>
    <iframe src="" width="500" height="400"></iframe>
    <iframe src="" width="500" height="400"></iframe>

    <script type="text/javascript">
        function panggil_frame() {
            window.frames[1].location = "https://www.niomic.com/"
            window.frames[0].location = "https://www.youtube.com/"
        }
    </script>
</body>

</html>