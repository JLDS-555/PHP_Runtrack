<?php

$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de style</title>

    <link rel="stylesheet" href="css/<?php echo htmlspecialchars($style); ?>.css">
</head>
<body class=back_ground>

    <form action="" method="POST">
        <section class=titre_principale>
        <label for="style">Choisissez un style :</label>
        </section>
        <select name="style" id="style">
            <option value="style1" <?php if ($style === 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($style === 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($style === 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>