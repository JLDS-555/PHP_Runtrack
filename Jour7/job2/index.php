<?php
    // Fonction pour afficher les arguments GET sous forme de tableau HTML
    function displayGetArguments($getArray) {
        // Vérifier si $_GET contient des données
        $hasArguments = false;
        foreach ($getArray as $key => $value) {
            if (isset($value)) {
                $hasArguments = true;
                break;
            }
        }

        if ($hasArguments) {
            // Début du tableau HTML
            echo '<table>';
            echo '<tr><th>Argument</th><th>Valeur</th></tr>';

            // Parcourir $_GET et afficher chaque clé et valeur
            foreach ($getArray as $key => $value) {
                if (isset($value)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($key) . '</td>';
                    echo '<td>' . htmlspecialchars($value) . '</td>';
                    echo '</tr>';
                }
            }

            // Fin du tableau HTML
            echo '</table>';
        } else {
            // Message si aucun argument n'est présent
            echo '<p style="text-align: center;">Aucun argument GET n\'a été reçu.</p>';
        }
    }

    // Appel de la fonction pour afficher le tableau
    displayGetArguments($_GET);
    ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Affichage des arguments GET</h1>

    <form method="GET" style="text-align: center;">
        <label for="arg1">Argument 1 :</label>
        <input type="text" name="arg1" id="arg1"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" name="arg2" id="arg2"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="text" name="arg3" id="arg3"><br><br>

        <button type="submit">Envoyer</button>
    </form>

   
</body>
</html>