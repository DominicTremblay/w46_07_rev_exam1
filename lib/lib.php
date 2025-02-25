<?php
// Contient les fonctions utiles à l'application

/**
 * Lit un fichier JSON et retourne son contenu sous forme de tableau associatif.
 *
 * @param string $nom_fichier Nom du fichier JSON à lire.
 * @return array Un tableau contenant les données du fichier ou un message d'erreur.
 */
function lire_fichier_json($nom_fichier)
{
    if (file_exists($nom_fichier)) {
        $contenu_fichier = json_decode(file_get_contents($nom_fichier), true);
        return [$contenu_fichier, null];
    }

    return [null, "Le fichier n'existe pas"];
}

/**
 * Récupère un paramètre depuis la requête GET ou POST et le sécurise.
 *
 * @param string $identifiant Nom du paramètre à récupérer.
 * @return string|null Valeur du paramètre ou null s'il n'est pas présent.
 */
function obtenir_parametre($identifiant)
{
    $valeur_parametre = filter_input(INPUT_GET, $identifiant, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (!isset($valeur_parametre)) {
        $valeur_parametre = filter_input(INPUT_POST, $identifiant, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    return $valeur_parametre;
}

/**
 * Génère les options HTML d'un menu déroulant en fonction des catégories de produits.
 *
 * @param array $produits Tableau des produits contenant leurs catégories.
 * @param string $identifiant Catégorie sélectionnée actuellement.
 * @return string HTML des options du menu déroulant.
 */
function generer_options_categories($produits, $identifiant)
{
    $options = array_unique(
        array_map(fn($produit) => $produit["categorie"], $produits)
    );

    $html = ""; // Initialisation de la variable
    foreach ($options as $option) {
        $selected = ($option == $identifiant) ? "selected" : "";
        $html .= "<option value='$option' $selected>" . htmlspecialchars($option) . "</option>";
    }
    return $html;
}

/**
 * Filtre les produits en fonction de leur catégorie.
 *
 * @param array $produits Liste des produits.
 * @param string|null $categorie Catégorie sélectionnée (null ou "toutes" pour ne pas filtrer).
 * @return array Liste filtrée des produits.
 */
function filtrer_produits($produits, $categorie)
{
    if ($categorie == null || $categorie == "toutes") {
        return $produits;
    }

    return array_values(array_filter($produits, fn($produit) => $produit["categorie"] === $categorie));
}

/**
 * Génère un tableau HTML contenant les produits sous forme de lignes de tableau.
 *
 * @param array $produits Liste des produits.
 * @return string Code HTML du tableau des produits.
 */
function generer_table_html($produits)
{
    if (empty($produits)) {
        return "<p>Aucun produit trouvé.</p>";
    }

    // Récupération des en-têtes depuis la première entrée du tableau
    $en_tetes = array_keys($produits[0]);

    // Formatage des en-têtes (majuscule en début de mot)
    $en_tetes = array_map(fn($en_tete) => ucfirst($en_tete), $en_tetes);

    $html = "<table>";
    $html .= "<thead><tr>";

    foreach ($en_tetes as $en_tete) {
        $html .= "<th>$en_tete</th>";
    }

    $html .= "</tr></thead><tbody>";

    foreach ($produits as $produit) {
        $html .= "<tr>";
        foreach ($produit as $valeur) {
            $html .= "<td>" . htmlspecialchars($valeur) . "</td>";
        }
        $html .= "</tr>";
    }

    $html .= "</tbody></table>";

    return $html;
}

/**
 * Convertit une date en format littéral en français.
 *
 * @param string $date Date au format "YYYY-MM-DD".
 * @return string Date formatée en "Lundi 24 Février 2025".
 */
function date_litteral($date)
{
    $dt = new DateTime($date);

    $liste_jours = [
        "Monday" => "Lundi",
        "Tuesday" => "Mardi",
        "Wednesday" => "Mercredi",
        "Thursday" => "Jeudi",
        "Friday" => "Vendredi",
        "Saturday" => "Samedi",
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

    // Appliquer des modifications si nécessaire (exemple -7 jours, +1 mois)
    $dt->modify("-7 days");
    $dt->modify("+1 month");

    // Construction de la date littérale
    $jour_semaine = $liste_jours[$dt->format("l")];
    $jour = $dt->format("j");
    $mois = $liste_mois[$dt->format("F")];
    $annee = $dt->format("Y");

    return "$jour_semaine $jour $mois $annee";
}

/**
 * Valide les données du formulaire d'ajout de produit.
 *
 * @param string $nom Nom du produit.
 * @param float $prix Prix du produit.
 * @param string $categorie Catégorie du produit.
 * @return array Tableau contenant les messages d'erreur (vide si aucune erreur).
 */
function valider_frm_ajout($nom, $prix, $categorie)
{
    $erreur = [];

    if (empty($nom)) {
        array_push($erreur, "Le nom du produit est requis.");
    }

    if (empty($prix)) {
        array_push($erreur, "Le prix du produit est requis.");
    }

    if (!is_numeric($prix) || $prix < 0) {
        array_push($erreur, "Le prix doit être un nombre positif.");
    }

    if (empty($categorie)) {
        array_push($erreur, "La catégorie du produit est requise.");
    }

    return $erreur;
}
