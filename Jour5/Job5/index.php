<?php

function occurrences($str, $char) {
   
    $compteur = 0;

  
    for ($i = 0; $i < strlen($str); $i++) {
   
        if ($str[$i] === $char) {
            $compteur++;
        }
    }

    return $compteur;
}


$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>