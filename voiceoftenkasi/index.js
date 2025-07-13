  function scrollGallery(direction) {
    const container = document.getElementById('galleryScroll');
    const scrollAmount = 300 * direction; // adjust for your card width
    container.scrollBy({
      left: scrollAmount,
      behavior: 'smooth'
    });
  }

  ScrollReveal().reveal('.sr-about-heading', {
    origin: 'left',
    distance: '50px',
    duration: 800,
    delay: 100,
    easing: 'ease-in-out'
  });

  ScrollReveal().reveal('.sr-about-text', {
    origin: 'bottom',
    distance: '30px',
    duration: 800,
    delay: 200
  });

  ScrollReveal().reveal('.sr-goal-heading', {
    origin: 'top',
    distance: '20px',
    duration: 600,
    delay: 300
  });

  ScrollReveal().reveal('.sr-goal-item', {
    origin: 'bottom',
    distance: '20px',
    duration: 600,
    delay: 400,
    interval: 150
  });

  ScrollReveal().reveal('.sr-about-image', {
    origin: 'right',
    distance: '60px',
    duration: 1000,
    delay: 300
  });

 AOS.init({
    once: true,           // Animate only once
    duration: 800,        // Animation duration in ms
    offset: 100,          // Trigger offset from viewport
    easing: 'ease-in-out' // Easing style
  });