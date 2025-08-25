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

// ==================== SYSTÈME DE TRADUCTION ====================

// Dictionnaire de traductions
const translations = {
    'fr': {
        // Navigation
        'nav.home': 'Accueil',
        'nav.services': 'Services',
        'nav.solutions': 'Solutions',
        'nav.sectors': 'Secteurs',
        'nav.contact': 'Contact',
        'nav.brochure': 'Télécharger la Brochure',
        'nav.language': 'Langue',

        // Hero Section
        'hero.title1': 'Consulting Environnemental Africain',
        'hero.title2': 'et Développement Durable',
        'hero.subtitle': 'Rejoignez notre mouvement pour un avenir durable avec des solutions écologiques innovantes',
        'hero.cta.join': 'Nous rejoindre',
        'hero.cta.discover': 'Découvrir',

        // Services Cards
        'services.bio.title': 'ENVIRONNEMENT BIOPHYSIQUE',
        'services.bio.desc': 'Évaluations environnementales complètes et stratégies d\'atténuation',
        'services.view_all': 'Voir tout',

        'services.social.title': 'ENVIRONNEMENT SOCIAL',
        'services.social.desc': 'Relations communautaires et développement social durable',

        'services.hydro.title': 'HYDROGÉOLOGIE & HYDROLOGIE',
        'services.hydro.desc': 'Solutions intégrées de gestion des ressources en eau',

        'services.geo.title': 'GÉOTECHNIQUE',
        'services.geo.desc': 'Études techniques des sols et foundations',

        'services.training.title': 'FORMATION',
        'services.training.desc': 'Programmes de renforcement des capacités',

        // Modal Services Details
        'modal.bio.title': 'Environnement Biophysique',
        'modal.social.title': 'Environnement Social',
        'modal.hydro.title': 'Hydrogéologie & Hydrologie',
        'modal.geo.title': 'Géotechnique',
        'modal.training.title': 'Formation',

        // Sections
        'section.missions': 'Nos Missions',
        'section.solutions': 'Nos Solutions',
        'section.actions': 'Nos Secteurs d\'Activité',
        'section.contact': 'Contactez-nous',

        // Footer
        'footer.about': 'À propos',
        'footer.services': 'Services',
        'footer.contact': 'Contact',
        'footer.rights': 'Tous droits réservés',

        // Autres textes
        'read_more': 'Lire plus',
        'download': 'Télécharger',
        'learn_more': 'En savoir plus',
        'get_started': 'Commencer'
    },
    'en': {
        // Navigation
        'nav.home': 'Home',
        'nav.services': 'Services',
        'nav.solutions': 'Solutions',
        'nav.sectors': 'Sectors',
        'nav.contact': 'Contact',
        'nav.brochure': 'Download Brochure',
        'nav.language': 'Language',

        // Hero Section
        'hero.title1': 'African Environmental',
        'hero.title2': 'and Sustainability Consulting',
        'hero.subtitle': 'Join our movement for a sustainable future with innovative ecological solutions',
        'hero.cta.join': 'Join Us',
        'hero.cta.discover': 'Discover',

        // Services Cards
        'services.bio.title': 'BIOPHYSICAL ENVIRONMENT',
        'services.bio.desc': 'Comprehensive environmental assessments and mitigation strategies',
        'services.view_all': 'View All',

        'services.social.title': 'SOCIAL ENVIRONMENT',
        'services.social.desc': 'Community relations and sustainable social development',

        'services.hydro.title': 'HYDROGEOLOGY & HYDROLOGY',
        'services.hydro.desc': 'Integrated water resource management solutions',

        'services.geo.title': 'GEOTECHNIC',
        'services.geo.desc': 'Soil and foundation technical studies',

        'services.training.title': 'TRAINING',
        'services.training.desc': 'Capacity building programs',

        // Modal Services Details
        'modal.bio.title': 'Biophysical Environment',
        'modal.social.title': 'Social Environment',
        'modal.hydro.title': 'Hydrogeology & Hydrology',
        'modal.geo.title': 'Geotechnic',
        'modal.training.title': 'Training',

        // Sections
        'section.missions': 'Our Missions',
        'section.solutions': 'Our Solutions',
        'section.actions': 'Our Sectors',
        'section.contact': 'Contact Us',

        // Footer
        'footer.about': 'About',
        'footer.services': 'Services',
        'footer.contact': 'Contact',
        'footer.rights': 'All rights reserved',

        // Autres textes
        'read_more': 'Read more',
        'download': 'Download',
        'learn_more': 'Learn more',
        'get_started': 'Get started'
    }
};

