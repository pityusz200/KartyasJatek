<!DOCTYPE html>
<html lang="hu">
<?php session_start() ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatek.css">
    <?php error_reporting(0);?>
    <title>Regisztráció</title>
</head>
<body>
    <input type="button" value="Főoldal" class="button-2" onclick="window.location.href='KartyasJatekIndex.php'">
    
    <form action="#" method="POST"  class="bejRegForm">
    <h1>Regisztráció</h1>
    <h5>A regisztációhoz csak egy felhasználó nevet kell megadni.</h3><br>
        <div class="mb-3">
            <label for="nev">A vadonat új felhasználó mégpedig az lesz, hogy:</label><br>
            <input type="text" name="nev" id="nev">
        </div>
            <input type="Submit" value="Regisztráció" name="Submit" class="button-1">
    </form>

</body>
</html>

<?php
$felh = $_POST["nev"];
if(isset($_POST["Submit"])){
    if (!file_exists('kepek/'.$felh)) {
        mkdir('kepek/'.$felh, 0777, true);
        $_SESSION['nev'] = $felh;
        echo '<h1>Sikeres regisztráció! A felhasználóneved:<br>'. $felh.'</h1>
        <center><a href="KartyasJatekIndex.php"><input type="button" value="Főoldal" class="button-1 center""></a></center>
        <?php';
    }else{
        echo '<h1>Sikertelen regisztráció! Próbáld újra!</h1>';
    }
}

?>