<?php
// Gère la logique d'initialisation et de filtrage des produits.

// Charger le fichier produits.json

$lecture_fichier = lire_fichier_json($config["nom_fichier_produits"]);

list($produits, $msg_erreur) = $lecture_fichier;

if ($msg_erreur) {
  $config["message_erreur"] = $msg_erreur;
  return;
}

// Obtenir le parametre categorie
$categorie_filtre = obtenir_parametre("categorie");
echo "<br>";
echo "<br>";
$options = generer_options_categories($produits, $categorie_filtre);

$produits_categorie = filtrer_produits($produits, $categorie_filtre);



$table_html = generer_table_html($produits_categorie);

$date = date_litteral("2025-02-25");

// valider le formulaire si action=ajouter-produit

$action = obtenir_parametre("action");

if ($action == "ajouter-produit") {
  $nom = obtenir_parametre("nom");
  $prix = obtenir_parametre("prix");
  $categorie = obtenir_parametre(("categorie"));
  $config["erreurs_validation_frm"] = valider_frm_ajout($nom, $prix, $categorie);
  if (empty($config["erreurs_validation_frm"])) {
    $config["message_succes_frm"] = "Produit ajouté avec succès.";
  }
}
