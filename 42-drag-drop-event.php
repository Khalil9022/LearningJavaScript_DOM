<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
    <style>
        .droptarget {
            float: left;
            width: 100px;
            height: 35px;
            margin: 15px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }
    </style>
</head>

<body>
    <p>drag element diantara dua kotak</p>

    <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
        <p ondragstart="dragStart(event)" ondrag="dragging(event)" draggable="true" id="dragtarget">Drag Saya!</p>
    </div>

    <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

    <p id="object_text"></p>

    <script type="text/javascript" src="42-drag-drop.js"></script>
</body>

</html>