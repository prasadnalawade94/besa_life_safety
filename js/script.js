// Hero Slider
const slides = document.querySelectorAll('.hero .slide');
const indicators = document.querySelector('.hero-indicators');
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

// Quote form modal
const quoteModal = document.getElementById('quote-modal');
const quoteOpeners = document.querySelectorAll('[data-quote-open]');
const quoteCloser = quoteModal?.querySelector('[data-quote-close]');

function closeQuoteModal() {
  if (!quoteModal) return;
  quoteModal.classList.remove('is-open');
  quoteModal.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
}

function openQuoteModal(event) {
  event.preventDefault();
  if (!quoteModal) return;
  quoteModal.classList.add('is-open');
  quoteModal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
  quoteCloser?.focus();
}

quoteOpeners.forEach(opener => opener.addEventListener('click', openQuoteModal));
quoteCloser?.addEventListener('click', closeQuoteModal);
quoteModal?.addEventListener('click', event => {
  if (event.target === quoteModal) closeQuoteModal();
});
document.addEventListener('keydown', event => {
  if (event.key === 'Escape') closeQuoteModal();
});


if (slides.length && indicators) {
  let current = 0;

  slides.forEach((_, index) => {
    const dot = document.createElement('button');
    dot.className = 'dot';
    dot.type = 'button';
    dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
    dot.dataset.index = index;
    if (index === 0) dot.classList.add('active');

    dot.addEventListener('click', () => {
      clearInterval(heroTimer);
      goTo(index);
      heroTimer = setInterval(() => goTo(current + 1), 6000);
    });

    indicators.appendChild(dot);
  });

  const dots = document.querySelectorAll('.hero-indicators .dot');

  function goTo(index) {
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = (index + slides.length) % slides.length;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
  }

  let heroTimer = setInterval(() => goTo(current + 1), 6000);

  document.querySelectorAll('.hero-prev, .hero-next').forEach(btn => {
    btn.addEventListener('click', (e) => {
      clearInterval(heroTimer);
      if (e.currentTarget.classList.contains('hero-prev')) {
        goTo(current - 1);
      } else {
        goTo(current + 1);
      }
      heroTimer = setInterval(() => goTo(current + 1), 6000);
    });
  });
}

// Mobile nav
const mobileToggle = document.getElementById('mobileToggle');
const navLinks = document.querySelector('.nav-links');

function closeNav() {
  if (!navLinks) return;
  navLinks.classList.remove('open');
  document.body.classList.remove('nav-open');
  if (mobileToggle) {
    const icon = mobileToggle.querySelector('i');
    if (icon) icon.className = 'fa fa-bars';
  }
}

function openNav() {
  if (!navLinks) return;
  navLinks.classList.add('open');
  document.body.classList.add('nav-open');
  if (mobileToggle) {
    const icon = mobileToggle.querySelector('i');
    if (icon) icon.className = 'fa fa-times';
  }
}

if (mobileToggle && navLinks) {
  mobileToggle.addEventListener('click', () => {
    if (navLinks.classList.contains('open')) closeNav();
    else openNav();
  });

  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => closeNav());
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 900) closeNav();
  });
}

// Product / project carousels
document.querySelectorAll('.carousel-prev, .carousel-next').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = btn.dataset.target;
    const track = document.querySelector(`.carousel[data-carousel="${target}"]`);
    if (!track) return;
    const amount = Math.max(track.clientWidth * 0.75, 220);
    track.scrollBy({
      left: btn.classList.contains('carousel-prev') ? -amount : amount,
      behavior: 'smooth'
    });
  });
});

// Addressable / Conventional product tabs
document.querySelectorAll('.product-tabs').forEach(tabList => {
  const tabs = tabList.querySelectorAll('.product-tab');
  const container = tabList.parentElement;
  if (!container) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const id = tab.dataset.tab;
      tabs.forEach(t => {
        t.classList.toggle('active', t === tab);
        t.setAttribute('aria-selected', t === tab ? 'true' : 'false');
      });
      container.querySelectorAll('.product-tab-panel').forEach(panel => {
        const match = panel.id === `tab-${id}`;
        panel.classList.toggle('active', match);
        if (match) panel.removeAttribute('hidden');
        else panel.setAttribute('hidden', '');
      });
    });
  });
});

// Sticky navbar shadow
const navbar = document.querySelector('.navbar');
if (navbar) {
  const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 12);
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
}

// Scroll-in animations
const revealSelectors = [
  '.section-title',
  '.page-header',
  '.about-copy',
  '.about-stat-card',
  '.service-card',
  '.supplier-card',
  '.service-highlight',
  '.project-card',
  '.eaton-card',
  '.eaton-section',
  '.eaton-highlight',
  '.ekavis-feature',
  '.ekavis-intro',
  '.gas-spec-sheet',
  '.eaton-brand-bar',
  '.eaton-mcp'
];

if (!reduceMotion) {
  const targets = document.querySelectorAll(revealSelectors.join(','));
  const groups = new Map();

  targets.forEach(el => {
    el.classList.add('reveal');
    const parent = el.parentElement;
    if (!groups.has(parent)) groups.set(parent, []);
    groups.get(parent).push(el);
  });

  groups.forEach(items => {
    items.forEach((el, i) => {
      el.style.transitionDelay = `${Math.min(i * 70, 420)}ms`;
    });
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('in-view');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  targets.forEach(el => observer.observe(el));
}

// Count-up stats
function animateCount(el) {
  const raw = el.textContent.trim();
  const match = raw.match(/^(\d+)(.*)$/);
  if (!match) return;
  const end = parseInt(match[1], 10);
  const suffix = match[2];
  const duration = 1200;
  const start = performance.now();

  function tick(now) {
    const t = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - t, 3);
    el.textContent = Math.round(end * eased) + suffix;
    if (t < 1) requestAnimationFrame(tick);
  }

  requestAnimationFrame(tick);
}

if (!reduceMotion) {
  const stats = document.querySelectorAll('.about-stat-card strong');
  if (stats.length) {
    const statObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        animateCount(entry.target);
        statObserver.unobserve(entry.target);
      });
    }, { threshold: 0.4 });
    stats.forEach(el => statObserver.observe(el));
  }
}
