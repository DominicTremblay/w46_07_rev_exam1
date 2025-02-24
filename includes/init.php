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


