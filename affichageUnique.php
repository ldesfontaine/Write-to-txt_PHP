<script src="main.js"></script>
<?php
if (isset($_POST['affichage']) && $_POST['affichage'] == 'Afficher') {
    $file = file('connexion.txt');
    foreach ($file as $line) {
        if (strpos($line, $_POST['LastBox']) !== false) {
            echo  htmlspecialchars($line) . "<br />\n"; // htmlspecialchars permet de convertir les caractères spéciaux en entités HTML
        }
    }
}

?>
<button type="submit" onclick="redirectHome()" value="Home">Home</button>