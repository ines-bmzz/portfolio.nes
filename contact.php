<?php $page_title = 'Contact — Ines Boumaiza'; include 'includes/header.php'; ?>

<section id="contact">
  <div class="section-label">Me retrouver</div>
  <h2 class="section-title">Me <span class="accent">contacter</span></h2>

  <div class="contact-grid">
    <!-- Colonne gauche : liens -->
    <div>
      <p class="contact-text">
        Disponible pour une <strong>alternance</strong> à partir de septembre 2025, ou simplement pour échanger sur un projet. N'hésitez pas à me contacter via les réseaux ci-dessous ou directement via le formulaire.
      </p>

      <div class="contact-links">
        <a href="mailto:ines.boumaiza04@gmail.com" class="contact-link mail">
          <span class="cl-icon mail">@</span>
          <div class="cl-text">
            <div class="t">Email</div>
            <div class="s">ines.boumaiza04@gmail.com</div>
          </div>
          <span class="cl-arrow">↗</span>
        </a>
        <a href="https://www.linkedin.com/in/ines-bouma%C3%AFza-90a57338a/" class="contact-link li" target="_blank">
          <span class="cl-icon li">in</span>
          <div class="cl-text">
            <div class="t">LinkedIn</div>
            <div class="s">ines-boumaiza</div>
          </div>
          <span class="cl-arrow">↗</span>
        </a>
        <a href="https://github.com/ines-bmzz" class="contact-link git" target="_blank">
          <span class="cl-icon git">gh</span>
          <div class="cl-text">
            <div class="t">GitHub</div>
            <div class="s">ines-bmzz</div>
          </div>
          <span class="cl-arrow">↗</span>
        </a>
      </div>
    </div>

    <!-- Colonne droite : formulaire -->
    <div>
      <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success" style="margin-bottom:1rem;"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
      <?php endif; ?>
      <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-error" style="margin-bottom:1rem;"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
      <?php endif; ?>

      <form class="contact-form" method="POST" action="php/form.php">
        <div class="form-group">
          <label class="form-label" for="name">Nom complet *</label>
          <input class="form-input" type="text" id="name" name="name" placeholder="Ex : Marie Dupont" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="email">Email *</label>
          <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required>
        </div>
        <div class="form-group">
          <label class="form-label" for="subject">Objet</label>
          <input class="form-input" type="text" id="subject" name="subject" placeholder="Ex : Proposition d'alternance">
        </div>
        <div class="form-group">
          <label class="form-label" for="message">Message *</label>
          <textarea class="form-textarea" id="message" name="message" placeholder="Votre message ici…" required></textarea>
        </div>
        <button type="submit" class="form-submit">Envoyer le message →</button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>