<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatek.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="scripts/KartyasJatek.js"></script>
    <title>Kártyás Játék Play</title>
</head>



<body style="background-color: #cce0ff;">
<div class="container" style= "margin-top: 80px;">
    <div class="row">
        <div class="col-sm-4 box">
            <h1 class="nev">:D</h1>
            <img src="" class="img-thumbnail" alt="kep" id="kep">
            <input type="text" name="name" id="name"autocomplete="off" onkeyup="check()" onkeyup="muti()">
            <input type="button" value="Get Links Pls :D" name="getLink" id="getLink" class="gomb" onclick="muti()">
        </div>
    </div>
    <div class="row links">
    <a href="" target="_blank">X</a><br>
    <a href="" target="_blank">Y</a><br>
    <input type="button" value="Kövi ->" class="gomb" onclick="kovi()">
    </div>
</div>
</body>

</html>