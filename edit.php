<?php
//on recupere le contenu du formulaire
$target = $_POST['SecondBox1'];
$Nouveau = $_POST['SecondBox2'];

//on recherche dans le fichier connexion.txt l'occurence $target
$fp = fopen("connexion.txt", "r");
$contenu = fread($fp, filesize('connexion.txt')); //methode fread permet de lire le fichier, prends 2 arguments pour s'arreter (le fichier & la taille du fichier)
$contenu = str_replace($target, $Nouveau, $contenu);//methode str_replace permet de remplacer une chaine de caractere par une autre, prends 3 arguments (la chaine a remplacer, la chaine de remplacement, la chaine dans laquelle on remplace)

fclose($fp);

//on remplace l'ancien contenu par le nouveau contenu dans le fichier connexion.txt
$fp = fopen("connexion.txt", "w");
fwrite($fp, $contenu);
fclose($fp);


//rediction vers main.html
header('Location: main.html');

//si marche pas rajouter ? >
?>


