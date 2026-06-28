<?php $page_title = 'Situations Professionnelles — Ines Boumaiza'; include 'includes/header.php'; ?>

<section id="situations">
  <div class="section-label">Expériences</div>
  <h2 class="section-title">Situations <span class="accent">professionnelles</span></h2>

  <div class="sp-grid">

    <!-- Carte projet 1 -->
    <div class="sp-card" onclick="openModal('modalSituation1')">
      <div class="sp-card-cover">
        <img src="images/sogex.png" alt="Sogex Conseils">
      </div>
      <div class="sp-card-body">
        <span class="sp-tag stage">Stage</span>
        <h3 class="sp-card-title">Projet 1 — Sogex Conseils</h3>
        <p class="sp-card-desc">Développement d'une application web pour un cabinet de conseil. Gestion des données clients et mise en place d'une interface d'administration.</p>
        <div class="sp-card-cta">Voir le détail →</div>
      </div>
    </div>

    <!-- Modale projet 1 -->
    <div class="modal" id="modalSituation1">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Projet 1 — Sogex Conseils</h3>
          <button type="button" class="modal-close" onclick="closeModal('modalSituation1')">✕</button>
        </div>
        <div class="modal-body">

          <h4>1. Contexte & besoin</h4>
          <p>Lors de mon stage au sein du cabinet comptable Sogex Conseils, j'ai constaté que de nombreux échanges avec les clients étaient réalisés par téléphone ou par e-mail, ce qui compliquait le suivi des documents et les relances. Les collaborateurs n'étaient pas tous à l'aise avec les outils numériques et souhaitaient une solution simple à utiliser. L'objectif de mon projet était donc de développer une application web permettant de centraliser les échanges entre le cabinet et ses clients. Cette application facilite les relances, le dépôt de documents et la signature électronique, tout en améliorant l'organisation et la sécurité des échanges.</p>

          <h4>2. Environnement technologique</h4>
          <p>Langages :

PHP
JavaScript
HTML5
CSS3

Frameworks et bibliothèques :

React.js
Node.js
Tailwind CSS
Bootstrap

Base de données :

MySQL

Outils utilisés :

Visual Studio Code
Figma
Git
XAMPP

Systèmes d'exploitation :

Windows
Fedora Linux

Sécurité :

API de signature électronique
Gestion des mots de passe
Validation des formulaires
Sensibilisation aux bonnes pratiques de cybersécurité</p>

          <h4>3. Réalisations détaillées</h4>
          <p>Afin de répondre aux besoins du cabinet, j'ai réalisé le projet en plusieurs étapes :

<p>1. Analyse des besoins</p>

<p>Échanges avec les collaborateurs afin d'identifier les principales difficultés rencontrées dans leur travail quotidien.
Recensement des fonctionnalités les plus utiles.</p>

<p>2. Conception de l'application</p>

<p>Réalisation de maquettes sur Figma.
Conception de la base de données et de l'organisation des différentes pages.</p>

<p>3. Développement des fonctionnalités</p>

<p>Création d'un espace client sécurisé.
Mise en place d'une messagerie interne entre le cabinet et les clients.
Développement d'un système de dépôt de documents.
Intégration d'une fonctionnalité de signature électronique.
Mise en place d'un minuteur d'échéance afin de rappeler automatiquement aux clients l'envoi de leurs documents comptables.</p>

<p>4. Sécurisation de l'application</p>

<p>Vérification des données saisies.
Protection des accès.
Mise en place de bonnes pratiques de développement.

<p>5. Tests et accompagnement</p>

<p>Vérification du bon fonctionnement des différentes fonctionnalités.
Présentation de l'application aux collaborateurs.
Sensibilisation des utilisateurs aux risques de cybersécurité (faux e-mails de phishing, création de mots de passe robustes et protection des données).</p>

          <h4>4. Problèmes rencontrés & solutions</h4>
          <p>La principale difficulté rencontrée au début du projet était de déterminer quelle problématique traiter en priorité. Le cabinet faisait face à plusieurs besoins : gestion documentaire, communication avec les clients, suivi administratif ou encore relances.

Après plusieurs échanges avec les collaborateurs, j'ai identifié que les relances des clients et la signature électronique étaient les besoins les plus importants. J'ai donc concentré mon développement sur ces fonctionnalités afin d'apporter une solution réellement utile au quotidien.

J'ai également dû réfléchir à une interface simple et intuitive, adaptée à des utilisateurs peu familiers avec les outils informatiques. Pour cela, j'ai privilégié une navigation claire, des actions facilement identifiables et un nombre limité d'étapes pour effectuer les principales tâches.</p>

          <h4>5. Bilan & conclusion</h4>
          <p>Ce projet m'a permis de développer mes compétences en développement web full-stack, en conception d'interfaces utilisateur et en gestion de projet.

J'ai appris à analyser les besoins d'une entreprise, à proposer une solution adaptée et à développer une application répondant à des problématiques concrètes.

Au-delà des compétences techniques, cette expérience m'a sensibilisé à l'importance de la cybersécurité. J'ai pu accompagner les utilisateurs dans l'adoption de bonnes pratiques, notamment concernant les mots de passe sécurisés et la reconnaissance des tentatives de phishing.

