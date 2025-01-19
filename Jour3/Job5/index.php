<?php
// Définir la chaîne à analyser
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Définir les voyelles et consonnes
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$consonnes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];

// Initialiser un dictionnaire pour stocker les résultats
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

// Convertir la chaîne en minuscules pour une comparaison uniforme
$str = strtolower($str);

// Parcourir chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    // Vérifier si le caractère est une voyelle
    if (in_array($char, $voyelles)) {
        $dic["voyelles"]++;
    }
    // Vérifier si le caractère est une consonne
    elseif (in_array($char, $consonnes)) {
        $dic["consonnes"]++;
    }
}

// Afficher les résultats dans un tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
