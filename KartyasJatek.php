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

<input type="button" value="Főoldal" class="button-2" onclick="window.location.href='KartyasJatekIndex.php'">
<?php require_once('header.php') ?>
<?php require_once('KartyasJatekFajlok.php');?>

<script type="text/javascript">
    <?php
        echo "let files = ". json_encode($kepek) . ";\n";
        
        if(isset($_SESSION['nev'])){
            echo "let js_fnev = ". json_encode($_SESSION['nev']) . ";\n";
        }else{
            echo "let js_fnev = " . json_encode("default");
        }
    ?>
</script>


<body style="background-color: #cce0ff;">
<div class="container" style= "margin-top: 20px;">
    <div class="row">
        <div class="col-sm-4 box center">
            <h1 class="nev">:D</h1>
            <img src="" class="img-thumbnail" alt="kep" id="kep">
            <input type="text" name="name" id="name"autocomplete="off" onkeyup="check()">
            <input type="button" value="Kövi ->" class="button-1" id="koviGomb" onclick="kovi()">
            <div> Ennyi pontod van:</div><div id = "pont"></div>
        </div>
    </div>
    <script src="scripts/KartyasJatek.js"></script>
</div><br><br><br><br>
</body>
</html>