<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatek.css">
    <title>Kártyás Játék Play</title>
</head>


<?php
$path = './kepek';
$kepek = scandir($path);
for ($i = 0; $i < count($kepek)-2; $i++) {
    $kepek[$i] = $kepek[$i+2];
}
array_pop($kepek);
array_pop($kepek);
?>

<script type="text/javascript">
    <?php
        $js_array = json_encode($kepek);
        echo "let files = ". $js_array . ";\n";
    ?>
</script>

<body style="background-color: #cce0ff;">
<div class="container" style= "margin-top: 60px;">
    <div class="row">
        <div class="col-sm-4 box">
            <h1 class="nev">:D</h1>
            <img src="" class="img-thumbnail" alt="kep" id="kep">
            <input type="text" name="name" id="name"autocomplete="off" onkeyup="check()" onkeyup="muti()">
            <input type="button" value="Kövi ->" class="gomb" onclick="kovi()">
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="scripts/KartyasJatek.js"></script>
</div><br><br><br><br>
</body>

</html>