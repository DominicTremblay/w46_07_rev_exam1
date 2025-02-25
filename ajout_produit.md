# 🛠 Exercice : Validation d'un formulaire d'ajout de produit

## 🎯 Objectif
Créer une page `ajouter_produits.php` qui permet d'ajouter un produit avec validation des champs.

---

## **1️⃣ Création du formulaire**
- Crée un fichier `ajouter_produits.php`.
- Ajoute un **formulaire HTML** avec :
  - Un champ **action** (`input type="hidden"`).
  - Un champ **nom du produit** (`input type="text"`).
  - Un champ **prix** (`input type="text"`).
  - Un champ **catégorie** (`input type="text"`).
  - Un bouton **"Ajouter"**.

---

## **2️⃣ Validation des données en PHP**
- Vérifier que **le nom du produit n'est pas vide**.
- Vérifier que **le prix est un nombre positif**.
- Vérifier que **la catégorie n'est pas vide**.
- Afficher des **messages d'erreur** en cas de problème.


---

## **🎯 Résultat attendu**
- Quand l’utilisateur remplit le formulaire et soumet :
  - **Si tout est correct** : le produit est ajouté et un message de succès s’affiche.
  - **Si des erreurs sont détectées** : elles s'affichent en rouge.

---


