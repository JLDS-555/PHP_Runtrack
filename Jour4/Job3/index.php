<?php
    
    function countPostArguments($postArray) {
        $count = 0;

        foreach ($postArray as $key => $value) {
            if (isset($value)) {
                $count++;
            }
        }

        return $count;
    }

 
    if (!empty($_POST)) {
        $argumentCount = countPostArguments($_POST);
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
    <title>Compteur d'arguments POST</title>
</head>
<body>
    <h1>Formulaire POST</h1>

    <form method="POST">
        <label for="arg1">Argument 1 :</label>
        <input type="text" name="arg1" id="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" name="arg2" id="arg2"><br><br>

      

        <button type="submit">Envoyer</button>
    </form>

   
</body>
</html>