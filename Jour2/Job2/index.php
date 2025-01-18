<?php
// Liste des nombres à exclure
$exclusions = [26, 37, 88, 1111];

for ($i = 0; $i <= 1337; $i++) 

{
    // Vérifier si le nombre fait partie des exclusions
    if (!in_array($i, $exclusions)) {
        // Afficher le nombre avec un retour à la ligne//
        echo $i . "<br>";
    }


}


?>
