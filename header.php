<link rel="stylesheet" href="styles/KartyasJatek.css">
<?php
session_start();
if(!empty($_SESSION['nev'])){
    ?>
    <form action="#" method="post" id="kij">
        <input type="submit" value= "<?php echo $_SESSION['nev']?>" 
        name="Kijelentkezes" class="button-2" 
        onmouseover="kijelentkezesSzovegLathato()"
        onmouseout="kijelentkezesSzovegEltun()">

        <div id="kijelentkezoSzoveg" hidden>Kijelentkezéshez kattints!</div>
    </form>
    <form action="#" method="post">
        <input type="button" value="Kép feltöltés" name="kepF" class="button-2" onclick="window.location.href='KartyasJatekKepFeltoltes.php'">
        <input type="button" value="Kép törlés" name="KepT" class="button-2" onclick="window.location.href='KartyasJatekKepTorles.php'">
    </form>
    <?php
}else{
    ?><input type="button" value="Regisztráció" class="button-2" onclick="window.location.href='regisztracio.php'">
    <input type="button" value="Bejelentkezés" class="button-2" onclick="window.location.href='bejelentkezes.php'"><?php
}

if(isset($_POST['Kijelentkezes'])){
    session_destroy();
    header("Location: KartyasJatekIndex.php");
    die();
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts/KartyasJatek.js"></script>