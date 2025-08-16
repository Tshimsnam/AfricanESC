import AOS from 'aos';

document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-lg');
            navbar.classList.remove('bg-opacity-90');
        } else {
            navbar.classList.remove('shadow-lg');
            navbar.classList.add('bg-opacity-90');
        }
    });

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.remove('opacity-0', 'invisible');
            backToTopButton.classList.add('opacity-100', 'visible');
        } else {
            backToTopButton.classList.add('opacity-0', 'invisible');
            backToTopButton.classList.remove('opacity-100', 'visible');
        }
    });

    if (backToTopButton) {
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    const controls = document.querySelectorAll('.slide-control');
    const prevArrow = document.querySelector('.fa-chevron-left').parentElement;
    const nextArrow = document.querySelector('.fa-chevron-right').parentElement;
    let currentSlide = 0;
    let slideInterval;
    let isHovering = false;

    function showSlide(index) {
        // Masquer toutes les slides
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.style.opacity = '0';
        });

        // Afficher la slide sélectionnée
        slides[index].classList.add('active');
        slides[index].style.opacity = '1';

        // Mettre à jour les contrôles
        controls.forEach(control => {
            control.classList.remove('active');
            control.style.opacity = '0.5';
        });
        controls[index].classList.add('active');
        controls[index].style.opacity = '1';

        currentSlide = index;
    }

    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function prevSlide() {
        const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    // Démarrer le slider automatique
    function startSlider() {
        if (!isHovering) {
            slideInterval = setInterval(nextSlide, 4000); // Change toutes les 5 secondes
        }
    }

    // Arrêter le slider automatique
    function stopSlider() {
        clearInterval(slideInterval);
    }

    // Ajouter des événements aux contrôles
    controls.forEach(control => {
        control.addEventListener('click', function () {
            stopSlider();
            showSlide(parseInt(this.getAttribute('data-slide')));
            startSlider();
        });
    });

    // Navigation par flèches
    nextArrow.addEventListener('click', function () {
        stopSlider();
        nextSlide();
        startSlider();
    });

    prevArrow.addEventListener('click', function () {
        stopSlider();
        prevSlide();
        startSlider();
    });

    // Gestion du survol
    document.querySelector('.slider-container').addEventListener('mouseenter', function () {
        isHovering = true;
        stopSlider();
    });

    document.querySelector('.slider-container').addEventListener('mouseleave', function () {
        isHovering = false;
        startSlider();
    });

    // Navigation au clavier
    document.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight') {
            stopSlider();
            nextSlide();
            startSlider();
        } else if (e.key === 'ArrowLeft') {
            stopSlider();
            prevSlide();
            startSlider();
        }
    });

    // Initialisation
    showSlide(0);
    startSlider();
});


