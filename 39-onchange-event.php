<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar javascript</title>
</head>

<body>
    <p>Pilih menu makanan</p>
    <select name="menu" id="menu" onchange="Tombol()">
        <option value="" hidden></option>
        <option value="Nasi goreng">Nasi Goreng</option>
        <option value="Ayam goreng">Ayam Goreng</option>
        <option value="Bebek goreng">Bebek Goreng</option>
        <option value="Udang goreng">Udang Goreng</option>
        <option value="Ayam Bakar">Ayam Bakar</option>
    </select>

    <p id="clicked"></p>

    <script type="text/javascript" src="39-change.js"></script>
</body>

</html>