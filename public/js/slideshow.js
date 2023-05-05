import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

const swiper = new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
    },

    autoplay: {
        delay: 5000,
        disableOnInteraction: false, 
    },
});


const navbar = document.querySelector('nav');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    navbar.classList.add('bg-black');
    navbar.classList.remove('mt-14');
  } else {
    navbar.classList.remove('bg-black');
    navbar.classList.add('mt-14');
  }
});