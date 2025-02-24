<?php
// Contient les fonctions utiles à l'application
function lire_fichier_json($nom_fichier)
{
  if (file_exists($nom_fichier)) {
    $contenu_fichier = json_decode(file_get_contents($nom_fichier));
    return [$contenu_fichier, null];
  }

  return [null, "Le fichier n'existe pas"];
}

function obtenir_parametre($identifiant)
{
  $valeur_parametre = filter_input(INPUT_GET, $identifiant, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  if (!isset($valeur_parametre)) {
    $valeur_parametre = filter_input(INPUT_POST, $identifiant, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  return $valeur_parametre;
}

function generer_options_categories($produits, $identifiant)
{

  $options = array_unique(
    array_map(fn($produit) => $produit->categorie, $produits)
  );

  $html = "<option value='' selected>Choisir une categorie</option>";
  foreach ($options as $index => $option) {
    $selected = $option == $identifiant ? "selected" : "";
    $html .= "<option value='$option' $selected>" . $option . "</option>";
  }
  return $html;
}

function filtrer_produits($produits, $categorie)
{

  if ($categorie == "toutes") {
    return $produits;
  }
  
  return array_filter($produits, fn($produit) => $produit->categorie === $categorie);
}
