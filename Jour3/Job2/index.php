<?php
// Création de la chaîne de caractères
$str = "Tous ces instants\nseront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne et afficher un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>
