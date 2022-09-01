<?php
// on recupere le contenu du formulaire
$data = $_POST['FirstBox'];
// ouverture du fichier en mode append
$fp = fopen("connexion.txt", "a");


// ecriture dans le fichier
// fwrite($fp, $data.PHP_EOL);


//On place le curseur en fin de fichier pas utile car on utilise la methode append
fseek($fp, filesize('connexion.txt'));
//On ecrit dans le fichier
fwrite($fp, $data.PHP_EOL);


// fermeture du fichier
fclose($fp);

//rediction vers main.html
header('Location: main.html');
?>

