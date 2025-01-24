<?php

    if (isset($_GET['nombre'])) {
 
        $nombre = $_GET['nombre'];
        $isNumber = true;


        for ($i = 0; $i < strlen($nombre); $i++) {
            if ($i == 0 && $nombre[$i] == '-') { 
                continue;
            }
            if ($nombre[$i] < '0' || $nombre[$i] > '9') {
                $isNumber = false;
                break;
            }
        }

        if ($isNumber) {
            
            $valeur = (int)$nombre;

 
            if ($valeur % 2 == 0) {
                echo "<p style='color: green;'>Nombre pair</p>";
            } else {
                echo "<p style='color: blue;'>Nombre impair</p>";
            }
        } else {
            echo "<p style='color: red;'>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Pair ou Impair</title>
   
</head>
<body>
    <h1>Déterminer si un nombre est pair ou impair</h1>

    <form method="GET">
        <label for="nombre">Entrez un nombre :</label><br>
        <input type="text" name="nombre" id="nombre" required><br>
        <button type="submit">Vérifier</button>
    </form>

 
</body>
</html>