Ce projet m'a également permis de mieux comprendre les contraintes d'un cabinet comptable et l'importance de concevoir des outils simples, fiables et adaptés aux utilisateurs.</p>

          <!-- Galerie carrousel -->
          <div class="modal-gallery">
            <div class="modal-gallery-title">Captures d'écran du projet</div>
            <div class="carousel-wrapper" id="carousel-1">
              <div class="carousel-track" id="track-1">
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                    <img src="images/sogex1.png" alt="Sogex">
                  </div>
                </div>
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                    <img src="images/sogex2.png" alt="Sogex">
                  </div>
                </div>
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                    <img src="images/sogex3.png" alt="Sogex">
                  </div>
                </div>
              </div>
              <button class="carousel-btn carousel-prev" onclick="moveCarousel('carousel-1', -1)">‹</button>
              <button class="carousel-btn carousel-next" onclick="moveCarousel('carousel-1', 1)">›</button>
            </div>
            <div class="carousel-dots" id="dots-1">
              <div class="carousel-dot active" onclick="goToSlide('carousel-1', 0)"></div>
              <div class="carousel-dot" onclick="goToSlide('carousel-1', 1)"></div>
              <div class="carousel-dot" onclick="goToSlide('carousel-1', 2)"></div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" onclick="closeModal('modalSituation1')">← Retour au portfolio</button>
        </div>
      </div>
    </div>

    <!-- Carte projet 2 -->
    <div class="sp-card" onclick="openModal('modalSituation2')">
      <div class="sp-card-cover">
        <img src="images/fandom.png" alt="Fandom">
      </div>
      <div class="sp-card-body">
        <span class="sp-tag stage">Cours</span>
        <h3 class="sp-card-title">Projet 2 — Fandom</h3>
        <p class="sp-card-desc">Développement d'un site web pour une communauté de fans. Une page de réferenciel sur les personnages et l'univers de marvels et dc comics.</p>
        <div class="sp-card-cta">Voir le détail →</div>
      </div>
    </div>

    <!-- Modale projet 2 -->
    <div class="modal" id="modalSituation2">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Projet 2 — Fandom</h3>
          <button type="button" class="modal-close" onclick="closeModal('modalSituation2')">✕</button>
        </div>
        <div class="modal-body">

          <h4>1. Contexte & besoin</h4>
          <p>Ce projet a été réalisé dans le cadre de ma formation afin d'apprendre les bases du développement web. J'ai choisi de créer un site consacré à l'univers Marvel et DC Comics, car c'est un sujet qui me passionne. L'objectif était de proposer une présentation simple des personnages et de leurs univers.</p>

          <h4>2. Environnement technologique</h4>
          <p>Langages : HTML, CSS </p>
          <p>Outils : Visual Studio Code, Figma</p>
          <p>Système : Windows</p>

          <h4>3. Réalisations détaillées</h4>
          <p>1. Recherche du sujet</p>
<p>Choix d'un thème en lien avec mes centres d'intérêt.

<p>2. Conception</p>

<p>Réalisation de maquettes sur Figma.</p>

<p>3. Développement</p>

<p>Création des pages en HTML.
Mise en forme avec CSS.</p>

<p>4. Organisation du contenu</p>

<p>Présentation des personnages Marvel et DC Comics.
Mise en place d'une navigation simple.</p>

<p>5. Tests</p>

<p>Vérification de l'affichage et correction des erreurs.</p>

          <h4>4. Problèmes rencontrés & solutions</h4>
          <p>La principale difficulté a été de trouver une idée de projet pertinente. Après réflexion, j'ai choisi un sujet qui me plaisait afin de rester motivé. J'ai également rencontré quelques difficultés avec le CSS, résolues grâce à la pratique et aux recherches.</p>

          <h4>5. Bilan & conclusion</h4>
          <p>Ce projet m'a permis d'apprendre les bases du HTML et du CSS, de comprendre la structure d'un site web et de développer mes premières compétences en conception d'interfaces.</p>

          <div class="modal-gallery">
            <div class="modal-gallery-title">Captures d'écran du projet</div>
            <div class="carousel-wrapper" id="carousel-2">
              <div class="carousel-track" id="track-2">
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                  <img src="images/fandom1.png" alt="Fandom">
                  </div>
                </div>
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                  <img src="images/fandom2.png" alt="Fandom">
                  </div>
                </div>
                <div class="carousel-slide">
                  <div class="carousel-slide-placeholder">
                    <span>🗃️</span>
                    <img src="images/fandom3.png" alt="Fandom">
                  </div>
                </div>
              </div>
              <button class="carousel-btn carousel-prev" onclick="moveCarousel('carousel-2', -1)">‹</button>
              <button class="carousel-btn carousel-next" onclick="moveCarousel('carousel-2', 1)">›</button>
            </div>
            <div class="carousel-dots" id="dots-2">
              <div class="carousel-dot active" onclick="goToSlide('carousel-2', 0)"></div>
              <div class="carousel-dot" onclick="goToSlide('carousel-2', 1)"></div>
              <div class="carousel-dot" onclick="goToSlide('carousel-2', 2)"></div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" onclick="closeModal('modalSituation2')">← Retour au portfolio</button>
        </div>
      </div>
    </div>

    <!-- Placeholders année prochaine -->
    <div class="sp-placeholder">
      <div class="sp-placeholder-icon">＋</div>
      <div class="sp-placeholder-text">Situation professionnelle 3<br><small>2e année — à venir</small></div>
    </div>
    <div class="sp-placeholder">
      <div class="sp-placeholder-icon">＋</div>
      <div class="sp-placeholder-text">Situation professionnelle 4<br><small>2e année — à venir</small></div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>