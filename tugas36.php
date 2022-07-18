<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 36</title>
</head>

<body>
    <h2>Login</h2>
    <p class="department">- Department of Finance -</p>
    <input type="email" id="email" value="email" /> <br /><br />
    <input type="username" id="" value="username" /> <br /><br />
    <input type="password" class="password" value="password" /> <br /><br />

    <button type="button" onclick="jalanScript()" name="button">Jalan</button>

    <script type="text/javascript">
        function jalanScript() {
            console.log(document.getElementById('email'));
            console.log(document.getElementsByTagName('h2'));
            console.log(document.getElementsByClassName('password'));
            console.log(document.querySelector('.department'));
        }
    </script>
</body>

</html>