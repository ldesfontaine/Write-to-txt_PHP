<?php
//on recupere le formulaire
$target = $_POST['ThirdBox'];


//on cherche la ligne ou le $target est present
$line = file('connexion.txt');
foreach ($line as $key => $value) {
    if (strpos($value, $target) !== false) {
        unset($line[$key]);
    }
}

//on supprime la ligne ou l'occurence est presente
file_put_contents('connexion.txt', implode('', $line));

//on redirige vers la page d'acceuil
header('Location: main.html');
?>