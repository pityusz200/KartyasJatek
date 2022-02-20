<?php
session_start();

$btnName = $_GET['btnName'];

unlink('kepek/'.$_SESSION['nev'].'/'.$btnName);

echo 'Sikeres törlés!';

?>