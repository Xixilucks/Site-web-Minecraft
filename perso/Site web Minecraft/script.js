const navbar = document.querySelector('.navbar');

navbar.addEventListener('mouseenter', () => {
  navbar.style.width = '200px';
});

navbar.addEventListener('mouseleave', () => {
  navbar.style.width = '60px';
});

