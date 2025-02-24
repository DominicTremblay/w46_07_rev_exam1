# 📌 Exercice : Gestion d’un inventaire de produits en PHP

## 🎯 Objectifs pédagogiques
- Lire et manipuler des fichiers JSON en PHP
- Générer dynamiquement des données HTML
- Filtrer les résultats selon une entrée utilisateur
- Manipuler les tableaux et les boucles

---

## 📝 Structure des fichiers

📁 **includes/**  
&nbsp;&nbsp;&nbsp;&nbsp;📄 `config.php` → Contient les paramètres de configuration de l'application.  
&nbsp;&nbsp;&nbsp;&nbsp;📄 `includes.php` → Inclut les fichiers nécessaires.  
&nbsp;&nbsp;&nbsp;&nbsp;📄 `init.php` → Gère la logique d'initialisation et de filtrage des produits.  
&nbsp;&nbsp;&nbsp;&nbsp;📁 `lib/` → Contient les fonctions utiles dans `lib.php`.  

📁 **data/**  
&nbsp;&nbsp;&nbsp;&nbsp;📄 `produits.json` → Contient la liste des produits sous forme de données JSON.  

📄 `inventaire.php` → Page principale affichant les produits et le formulaire de filtrage.  
📄 `style.css` → Feuille de styles pour améliorer l'affichage.  

---

## 📝 Étapes de réalisation

### **1️⃣ Configurer l'application**
📌 **Objectif : Créer un fichier de configuration.**

✅ **Instructions :**
1. Dans `includes/config.php`, définissez un tableau PHP contenant :
   - `"nom_fichier_produits"` → `"data/produits.json"`
   - `"message_erreur"` → `"Sélectionnez une catégorie valide."`

---

### **2️⃣ Charger les fichiers nécessaires**
📌 **Objectif : Structurer le projet en incluant les fichiers essentiels.**

✅ **Instructions :**
1. Dans `includes/includes.php`, inclure `config.php`, `lib/lib.php`, et `init.php`.

---

### **3️⃣ Charger les produits JSON et initialiser les variables**
📌 **Objectif : Lire et décoder les produits depuis le fichier JSON.**

✅ **Instructions :**
1. Dans `includes/init.php` :
   - Lire `produits.json`.
   - Définir `$produits` avec `json_decode()`.
   - Initialiser `$categorie_filtre` en récupérant `$_GET["categorie"]` si défini.

---

### **4️⃣ Créer les fonctions utiles**
📌 **Objectif : Manipuler les produits avec des fonctions réutilisables.**

✅ **Instructions :**
1. Dans `lib/lib.php`, créer les fonctions :
   - `charger_produits($fichier)` : Lit et retourne les produits JSON.
   - `generer_options_categories($produits)` : Génère dynamiquement les options du `<select>`.
   - `filtrer_produits($produits, $categorie)` : Retourne les produits correspondant à la catégorie sélectionnée.

---

### **5️⃣ Afficher le formulaire de filtrage dans `inventaire.php`**
📌 **Objectif : Permettre aux utilisateurs de filtrer les produits.**

✅ **Instructions :**
1. Ajouter un `<form>` contenant un `<select>` généré dynamiquement par `generer_options_categories()`.
2. Ajouter un bouton **"Filtrer"** pour soumettre le formulaire.

---

### **6️⃣ Générer le tableau des produits filtrés**
📌 **Objectif : Afficher la liste des produits sous forme de tableau HTML.**

✅ **Instructions :**
1. Utiliser `filtrer_produits()` pour récupérer les produits filtrés.
2. Parcourir `$produits` avec `foreach` pour générer les lignes du tableau (`<tr>`).
3. Afficher **ID, Nom, Prix, Catégorie** dans les colonnes.

---

### **7️⃣ Améliorations possibles (Bonus)**
✅ **Ajouts optionnels pour aller plus loin :**
- Ajouter une colonne "Stock" et ne pas afficher les produits en rupture.
- Trier les produits par prix (croissant/décroissant).
- Ajouter une barre de recherche pour filtrer par nom.

🚀 **Une fois terminé, testez avec plusieurs catégories et assurez-vous que tout fonctionne correctement !**

