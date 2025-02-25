<?php
// Contient les fonctions utiles à l'application


/**
 * Lit un fichier JSON et retourne son contenu sous forme de tableau associatif.
 *
 * @param string $nom_fichier Nom du fichier JSON à lire.
 * @return array Un tableau contenant les données du fichier ou un message d'erreur.
 */
 
/**
 * Récupère un paramètre depuis la requête GET ou POST et le sécurise.
 *
 * @param string $identifiant Nom du paramètre à récupérer.
 * @return string|null Valeur du paramètre ou null s'il n'est pas présent.
 */

/**
 * Génère les options HTML d'un menu déroulant en fonction des catégories de produits.
 *
 * @param array $produits Tableau des produits contenant leurs catégories.
 * @param string $identifiant Catégorie sélectionnée actuellement.
 * @return string HTML des options du menu déroulant.
 */

/**
 * Filtre les produits en fonction de leur catégorie.
 *
 * @param array $produits Liste des produits.
 * @param string|null $categorie Catégorie sélectionnée (null ou "toutes" pour ne pas filtrer).
 * @return array Liste filtrée des produits.
 */

/**
 * Génère un tableau HTML contenant les produits sous forme de lignes de tableau.
 *
 * @param array $produits Liste des produits.
 * @return string Code HTML du tableau des produits.
 */

/**
 * Convertit une date en format littéral en français.
 *
 * @param string $date Date au format "YYYY-MM-DD".
 * @return string Date formatée en "Lundi 24 Février 2025".
 */

/**
 * Valide les données du formulaire d'ajout de produit.
 *
 * @param string $nom Nom du produit.
 * @param float $prix Prix du produit.
 * @param string $categorie Catégorie du produit.
 * @return array Tableau contenant les messages d'erreur (vide si aucune erreur).
 */
