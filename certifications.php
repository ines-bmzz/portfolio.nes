<?php
$page_title = 'Certifications — Ines Boumaiza';
include 'includes/header.php';

$certifications = [
    [
        "id"          => "certRGPD",
        "titre"       => "RGPD & Protection des données",
        "organisme"   => "CNIL — Attestation de sensibilisation",
        "statut"      => "En cours",
        "emoji"       => "🔒",
        "description" => "Règles fondamentales du RGPD, droits des utilisateurs, obligations des organismes traitant des données personnelles.",
        "details"     => "Cette certification couvre les bases du Règlement Général sur la Protection des Données : principes de licéité, droits des personnes (accès, rectification, effacement), obligations du DPO, et gestion des violations de données. Obtenue via la plateforme CNIL.",
    ],
    [
        "id"          => "certAWS",
        "titre"       => "AWS Amazon Web Services — Cloud Practitioner",
        "organisme"   => "Amazon Web Services",
        "statut"      => "En cours",
        "emoji"       => "☁️",
        "description" => "Fondamentaux AWS Amazon Web Services : services, sécurité, architecture et facturation. Première certification officielle Amazon.",
        "details"     => "Préparation à la certification AWS Cloud Practitioner : découverte des principaux services AWS (EC2, S3, Lambda, RDS), modèles de tarification, bonnes pratiques de sécurité et architecture cloud. Certification en cours de préparation.",
    ],
    [
        "id"          => "certSec",
        "titre"       => "SecNumAcadémie",
        "organisme"   => "ANSSI — Agence Nationale de la Sécurité des SI",
        "statut"      => "En cours",
        "emoji"       => "🛡️",
        "description" => "Formation en cybersécurité couvrant les risques numériques, la sécurité des réseaux et la protection des systèmes d'information.",
        "details"     => "MOOC en ligne proposé par l'ANSSI, couvrant 4 modules : sécurité du poste de travail et des réseaux, sécurité sur Internet, sécurité de l'informatique mobile, et gestion des risques numériques en entreprise. Attestation obtenue avec succès.",
    ],
    [
        "id"          => "certOSINT",
        "titre"       => "OSINT — Renseignement en sources ouvertes",
        "organisme"   => "Certification pratique OSINT",
        "statut"      => "En cours",
        "emoji"       => "🔍",
        "description" => "Techniques de collecte et d'analyse d'informations publiques : recherche avancée, investigation numérique et veille stratégique.",
        "details"     => "Formation pratique aux techniques OSINT (Open Source INTelligence) : recherche avancée sur les moteurs de recherche, analyse de réseaux sociaux, géolocalisation d'images, investigation numérique et outils spécialisés (Maltego, Shodan, etc.). Formation en cours.",
    ],
];
?>

<section id="certifications">
  <div class="section-label">Formations & diplômes</div>
  <h2 class="section-title">Mes <span class="accent">certifications</span></h2>

  <div class="cert-grid">
    <?php foreach ($certifications as $cert): ?>
      <div class="cert-card" onclick="openModal('<?= $cert['id'] ?>')">
        <div class="cert-emoji"><?= $cert['emoji'] ?></div>
        <div class="cert-titre"><?= htmlspecialchars($cert['titre']) ?></div>
        <div class="cert-organisme"><?= htmlspecialchars($cert['organisme']) ?></div>
        <p class="cert-description"><?= htmlspecialchars($cert['description']) ?></p>
        <div class="cert-footer">
          <?php $cls = ($cert['statut'] === 'En cours') ? 'en-cours' : 'obtenu'; ?>
          <span class="cert-badge <?= $cls ?>"><?= htmlspecialchars($cert['statut']) ?></span>
          <span class="cert-view-hint">Voir la certification →</span>
        </div>
      </div>

      <!-- Modale certification -->
      <div class="modal" id="<?= $cert['id'] ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><?= $cert['emoji'] ?> <?= htmlspecialchars($cert['titre']) ?></h3>
            <button type="button" class="modal-close" onclick="closeModal('<?= $cert['id'] ?>')">✕</button>
          </div>
          <div class="modal-body">
            <h4>Organisme</h4>
            <p><?= htmlspecialchars($cert['organisme']) ?></p>

            <h4>Détails</h4>
            <p><?= htmlspecialchars($cert['details']) ?></p>

            <h4>Capture de la certification</h4>
            <!-- Remplace par <img class="cert-modal-img" src="images/cert-<?= strtolower($cert['id']) ?>.png" alt="..."> -->
            <div class="cert-modal-placeholder">
              <span><?= $cert['emoji'] ?></span>
              Ajoute la capture de ta certification ici<br>
              <small>src="images/cert-<?= strtolower($cert['id']) ?>.png"</small>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="closeModal('<?= $cert['id'] ?>')">← Retour</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>