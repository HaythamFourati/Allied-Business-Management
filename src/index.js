


if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('mobileMenuBtn');
  const menu = document.getElementById('mobileMenu');
  if (btn && menu) {
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));
  }

  // Reveal on scroll
  const els = document.querySelectorAll('.reveal');
  const show = (el) => {
    el.classList.remove('opacity-0', 'translate-y-4');
    el.classList.add('opacity-100', 'translate-y-0');
  };
  els.forEach((el) => {
    el.classList.add('opacity-0', 'translate-y-4');
    const obs = new IntersectionObserver((entries, observer) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          show(el);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.15 });
    obs.observe(el);
  });
});
