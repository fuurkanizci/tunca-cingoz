import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';

const swiper = new Swiper();
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// init Swiper:
const swiper = new Swiper('.swiper', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
    ...
});
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileNav = document.querySelector('.mobile-nav');

    // Butona tıklandığında mobil menüyü açıp kapama
    mobileMenuButton.addEventListener('click', () => {
        mobileNav.classList.toggle('open'); // Menü açma/kapama
    });
});
