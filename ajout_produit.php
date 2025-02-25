<?php
require_once 'includes/includes.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un Produit</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Ajouter un Produit</h1>

  <?php if (!empty($config["erreurs_validation_frm"])): ?>
    <div class="error">
      <ul>
        <?php foreach ($config["erreurs_validation_frm"] as $erreur): ?>
          <li><?= htmlspecialchars($erreur) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <?php if ($config["message_succes_frm"]): ?>
    <p class="success"><?= htmlspecialchars($config["message_succes_frm"]) ?></p>
  <?php endif; ?>

  <form method="GET">
    <input type="hidden" name="action" value="ajouter-produit">

    <label for="nom">Nom du Produit :</label>
    <input type="text" name="nom" id="nom">

    <label for="prix">Prix :</label>
    <input type="text" name="prix" id="prix">

    <label for="categorie">Catégorie :</label>
    <input type="text" name="categorie" id="categorie">

    <button type="submit">Ajouter</button>
  </form>

  <a href="inventaire.php">Retour à l'inventaire</a>
</body>

</html>