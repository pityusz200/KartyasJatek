<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/KartyasJatekIndex.css">
    <script src="scripts/KartyasJatekIndex.js"></script>
    <script src="scripts/KartyasJatek.js"></script>
    <title>Kártyás Játék</title>
</head>
<body>

    <input type="button" value="Regisztráció" style="background-color: yellow;" onclick="window.location.href='regisztracio.php'">
    <input type="button" value="Bejelentkezés" style="background-color: yellow;" onclick="window.location.href=''">
    <button class="start" onmouseover="myScriptIN()" onmouseout="myScriptOUT()" onclick="window.location.href='KartyasJatek.php'"><h1 class="cim">Test</h1></button>
    <div id="container" class="container" style= "margin-top: 80px;">
    <?php
    
    $path = './kepek/default';
    $kepek = scandir($path);
    for ($i = 0; $i < count($kepek)-2; $i++) {
        $kepek[$i] = $kepek[$i+2];
    }

    array_pop($kepek);
    array_pop($kepek);
    ?>

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
                    <img src="kepek/default/'.$kepek[$szamolo].'" class="img-thumbnail" alt="kep">
                    <h1>'.substr($kepek[$szamolo], 0, -4).'</h1>
                </div>';
                $szamolo = $szamolo + 1;
            }
            echo '</div>';
        }
        
    ?>
    </div>

</body>
</html>