<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 41 Java Script Dasar</title>
</head>

<body>
    <p>Pilih menu Background</p>

    <Select onchange="Tombol()" id="menu" name="menu">
        <option value="" hidden></option>
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="yellow">yellow</option>
        <option value="white">white</option>
    </Select>

    <p>saat click warna bg, warnanya akan berubah</p>

    <script type="text/javascript" src="tugas41-fungsi.js"></script>
</body>

</html>