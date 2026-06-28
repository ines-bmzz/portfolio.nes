<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : 'Portfolio — Ines Boumaiza'; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav>
  <div class="nav-logo">Ines Boumaiza</div>
  <ul class="nav-links">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="parcours.php">Parcours</a></li>
    <li><a href="situations.php">Situations</a></li>
    <li><a href="veille.php">Veille</a></li>
    <li><a href="competences.php">Compétences</a></li>
    <li><a href="certifications.php">Certifications</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>