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
