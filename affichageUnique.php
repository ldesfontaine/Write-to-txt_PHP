<script src="main.js"></script>
<link rel="stylesheet" href="https://unpkg.com/mvp.css">
<link rel="stylesheet" href="style.css">

<?php
if (isset($_POST['affichage']) && $_POST['affichage'] == 'Afficher') { //si on appuie sur le boutton afficher
    $file = file('connexion.txt');
    foreach ($file as $line) { //pour chaque ligne du fichier
        if (strpos($line, $_POST['LastBox']) !== false) { //si la ligne contient l'IP choisie
            echo  htmlspecialchars($line) . "<br />\n"; // htmlspecialchars permet de convertir les caractères spéciaux en caractére HTML
        }
    }
}

?>
<!-- redirect bouton -->
<button type="submit" onclick="redirectHome()" value="Home">Home</button>