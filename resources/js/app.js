import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 0,
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
            link.classList.remove('text-[#05cbc8]'); // 'active' sınıfını kaldır
        });

        // Tıklanan linke 'active' sınıfı ekle
        item.classList.add('text-[#05cbc8]');
    });
});



document.querySelectorAll('.mobile-menu-link').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.mobile-menu-link').forEach(link => {
            link.classList.remove('text-[#05cbc8]');
        });
        item.classList.add('text-[#05cbc8]');
    });
});
document.querySelectorAll('.menu-link').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.menu-link').forEach(link => {
            link.classList.remove('text-[#05cbc8]');
        });
        item.classList.add('text-[#05cbc8]');
    });
});

  document.querySelectorAll('.mobile-menu-link').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.mobile-menu-link').forEach(link => {
            link.classList.remove('text-[#05cbc8]');
        });
        item.classList.add('text-[#05cbc8]');
    });
});

    const menuToggle = document.getElementById("menu-toggle");
    const menuClose = document.getElementById("menu-close");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuLinks = document.querySelectorAll(".mobile-menu-link");

    menuToggle.addEventListener("click", function() {
        mobileMenu.classList.remove("top-[-100%]", "opacity-0", "pointer-events-none");
        mobileMenu.classList.add("top-0", "opacity-100");
    });

    menuClose.addEventListener("click", function() {
        mobileMenu.classList.remove("top-0", "opacity-100");
        mobileMenu.classList.add("top-[-100%]", "opacity-0", "pointer-events-none");
    });

    document.addEventListener("click", function(event) {
        if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
            mobileMenu.classList.remove("top-0", "opacity-100");
            mobileMenu.classList.add("top-[-100%]", "opacity-0", "pointer-events-none");
        }
    });

    mobileMenuLinks.forEach(link => {
        link.addEventListener("click", function() {
            mobileMenu.classList.remove("top-0", "opacity-100");
            mobileMenu.classList.add("top-[-100%]", "opacity-0", "pointer-events-none");
        });
    });