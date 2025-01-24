
<?php
  
    function displayPostArguments($postArray) {
        $hasArguments = false;

        foreach ($postArray as $key => $value) {
            if (isset($value)) {
                $hasArguments = true;
                break;
            }
        }

        if ($hasArguments) {
            echo '<table>';
            echo '<tr><th>Argument</th><th>Valeur</th></tr>';

            foreach ($postArray as $key => $value) {
                if (isset($value)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($key) . '</td>';
                    echo '<td>' . htmlspecialchars($value) . '</td>';
                    echo '</tr>';
                }
            }

        
            echo '</table>';
        } else {
           
            echo '<p style="text-align: center;">Aucun argument POST n\'a été reçu.</p>';
        }
    }

    // Appel de la fonction pour afficher le tableau
    displayPostArguments($_POST);
    ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des arguments POST</title>
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
    <h1 style="text-align: center;">Affichage des arguments POST</h1>

    <form method="POST" style="text-align: center;">
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