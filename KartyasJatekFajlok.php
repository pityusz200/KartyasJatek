<?php
$path = './kepek/default';

if(isset($_SESSION['nev'])){
    $path = './kepek/'.$_SESSION['nev'];
}

$kepek = scandir($path);

for ($i = 0; $i < count($kepek)-2; $i++) {
    $kepek[$i] = $kepek[$i+2];
}

array_pop($kepek);
array_pop($kepek);

?>