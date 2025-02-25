<?php require "includes/includes.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inventaire des produits</title>
</head>

<body>
    <div class="container">
        <h1>Gestion d'inventaire</h1>
        <h3><?= $date ?></h3>

        <h2 class="msg-erreur"><?= $config["message_erreur"]?></h2>

        <!-- A FAIRE : Ajouter un formulaire pour filtrer les produits -->
        <form method="GET">
            <label for="categorie">Filtrer par catégorie :</label>
            <select name="categorie" id="categorie">
                <option value="">Toutes</option>
                <!-- A FAIRE : Ajouter dynamiquement les options de catégories -->
                <?= $options ?>
            </select>
            <input type="submit" value="Filtrer">
        </form>

        <!-- A FAIRE : Ajouter le tableau  générer dynamiquement pour afficher les produits -->
   
        <?= $table_html ?>
  
    </div>
</body>

</html>