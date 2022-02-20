<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatek.css">
    <title>Kártyás Játék</title>
</head>
<body>
    <input type="button" value="Főoldal" class="button-2" onclick="window.location.href='KartyasJatekIndex.php'">
    <?php require_once('header.php') ?>

    <div id="container" class="container" style= "margin-top: 80px;">
    <h1>Kattints az egyik képre a törléshez!</h1>

    <?php require_once('KartyasJatekFajlok.php');?>

    <?php
    $szamolo = 0;    
        for ($i=0; $i < count($kepek); $i++) {
            echo '<div class="row">';
            for ($j=0; $j < 4; $j++) { 
                if($szamolo >= count($kepek)){
                    break;
                }
                echo '
                <div class="col-sm-3 box">
                <button onclick="torles(this)" name='.$kepek[$szamolo].' id='.$kepek[$szamolo].'">
                        <img src="kepek/'.$_SESSION['nev'].'/'.$kepek[$szamolo].'" class="img-thumbnail" alt="kep" name='.$kepek[$szamolo].' id='.$kepek[$szamolo].'">
                        <h1>'.substr($kepek[$szamolo], 0, -4).'</h1>
                </button></div>';
                $szamolo = $szamolo + 1;
            }
            echo '</div>';
        }
        
    ?>
    <div id="torles"></div>
    </div>

</body>
</html>