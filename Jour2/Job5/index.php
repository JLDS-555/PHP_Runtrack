<?php
// Fonction pour vérifier si un nombre est premier
function isPrime($num)

{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;

}

// Affichage des nombres premiers jusqu'à 1000
for ($i = 2; $i <= 1000; $i++)

{
    if (isPrime($i)) {
        echo $i . "<br>";  // Affiche le nombre premier suivi d'un retour à la ligne
    }

}

?>
