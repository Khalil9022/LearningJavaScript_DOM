<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <button onclick="bukaWin()">Buka Window</button>
    <button onclick="tutupWin()">Tutup Window</button>
    <script type="text/javascript">
        var myWindow

        function bukaWin() {
            myWindow = window.open("", "Niomic", "width = 500, height = 400")
            myWindow.document.write("<p>Anda Berhasil membuka window :D </p>")
        }

        function tutupWin() {
            myWindow.close()
        }
    </script>
</body>

</html>