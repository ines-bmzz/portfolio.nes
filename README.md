# Portfolio - Structure PHP

## 📁 Architecture du projet

```
PORTFOLIO/
├── index.php              ← Page d'accueil
├── parcours.php           ← Parcours scolaire
├── situations.php         ← Situations professionnelles
├── veille.php             ← Veille technologique
├── competences.php        ← Compétences
├── contact.php            ← Formulaire de contact
│
├── includes/
│   ├── header.php         ← En-tête commune (nav + DOCTYPE)
│   └── footer.php         ← Pied de page + script modales
│
├── php/
│   └── form.php           ← Traitement du formulaire contact
│
├── css/
│   └── style.css          ← Tous les styles (général + modales)
│
├── js/
│   └── modals.js          ← JavaScript pour les modales
│
├── assets/
│   └── (images, icons, etc)
│
└── README.md              ← Ce fichier
```

## 🔧 Comment ça marche

### Pages PHP
Chaque page `.php` (index, parcours, situations, etc.) inclut automatiquement :
- `includes/header.php` → navigation commune + ouverture HTML
- `includes/footer.php` → fermeture HTML + script modales

```php
<?php $page_title = 'Mon titre'; include 'includes/header.php'; ?>
<!-- Contenu de la page -->
<?php include 'includes/footer.php'; ?>
```

### Formulaire de contact
1. L'utilisateur remplit le formulaire dans `contact.php`
2. Le formulaire envoie les données à `php/form.php` en POST
3. `php/form.php` traite et valide les données, puis envoie un email
4. Redirection avec message de succès/erreur

```html
<form method="POST" action="php/form.php">
  <input name="name" required>
  <input name="email" required>
  <textarea name="message" required></textarea>
  <button type="submit">Envoyer</button>
</form>
```

### Modales en JavaScript
Les modales utilisent **JavaScript pur** (pas de Bootstrap) :
- Clic sur une carte → `onclick="openModal('modalId')"`
- Fermeture → `onclick="closeModal('modalId')"`
- Clavier (Escape) → automatique
- Clic en dehors → automatique

```html
<div class="sp-card" onclick="openModal('modalSituation1')">
  Voir détails
</div>

<div class="modal" id="modalSituation1">
  <!-- Contenu modale -->
  <button onclick="closeModal('modalSituation1')">Fermer</button>
</div>
```

## 🎨 CSS

- **css/style.css** → tous les styles (général + modales + responsive)
- Les modales ont leur propre section `.modal` avec classe `.modal-open` pour l'affichage

## 📝 À modifier

1. **Email pour les messages** : Dans `php/form.php` ligne 19
   ```php
   $to = 'votre-email@exemple.com';
   ```

2. **Contenu des situations** : Dans `situations.php` les modales

3. **Messages de succès/erreur** : Dans `php/form.php` et `contact.php`

## ⚡ Fonctionnalités PHP implémentées

✅ Sessions (`$_SESSION`) pour les messages  
✅ Validation de formulaire  
✅ Filtrage des entrées (`htmlspecialchars`)  
✅ Envoi d'email  
✅ Pages incluses réutilisables  

## 🚀 Prochaines étapes

Vous pouvez ajouter :
- Connexion/authentification
- Base de données pour les situations
- Plus de dialogues PHP
- Système de cache pour les articles de veille
- etc.

---
**Fait avec ❤️ pour le BTS SIO SLAM**
