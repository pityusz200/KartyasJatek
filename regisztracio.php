<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/Regiszteracio.css">
    <?php error_reporting(0);?>
    <title>Regisztráció</title>
</head>
<body>
    <input type="button" value="Főoldal" style="background-color: yellow;" onclick="window.location.href='KartyasJatekIndex.php'">
    <h1>Regisztráció</h1>
    <h3>A regisztációhoz csak egy felhasználó nevet kell megadni. Kérlek adj meg egyet amivel a később bejelentkezel.</h3>
    <form action="#" method="POST">
    <label for="fname">Felhasználónév:</label>
        <input type="text" name="nev" id="nev">
        <input type="Submit" value="Submit" name="Submit" id="Submit" style="background-color: yellow;">
    </form>
</body>
</html>

<?php
$felh = $_POST["nev"];
if(isset($_POST["Submit"])){
    if (!file_exists('kepek/'.$felh)) {
        mkdir('kepek/'.$felh, 0777, true);
        echo '?><h1>Sikeres regisztráció! A felhasználóneved:<br>'. $felh.'</h1>
        <center><a href="KartyasJatekIndex.php"><input type="button" value="Főoldal" style="background-color: yellow;"></a></center>
        <?php';
    }else{
        echo '?><h1>Sikertelen regisztráció! Próbáld újra!</h1><?php';
    }
}

?>