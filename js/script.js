// Hero Slider
const slides = document.querySelectorAll('.hero .slide');
const indicators = document.querySelector('.hero-indicators');

let current = 0;

// Create dots dynamically
slides.forEach((_, index) => {
  const dot = document.createElement('button');
  dot.className = 'dot';
  dot.dataset.index = index;

  if (index === 0) {
    dot.classList.add('active');
  }

  dot.addEventListener('click', () => {
    clearInterval(heroTimer);
    goTo(index);
    heroTimer = setInterval(() => goTo(current + 1), 6000);
  });

  indicators.appendChild(dot);
});

// Get created dots
const dots = document.querySelectorAll('.hero-indicators .dot');

function goTo(index) {
  slides[current].classList.remove('active');
  dots[current].classList.remove('active');

  current = (index + slides.length) % slides.length;

  slides[current].classList.add('active');
  dots[current].classList.add('active');
}

// Auto slide
let heroTimer = setInterval(() => {
  goTo(current + 1);
}, 6000);

// Prev / Next buttons
document.querySelectorAll('.hero-prev, .hero-next').forEach(btn => {
  btn.addEventListener('click', (e) => {
    clearInterval(heroTimer);

    if (e.currentTarget.classList.contains('hero-prev')) {
      goTo(current - 1);
    } else {
      goTo(current + 1);
    }

    heroTimer = setInterval(() => {
      goTo(current + 1);
    }, 6000);
  });
});