<?php
for ($i = 0; $i <= 100; $i++) 

{
    if ($i >= 0 && $i <= 20) {
        // Afficher en italique pour les nombres entre 0 et 20
        if ($i == 42) {
            echo "La Plateforme_<br>";
        } else {
            echo "<i>$i</i><br>";
        }
    } elseif ($i >= 25 && $i <= 50) {
        // Sert à souligner les nombres entre 25 et 50
        if ($i == 42) {
            echo "La Plateforme_<br>";
        } else {
            echo "<u>$i</u><br>";
        }
    } else {
        // Sert à afficher les autres nombres normals
        echo "$i<br>";
    }


}


?>
