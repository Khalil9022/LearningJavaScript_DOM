<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 43 Javascript DOM</title>
</head>

<body>
    <p>Halaman kedua untuk Forward</p>
    <button onclick="goForward()">go Forward</button>

    <script type="text/javascript">
        function goForward() {
            window.history.forward()
        }
    </script>
</body>

</html>