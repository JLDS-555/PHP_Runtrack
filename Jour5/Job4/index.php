<?php

function calcule($nombre1, $operation, $nombre2) {

     $resultat = null;

   
   
    if ($operation === '+') {
        $resultat = $nombre1 + $nombre2;


    } elseif ($operation === '-') {
        $resultat = $nombre1 - $nombre2;


    } elseif ($operation === '*') {
        $resultat = $nombre1 * $nombre2;


    } elseif ($operation === '/') {
         if ($nombre2 != 0) { 
            $resultat = $nombre1 / $nombre2;
        } else {
            return "Erreur : Division par zéro";
        }


    } elseif ($operation === '%') {
        if ($nombre2 != 0) { 
            $resultat = $nombre1 % $nombre2;
        } else {
            return "Erreur : Modulo par zéro";
        }
    } else {
        return "Erreur : Opération non valide";
    }

   
    return $resultat;
}



echo calcule(10, '-', 10); 

echo "\n";

?>