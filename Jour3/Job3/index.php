<?php

$str="I'm sorry Dave i'm afraid I can't do that";

// Variable pour les voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

// Parcourir la chaîne et afficher les voyelles
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère est une voyelle
    if (in_array($str[$i], $vowels)) {
        echo $str[$i];
    }
}
?>
