// Initialize AOS (Animate on Scroll)
AOS.init({
  duration: 1000,  // animation duration in ms
  once: true       // animation happens only once when scrolled into view
});

// Smooth scroll for internal links (optional if using Bootstrap scroll-behavior)
document.querySelectorAll('a.nav-link').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
