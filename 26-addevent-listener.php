<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javscript</title>
</head>

<body>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et quos quod molestiae exercitationem. Minus vel nesciunt quisquam velit aliquam, illum rerum provident obcaecati ipsa nisi tenetur voluptatibus et reprehenderit.
    </p>

    <p id="contoh">contoh</p>

    <script type="text/javascript">
        document.addEventListener('click', function() {
            document.getElementById('contoh').innerHTML = "Success, kode berhasil dirubah :)"
        })
    </script>
</body>

</html>