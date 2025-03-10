import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //     delay: 8500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    simulateTouch: false,  // Fareyle sürüklemeyi engeller
    allowTouchMove: false, // Sayfa geçişi için dokunmatik hareketleri engeller
    on: {
        slideChange: function () {
            // Her slayt değişiminde animasyonu sıfırlayarak yalnızca aktif slaytta başlatıyoruz
            const activeSlide = this.slides[this.activeIndex];
            const allSlides = this.slides;

            // Animasyonun başlaması için önce tüm slaytlarda animasyonu sıfırlıyoruz
            allSlides.forEach(slide => {
                const img = slide.querySelector('.slider-zoom');
                if (img) {
                    img.style.animation = 'none'; // Animasyonu sıfırla
                }
            });

            // Aktif slaytta animasyonu tekrar başlatıyoruz
            const activeImage = activeSlide.querySelector('.slider-zoom');
            if (activeImage) {
                activeImage.style.animation = 'zoomEffect 15s linear forwards'; // Animasyonu başlat
            }
        }
    }
});
document.querySelectorAll('.menu-link').forEach(item => {
    item.addEventListener('click', function() {
        // Tüm menü linklerinden 'active' sınıfını kaldır
        document.querySelectorAll('.menu-link').forEach(link => {
            link.classList.remove('text-violet-700'); // 'active' sınıfını kaldır
        });

        // Tıklanan linke 'active' sınıfı ekle
        item.classList.add('text-violet-700');
    });
});
