<head>
<link rel="stylesheet" href="https://unpkg.com/mvp.css">
<link rel="stylesheet" href="style.css">
<script src="main.js"></script>
</head>

<body>

<?php
//On créer 3 bouttons pour choisir quelle affichage on veut
echo '<form action="affichage.php" method="post">
<input type="submit" name="affichage" value="Totalité">
<input type="submit" name="affichage" value="Unique">
<input type="submit" name="affichage" value="Clear">
</form>';

//On affiche tous le fichier connexion.txt
if (isset($_POST['affichage']) && $_POST['affichage'] == 'Totalité') { //si on appuie sur le boutton totalité
    //on affiche tout le fichier
    $file = file('connexion.txt');
    foreach ($file as $line) { //pour chaque ligne du fichier
        echo  htmlspecialchars($line) . "<br />\n"; // htmlspecialchars permet de convertir les caractères spéciaux en caractére HTML
    }
}

//On affiche uniquement les lignes qui contiennent l'adresse IP choisie
if (isset($_POST['affichage']) && $_POST['affichage'] == 'Unique') { //si on appuie sur le boutton unique
    $allIP=[];
    //regex d'une adresse IP   
    $regex = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/';
    //on affiche tout le fichier
    $file = file('connexion.txt');


    echo '<form action="affichageUnique.php" method="post">
    <select name="LastBox">';
    foreach ($file as $line) { //pour chaque ligne du fichier
        $line = explode(';', $line);  //explode permet de transformer une str en liste, prends 2 arguments (le séparateur & la chaine a transformer)
        if(in_array($line[0],$allIP) || !preg_match($regex, $line[0])){ //Si l'IP est déjà dans le tableau OU si c'est pas une IP on ne l'ajoute pas
            continue; 
        } 
        array_push($allIP,$line[0]); //On ajoute l'IP dans le tableau
        echo '<option value="' . $line[0] . '">' . $line[0] . '</option>';
    }
    echo '</select>
    <input type="submit" name="affichage" value="Afficher">
    </form>';
}


?>
<!-- redirect bouton -->
<button type="submit" onclick="redirectHome()" value="Home">Home</button>

</body>
