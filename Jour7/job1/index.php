<?php
   
    function countGetArguments($getArray) {
        $count = 0;

        foreach ($getArray as $key => $value) {
            if (isset($value)) {
                $count++;
            }
        }

        return $count;
    }

   
    if (!empty($_GET)) {
        $argumentCount = countGetArguments($_GET);
        echo "Nombre d'arguments reçus : " . $argumentCount;
    } else {
        echo "Aucun argument reçu.";
    }
    ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'arguments GET</title>
</head>
<body>
    <h1>Formulaire GET</h1>
    <form method="GET">
        <label for="arg1">Argument 1 :</label>
        <input type="text" name="arg1" id="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" name="arg2" id="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" name="arg3" id="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <h2>Résultat</h2>
 
</body>
</html>