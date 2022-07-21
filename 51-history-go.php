<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <!-- pergi ke lokasi yang telah ditentukan pada function javascript -->
    <button onclick="pergi()">Go!</button>

    <script type="text/javascript">
        function pergi() {
            window.history.go(-2) //balik ke 2 halaman sebelumnya
        }
    </script>
</body>

</html>