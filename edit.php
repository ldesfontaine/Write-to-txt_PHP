<?php
//on recupere le contenu du formulaire
$target = $_POST['SecondBox1'];
$Nouveau = $_POST['SecondBox2'];

//on recherche dans le fichier connexion.txt l'occurence $target
$fp = fopen("connexion.txt", "r");
$contenu = fread($fp, filesize('connexion.txt'));
$contenu = str_replace($target, $Nouveau, $contenu);
fclose($fp);

//on remplace l'occurence $target par $Nouveau dans le fichier connexion.txt
$fp = fopen("connexion.txt", "w");
fwrite($fp, $contenu);
fclose($fp);


//rediction vers main.html
header('Location: main.html');
?>






?>