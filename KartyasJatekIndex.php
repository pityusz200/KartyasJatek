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
    <?php require_once('header.php') ?>
    
    
    <button class="button-1 start"
     onmouseover="myScriptIN()"
     onmouseout="myScriptOUT()"
     onclick="window.location.href='KartyasJatek.php'">
     <h1>START</h1></button>

    <div id="container" class="container" style= "margin-top: 80px;">
    <?php require_once('KartyasJatekFajlok.php');
    
    
    $szamolo = 0;    
        for ($i=0; $i < count($kepek); $i++) {
            echo '<div class="row" id="table">';
            for ($j=0; $j < 4; $j++) { 
                if($szamolo >= count($kepek)){
                    break;
                }
                echo '
                <div class="col-sm-3 box">
                    <img src="'.$path.'/'.$kepek[$szamolo].'" class="img-thumbnail" alt="kep">
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