// ── NAV ACTIVE STATE ──
(function() {
  const links = document.querySelectorAll('.nav-links a');
  const path = window.location.pathname.split('/').pop() || 'index.html';
  links.forEach(a => {
    if (a.getAttribute('href') === path) a.classList.add('active');
  });

  // Hamburger
  const ham = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav-links');
  if (ham && nav) {
    ham.addEventListener('click', () => nav.classList.toggle('open'));
  }
})();

// ── MODAL SYSTEM ──
const Modal = {
  overlay: null,
  init() {
    this.overlay = document.getElementById('modalOverlay');
    if (!this.overlay) return;
    this.overlay.addEventListener('click', e => {
      if (e.target === this.overlay) this.close();
    });
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') this.close();
    });
    document.querySelectorAll('.modal-close').forEach(btn => {
      btn.addEventListener('click', () => this.close());
    });
    // Attach all CTA triggers
    document.querySelectorAll('[data-modal]').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        const tier = btn.dataset.tier || '';
        const recipe = btn.dataset.recipe || '';
        this.open(tier, recipe);
      });
    });
  },
  open(tier = '', recipe = '') {
    if (!this.overlay) return;
    const tierSelect = document.getElementById('modalTier');
    const recipeInput = document.getElementById('modalRecipe');
    if (tierSelect && tier) tierSelect.value = tier;
    if (recipeInput && recipe) recipeInput.value = recipe;
    this.overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  },
  close() {
    if (!this.overlay) return;
    this.overlay.classList.remove('active');
    document.body.style.overflow = '';
  }
};

// ── LEAD FORM SUBMISSION ──
function initLeadForm() {
  const form = document.getElementById('leadForm');
  if (!form) return;
  form.addEventListener('submit', e => {
    e.preventDefault();
    const btn = form.querySelector('[type="submit"]');
    btn.textContent = 'Submitting...';
    setTimeout(() => {
      form.innerHTML = `
        <div style="text-align:center;padding:20px 0;">
          <div style="font-size:2.5rem;margin-bottom:16px;">✓</div>
          <h4 style="font-family:'Jost',sans-serif;font-weight:900;font-size:1.2rem;margin-bottom:8px;text-transform:uppercase;">You're In!</h4>
          <p style="color:#555;font-size:0.88rem;">Check your inbox for your first recipe unlock. Welcome to Flavor & Form.</p>
        </div>`;
    }, 800);
  });
}

// ── COOKIE BANNER ──
function initCookie() {
  const banner = document.getElementById('cookieBanner');
  if (!banner) return;
  if (localStorage.getItem('ff_cookie_consent')) return;
  setTimeout(() => banner.classList.add('visible'), 1200);
  document.getElementById('cookieAccept')?.addEventListener('click', () => {
    localStorage.setItem('ff_cookie_consent', 'all');
    banner.classList.remove('visible');
  });
  document.getElementById('cookieManage')?.addEventListener('click', () => {
    localStorage.setItem('ff_cookie_consent', 'essential');
    banner.classList.remove('visible');
  });
}

// ── INIT ──
document.addEventListener('DOMContentLoaded', () => {
  Modal.init();
  initLeadForm();
  initCookie();
});
