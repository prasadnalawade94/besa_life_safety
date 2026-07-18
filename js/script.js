// Hero Slider
const slides = document.querySelectorAll('.hero .slide');
const indicators = document.querySelector('.hero-indicators');

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
