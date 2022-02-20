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

<body style="background-color: #cce0ff;">
<div class="container" style= "margin-top: 60px;">
    <div class="row">
        <div class="col-sm-4" id="fileFeltotoForm">
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fileToUpload"><h1>Kép feltöltése</h1></label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <input type="submit" class="btn btn-primary" value="Kép feltöltése" name="feltoltes" id="feltoltes">
          </form>
        </div>
    </div>
</div>
</body>
</html>


<?php

if(isset($_POST['feltoltes'])){
$target_dir = "kepek/".$_SESSION['nev'] . "/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Létezik-e
if (file_exists($target_file)) {
  echo "<h1>Ilyen nevű fájl már létezik.</h1>";
  $uploadOk = 0;
}

// Méret vizsgálás
if ($_FILES["fileToUpload"]["size"] > 2097152) {
  echo "<h1>Túl nagy a fájl.</h1>";
  $uploadOk = 0;
}

// Formátum vizsgálás
if($imageFileType != "jpg") {
  echo "<h1>Ez nem egy jpg kép.</h1>";
  $uploadOk = 0;
}

// uploadOk vizsgálás
  if ($uploadOk == 0) {
    echo "<h1>Valami hiba történt.</h1>";
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<h1>Ezt a fájlt ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " sikeresen feltöltötted.</h1>";
    } else {
      echo "<h1>Valami hiba történt a feltöltésnél.</h1>";
    }
  }
}

?>