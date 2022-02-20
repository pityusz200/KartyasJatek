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
    <title>Bejelentkezés</title>
</head>
<body>
    <input type="button" value="Főoldal" class="button-2" onclick="window.location.href='KartyasJatekIndex.php'">
    
    <form action="#" method="POST" class="bejRegForm">
    <h1>Bejelentkezés</h1><br>
        <div class="mb-3">
        <label for="nev">A kedves felhasználóneved:</label>
        <input type="text" name="nev" id="nev">
        </div>
        <input type="Submit" value="Bejelentkezés" name="Submit" id="Submit" class="button-1" role="button">
    </form>

    

</body>
</html>

<?php

if(isset($_POST['Submit'])){
    if(isset($_POST['nev'])){
        $path = './kepek/'.$_POST['nev'];
        $van = scandir($path);
        if($van){
            $_SESSION['nev'] = $_POST['nev'];
            echo '<h1><br>Sikeres bejelentkezés: ' . $_SESSION['nev'] . '</h1>';
        }else{
            echo "<h1>Felhasználónév nem található! Regisztrálj esetleg egyet:</h1>";
        }
    }
}

?>