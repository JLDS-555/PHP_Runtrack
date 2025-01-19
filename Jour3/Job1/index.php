<?php
// Création du tableau avec les valeurs spécifiées
$tableau = array(200, 204, 173, 98, 171, 404, 459);

// Début de la structure du tableau HTML
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Parité</th></tr>";

// Parcours du tableau
foreach ($tableau as $nombre) {
    // Vérification si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        $parite = "Paire";
    } else {
        $parite = "Impaire";
    }
    
    // Affichage du nombre et de sa parité dans une ligne du tableau
    echo "<tr><td>$nombre</td><td>$parite</td></tr>";
}

// Fin de la structure du tableau HTML
echo "</table>";
?>
