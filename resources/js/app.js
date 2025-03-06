import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener("DOMContentLoaded", function() {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileNav = document.querySelector('.mobile-nav');

    // Butona tıklandığında mobil menüyü açıp kapama
    mobileMenuButton.addEventListener('click', () => {
        mobileNav.classList.toggle('open'); // Menü açma/kapama
    });
});
