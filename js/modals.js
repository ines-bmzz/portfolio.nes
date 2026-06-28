// modals.js — Gestion des modales et carrousels

// ── Modales ──
function openModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'flex';
    modal.classList.add('modal-open');
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(modalId) {
  const modal = document.getElementById(modalId);
  if (modal) {
    modal.style.display = 'none';
    modal.classList.remove('modal-open');
    document.body.style.overflow = '';
  }
}

document.addEventListener('DOMContentLoaded', function () {

  // Fermer en cliquant en dehors
  document.querySelectorAll('.modal').forEach(modal => {
    modal.addEventListener('click', function (e) {
      if (e.target === this) closeModal(this.id);
    });
  });

  // Fermer avec Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      document.querySelectorAll('.modal.modal-open').forEach(m => closeModal(m.id));
    }
  });

});

// ── Carrousel ──
const carouselState = {};

function initCarousel(id) {
  if (!carouselState[id]) carouselState[id] = 0;
}

function moveCarousel(wrapperId, dir) {
  initCarousel(wrapperId);
  const track = document.getElementById('track-' + wrapperId.split('-')[1]);
  const dots  = document.getElementById('dots-' + wrapperId.split('-')[1]);
  if (!track) return;
  const total = track.children.length;
  carouselState[wrapperId] = (carouselState[wrapperId] + dir + total) % total;
  updateCarousel(wrapperId, track, dots);
}

function goToSlide(wrapperId, index) {
  initCarousel(wrapperId);
  const track = document.getElementById('track-' + wrapperId.split('-')[1]);
  const dots  = document.getElementById('dots-' + wrapperId.split('-')[1]);
  carouselState[wrapperId] = index;
  updateCarousel(wrapperId, track, dots);
}

function updateCarousel(wrapperId, track, dots) {
  const idx = carouselState[wrapperId];
  track.style.transform = `translateX(-${idx * 100}%)`;
  if (dots) {
    dots.querySelectorAll('.carousel-dot').forEach((d, i) => {
      d.classList.toggle('active', i === idx);
    });
  }
}