// ==================== FONCTIONS DE TRADUCTION ====================

function changeLanguage(lang) {
    // Sauvegarder la préférence
    localStorage.setItem('preferredLanguage', lang);

    // Mettre à jour l'attribut lang de la page
    document.documentElement.lang = lang;

    // Appliquer les traductions
    applyTranslations(lang);

    // Synchroniser les sélecteurs de langue
    updateLanguageSelectors(lang);

    // Mettre à jour les meta tags pour le SEO
    updateMetaTags(lang);
}

function applyTranslations(lang) {
    const translationSet = translations[lang];

    // Traduire tous les éléments avec data-translate
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translationSet[key]) {
            element.textContent = translationSet[key];
        }
    });

    // Traduire les placeholders
    document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
        const key = element.getAttribute('data-translate-placeholder');
        if (translationSet[key]) {
            element.placeholder = translationSet[key];
        }
    });

    // Traduire les attributs alt
    document.querySelectorAll('[data-translate-alt]').forEach(element => {
        const key = element.getAttribute('data-translate-alt');
        if (translationSet[key]) {
            element.alt = translationSet[key];
        }
    });

    // Traduire les titles
    document.querySelectorAll('[data-translate-title]').forEach(element => {
        const key = element.getAttribute('data-translate-title');
        if (translationSet[key]) {
            element.title = translationSet[key];
        }
    });
}

function updateLanguageSelectors(lang) {
    const selectDesktop = document.getElementById('languageSelectDesktop');
    const selectMobile = document.getElementById('languageSelectMobile');

    if (selectDesktop) selectDesktop.value = lang;
    if (selectMobile) selectMobile.value = lang;
}

function updateMetaTags(lang) {
    // Mettre à jour la direction meta pour les langues RTL si nécessaire
    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';

    // Mettre à jour le meta description (optionnel)
    const metaDescription = document.querySelector('meta[name="description"]');
    if (metaDescription) {
        metaDescription.setAttribute('content', translations[lang].metaDescription || '');
    }
}

// ==================== INITIALISATION ====================

document.addEventListener('DOMContentLoaded', function() {
    // Charger la langue sauvegardée ou détecter
    const savedLanguage = localStorage.getItem('preferredLanguage');
    const browserLanguage = navigator.language.split('-')[0];
    const defaultLanguage = savedLanguage || (['fr', 'en'].includes(browserLanguage) ? browserLanguage : 'fr');

    // Appliquer la langue
    changeLanguage(defaultLanguage);

    // Écouter les changements de sélecteur
    const selectDesktop = document.getElementById('languageSelectDesktop');
    const selectMobile = document.getElementById('languageSelectMobile');

    if (selectDesktop) {
        selectDesktop.addEventListener('change', (e) => changeLanguage(e.target.value));
    }

    if (selectMobile) {
        selectMobile.addEventListener('change', (e) => changeLanguage(e.target.value));
    }
});

// ==================== FONCTIONS UTILITAIRES ====================

// Pour les traductions dynamiques en JavaScript
function translate(key, lang = null) {
    const language = lang || localStorage.getItem('preferredLanguage') || 'fr';
    return translations[language][key] || key;
}

// Pour les templates avec variables
function translateWithParams(key, params, lang = null) {
    let text = translate(key, lang);
    Object.keys(params).forEach(param => {
        text = text.replace(`{${param}}`, params[param]);
    });
    return text;
}

