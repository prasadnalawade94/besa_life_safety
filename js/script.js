document.addEventListener('DOMContentLoaded', function(){
  // Mobile menu toggle
  const toggle = document.getElementById('mobileToggle');
  const nav = document.querySelector('.nav-links');
  toggle.addEventListener('click', ()=>{
    nav.classList.toggle('open');
    toggle.classList.toggle('open');
  });

  // Simple hero slider
  const slides = document.querySelectorAll('.hero .slide');
  const dots = document.querySelectorAll('.hero-indicators .dot');
  let current = 0;
  function goTo(index){
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = (index+slides.length)%slides.length;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
  }
  dots.forEach(d=>d.addEventListener('click', (e)=>{goTo(parseInt(e.target.dataset.index))}));
  let heroTimer = setInterval(()=>{goTo(current+1)}, 6000);
  // hero prev/next
  document.querySelectorAll('.hero-prev, .hero-next').forEach(btn=>{
    btn.addEventListener('click', (e)=>{
      clearInterval(heroTimer);
      if(e.target.closest('.hero-prev')) goTo(current-1); else goTo(current+1);
      heroTimer = setInterval(()=>{goTo(current+1)}, 6000);
    });
  });

  // Improve images loading by adding lazy attribute when present
  document.querySelectorAll('img').forEach(img=>{img.loading = 'lazy'});

  // Smooth anchor scrolling for site links
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',(e)=>{
      const href = a.getAttribute('href');
      if(href.length>1){
        const el = document.querySelector(href);
        if(el){
          e.preventDefault();
          el.scrollIntoView({behavior:'smooth', block:'start'});
          // close mobile nav if open
          if(nav.classList.contains('open')){nav.classList.remove('open');toggle.classList.remove('open')}
        }
      }
    })
  });

  // Generic horizontal carousel controller
  function initCarousel(name){
    const wrap = document.querySelector(`.carousel[data-carousel="${name}"]`);
    if(!wrap) return;
    const prev = document.querySelector(`.carousel-prev[data-target="${name}"]`);
    const next = document.querySelector(`.carousel-next[data-target="${name}"]`);
    const step = wrap.children[0] ? wrap.children[0].getBoundingClientRect().width + 18 : 240;
    prev && prev.addEventListener('click', ()=>{ wrap.scrollBy({left: -step, behavior:'smooth'})});
    next && next.addEventListener('click', ()=>{ wrap.scrollBy({left: step, behavior:'smooth'})});
  }
  ['products','partners','projects'].forEach(initCarousel);
});
