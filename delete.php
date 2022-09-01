<?php
//on recupere le formulaire
$target = $_POST['ThirdBox'];


//on cherche la ligne ou $target est presente
$line = file('connexion.txt');
foreach ($line as $key => $value) { //pour chaque ligne du fichier
    if (strpos($value, $target) !== false) { //si la ligne contient $target
        unset($line[$key]); //on supprime la ligne
    }
}

//on réecrit le fichier
file_put_contents('connexion.txt', implode('', $line)); //implode permet de transformer un tableau en str

//on redirige vers la page d'acceuil
header('Location: main.html');
?>