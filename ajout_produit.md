# 🛠 Exercice : Validation d'un formulaire d'ajout de produit

## 🎯 Objectif
Créer une page `ajouter_produits.php` qui permet d'ajouter un produit avec validation des champs.

---

## **1️⃣ Création du formulaire**
- Crée un fichier `ajouter_produits.php`.
- Ajoute un **formulaire HTML** avec :
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

## **3️⃣ Sauvegarde dans un fichier JSON**
- Charger les produits existants depuis `data/produits.json`.
- Ajouter le **nouveau produit** sous forme de tableau associatif.
- Sauvegarder le fichier JSON mis à jour.

---

## **4️⃣ Affichage des erreurs et succès**
- Si une erreur est détectée, afficher un message rouge `div.error`.
- Si l'ajout réussit, afficher un message vert `div.success`.

---

## **5️⃣ Ajouter du style (CSS)**
- Mettre en forme le formulaire avec `styles.css` :
  - Largeur de `400px`.
  - Espacement et bordures arrondies.
- Ajouter un style pour **les erreurs en rouge** et **le succès en vert**.

---

## **🎯 Résultat attendu**
- Quand l’utilisateur remplit le formulaire et soumet :
  - **Si tout est correct** : le produit est ajouté et un message de succès s’affiche.
  - **Si des erreurs sont détectées** : elles s'affichent en rouge.

---

## **Bonus 🚀**
- Ajouter une **liste déroulante** au lieu d’un champ texte pour la catégorie.
- Afficher **un tableau des produits** sous le formulaire.
- Vérifier que le **nom du produit ne contient pas de caractères spéciaux**.

Bonne chance ! 🚀
