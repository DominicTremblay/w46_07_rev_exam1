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

  foreach ($options as $index => $option) {
    $selected = $option == $identifiant ? "selected" : "";
    $html .= "<option value='$option' $selected>" . $option . "</option>";
  }
  return $html;
}

function filtrer_produits($produits, $categorie)
{

  if ($categorie == null || $categorie == "toutes") {
    return $produits;
  }

  return array_values(array_filter($produits, fn($produit) => $produit->categorie === $categorie));
}

function generer_table_html($produits)
{
  // retourne les cles de l'objet
  $en_tetes = array_keys(get_object_vars($produits[0]));

  $en_tetes = array_map(fn($en_tete) => strtoupper(substr($en_tete, 0, 1)) . substr($en_tete, 1), $en_tetes);

  $html = "<table>";
  $html .= "<thead>";
  $html .= "<tr>";

  foreach ($en_tetes as $en_tete) {
    $html .= "<th>$en_tete</th>";
  }
  $html .= "</tr>";
  $html .= "</thead>";
  $html .= "<tbody>";
  foreach ($produits as $produit) {
    $html .= "<tr>";
    $html .= "<td>" . $produit->id . "</td>";
    $html .= "<td>" . $produit->nom . "</td>";
    $html .= "<td>" . $produit->prix . "</td>";
    $html .= "<td>" . $produit->categorie . "</td>";

    $html .= "</tr>";
  }
  $html .= "</tbody>";
  $html .= "</table>";

  return $html;
}


function date_litteral($date)
{
  $date = new DateTime($date);

  $liste_jours = [
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "jeudi",
    "Friday" => "Vendredi",
    "Satruday" => "Samedi",
    "Sunday" => "Dimanche"
  ];

  $liste_mois = [
    "January" => "janvier",
    "February" => "février",
    "March" => "mars",
    "April" => "avril",
    "May" => "mai",
    "June" => "juin",
    "July" => "juillet",
    "August" => "août",
    "September" => "septembre",
    "October" => "octobre",
    "November" => "novembre",
    "December" => "décembre"
  ];

  $date->modify("-7 days");
  $date->modify("+1 month");

  // l jour litteral
  // F mois litteral
  $jour_semaine = $liste_jours[$date->format("l")];
  $jour = $date->format("j");
  $mois = $liste_mois[$date->format("F")];
  $annee = $date->format("Y");
  return "$jour_semaine $jour $mois $annee";
}
