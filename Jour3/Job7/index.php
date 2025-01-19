<?php
// Création de la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Calcul de la longueur de la chaîne
$length = strlen($str);

// Initialiser une chaîne vide pour stocker le résultat
$newStr = "";

// Parcourir la chaîne et appliquer la logique de décalage des caractères
for ($i = 0; $i < $length; $i++) {
    // Le dernier caractère sera remplacé par le premier
    if ($i == $length - 1) {
        $newStr .= $str[0];
    } else {
        // Remplacer chaque caractère par le suivant
        $newStr .= $str[$i + 1];
    }
}

// Affichage du résultat
echo $newStr;
?>
