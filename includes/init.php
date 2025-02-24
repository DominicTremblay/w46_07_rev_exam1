<?php
// Gère la logique d'initialisation et de filtrage des produits.

// Charger le fichier produits.json

$lecture_fichier = lire_fichier_json($config["nom_fichier_produits"]);

list($produits, $msg_erreur) = $lecture_fichier;

if ($msg_erreur) {
  $config["message_erreur"] = $msg_erreur;
  return;
}

var_dump($msg_erreur);
var_dump($produits);

// Obtenir le parametre filtre