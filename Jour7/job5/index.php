<?php
   
    if (isset($_POST['username']) && isset($_POST['password'])) {
   
        $username = $_POST['username'];
        $password = $_POST['password'];

    
        if ($username === 'John' && $password === 'Rambo') {
            echo "<p style='color: green;'>C'est pas ma guerre</p>";
        } else {
            echo "<p style='color: red;'>Votre pire cauchemar</p>";
        }
    }
    ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
   
</head>
<body>
    <h1>Formulaire de Connexion</h1>

    <form method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Se connecter</button>
    </form>

   
</body>
</html>