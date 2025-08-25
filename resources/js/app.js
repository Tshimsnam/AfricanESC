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

        // Hero Section Biodiversity
        'hero.Biodiversity': 'Biodiversité &',
        'hero.Environmental': 'et Développement Durable',
        'hero.Safeguarding': 'Sauvegarder le patrimoine naturel de l\'Afrique',

        //hero section Social
        'hero.social':'Responsabilité sociale &',
        'hero.communities':'communautés',
        'hero.empowering':'Autonomiser les communautés, garantir l’équité',

         //hero section water
        'hero.water':'Eau &',
        'hero.hydro':'Hydrogéologie',
        'hero.smart':'Solutions d\'eau intelligentes pour l\'Afrique',

        //hero section industries
        'hero.sustainable':'Industries',
        'hero.industries':'Durable',
        'hero.responsible':'Extraction responsable, avenirs renouvelables',

        //services text
        'services1':"Nos",
        'services2':"services",
        'services3':"African for the Environment and Sustainable Development Consulting (AES Consulting) œuvre pour un avenir meilleur en offrant des services de haute qualité et des solutions spécifiques dans les domaines suivants :",

        // Services biophysique
        'services.bio.title': 'ENVIRONNEMENT BIOPHYSIQUE',
        'services.bio.desc': 'Évaluations environnementales complètes et stratégies d\'atténuation',
        'env.study':'Étude environnementale',
        'env.management':'Plan de gestion environnementale',
        'services.view_all': 'Voir tout',

        // Modal Bio Environment
        'modal.bio.title': 'Environnement Biophysique',
        'modal.close': 'Fermer',

        'services.bio.item1': 'Étude environnementale',
        'services.bio.item2': 'Plan de gestion environnementale (pour exploitation industrielle et minière artisanale)',
        'services.bio.item3': 'Évaluation de la faune et de la flore',
        'services.bio.item4': 'Évaluation des milieux aquatiques et humides',
        'services.bio.item5': 'Évaluation environnementale et sociale stratégique',
        'services.bio.item6': 'Enquêtes RSPO (Table Ronde pour l\'Huile de Palme Durable)',
        'services.bio.item7': 'Évaluation de la Haute Valeur de Conservation des espèces biologiques',
        'services.bio.item8': 'Plan de compensation biodiversité',
        'services.bio.item9': 'Plan d\'action pour la biodiversité',
        'services.bio.item10': 'Plan de réhabilitation et de fermeture des sites contaminés',
        'services.bio.item11': 'Audit environnemental',
        'services.bio.item12': 'Due Diligence pour les risques environnementaux et sociaux',
        'services.bio.item13': 'Rapport de conformité',
        'services.bio.item14': 'Rapport d\'activité',

        //services social
        'services.social.title': 'ENVIRONNEMENT SOCIAL',
        'services.social.desc': 'Favoriser l’harmonie entre l’entreprise et la communauté',
        'socio-economic':'Évaluation de l’impact socio-économique',
        'resettlement':'Plan d’action de réinstallation',
        'social.close':'Voir tout',

        //modal social environement
        'modal.social.title': 'Environnement Social',

        'services.social.item1': 'Évaluation d\'impact socio-économique',
        'services.social.item2': 'Plan d\'action de réinstallation',
        'services.social.item3': 'Plan de gestion sociale',
        'services.social.item4': 'Développement de politiques de Responsabilité Sociale d\'Entreprise',
        'services.social.item5': 'Audit de conformité aux standards sociaux',
        'services.social.item6': 'Rapport de durabilité',
        'services.social.item7': 'Engagement des parties prenantes',
        'services.social.item8': 'Gestion des relations communautaires',
        'services.social.item9': 'Développement de mécanismes de gestion des conflits et des plaintes',
        'services.social.item10': 'Évaluation des relations entre l\'entreprise et la communauté',
        'services.social.item11': 'Plan de projet communautaire pour le développement durable',


        //services Hydrogeologie & hydrologie
        'services.hydro.title': 'HYDROGÉOLOGIE & HYDROLOGIE',
        'services.hydro.desc': 'Ensemble, nous protégeons l’eau et favorisons une croissance durable.',
        'groundwater':'Évaluation des flux d’eaux souterraines et de surface',
        'execution':'Réalisation de forages d’eau potable',
        'hydro.view':'Voir tout',

        //modal hydrogeologie et hydrologie
        'modal.hydro.title': 'HYDROGÉOLOGIE & HYDROLOGIE',

        'services.hydro.item1': 'Évaluation des flux d\'eau souterraine et de surface',
        'services.hydro.item2': 'Étude de faisabilité technique et financière pour le forage de puits et l\'installation de réseaux de distribution d\'eau',
        'services.hydro.item3': 'Exécution de forages d\'eau potable',
        'services.hydro.item4': 'Détermination des zones contaminées interdites au forage d\'eau potable',
        'services.hydro.item5': 'Évaluation des risques pour le contrôle de la pollution',
        'services.hydro.item6': 'Maintenance des forages d\'eau',
        'services.hydro.item7': 'Tests de pompage et détermination du niveau de flux d\'eau des forages',
        'services.hydro.item8': 'Surveillance des travaux de forage d\'eau',
        'services.hydro.item9': 'Surveillance de la qualité de l\'eau',
        'services.hydro.item10': 'Gestion et évaluation des eaux pluviales',
        'services.hydro.item11': 'Évaluation d\'impact hydrogéologique',
        'services.hydro.item12': 'Évaluation hydrologique et hydraulique des bassins versants',

        //service geotechnic
        'services.geo.title': 'GÉOTECHNIQUE',
        'services.geo.desc': 'Garantir un sol sûr et stable pour chaque projet.',
        'surveys':'Études et essais sur site.',
        'rock':'Mécanique des roches, béton et sols',
        //modal geotechnic
        'modal.geo.title': 'GÉOTECHNIQUE',

        'services.geo.item1': 'Études et essais sur site',
        'services.geo.item2': 'Caractérisation et échantillonnage des sols : forage au diamant, tests destructifs, tarière, pelle',
        'services.geo.item3': 'Tests mécaniques : pénétromètre statique et dynamique, SPT',
        'services.geo.item4': 'Tests en laboratoire',
        'services.geo.item5': 'Identification des sols',
        'services.geo.item6': 'Caractérisation des sols',
        'services.geo.item7': 'Mécanique des roches ; béton et sol',

        //service formation
        'services.training.title': 'FORMATION',
        'services.training.desc': 'Renforcer les compétences pour la croissance.',
        'environ.maneg':'Gestion environnementale.',
        'health':'Santé et sécurité au travail',
        'health.view':'Voir tout',

        //modal formation
         'modal.training.title': 'FORMATION',

        'services.training.item1': 'Gestion environnementale',
        'services.training.item2': 'Santé et Sécurité au travail',
        'services.training.item3': 'Développement d\'Études d\'Impact Environnemental et Social (EIES), Études de Faisabilité',
        'services.training.item4': 'Conception et Gestion de Projet',
        'services.training.item5': 'Audit et Système de Management Environnemental et Social',
        'services.training.item6': 'Autres logiciels disponibles dans notre système de réseau informatique',

        // Modal Services Details
        'modal.bio.title': 'Environnement Biophysique',
        'modal.social.title': 'Environnement Social',
        'modal.hydro.title': 'Hydrogéologie & Hydrologie',
        'modal.geo.title': 'Géotechnique',
        'modal.training.title': 'Formation',
        'geotechnic.view':'Voir tout',

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

        // Hero Section Biodiversity
        'hero.Biodiversity': 'Biodiversity &',
        'hero.Environmental': 'and Sustainability Consulting',
        'hero.Safeguarding': 'Safeguarding Africa’s Natural Heritage',

        //hero section Social
        'hero.social':'Social Responsibility &',
        'hero.communities':'Communities',
        'hero.empowering':'Empowering Communities, Ensuring Equity',

        //hero section water
        'hero.water':'Water &',
        'hero.hydro':'Hydrogeology',
        'hero.smart': 'Smart Water Solutions for Africa',

        //hero section
        'hero.sustainable':'Sustainable',
        'hero.industries':'Industries',
        'hero.responsible':'Responsible Extraction, Renewable Futures',

        //services text
        'services1':"Our",
        'services2':"Services",
        'services3':"The African for the Environment and Sustainable Development Consulting (AES Consulting), work for a better future, by delivering high quality services and specific solutions in the following areas:",

        // Services Cards
        'services.bio.title': 'BIOPHYSICAL ENVIRONMENT',
        'services.bio.desc': 'Comprehensive environmental assessments and mitigation strategies.',
        'env.study':'Environmental study',
        'env.management':'Environmental Management Plan',
        'services.view_all': 'View All',

        // Modal Bio Environment
        'modal.bio.title': 'Biophysical Environment',
        'modal.close': 'Close',

        'services.bio.item1': 'Environmental study',
        'services.bio.item2': 'Environmental Management Plan (both for industrial exploitation and artisanal and small scale mining)',
        'services.bio.item3': 'Fauna and Flora Assessment',
        'services.bio.item4': 'Aquatic and wetland Assessment',
        'services.bio.item5': 'Strategic Environmental and Social Assessment',
        'services.bio.item6': 'RSPO (Round Table for Sustainable Palm Oil) surveys',
        'services.bio.item7': 'High Conservation Value of biological species Assessment',
        'services.bio.item8': 'Biodiversity compensation/off set Plan',
        'services.bio.item9': 'Biodiversity Action Plan',
        'services.bio.item10': 'Rehabilitation and closure Plan of contaminated sites',
        'services.bio.item11': 'Environmental audit',
        'services.bio.item12': 'Due Diligence for Environmental and Social Risks',
        'services.bio.item13': 'Compliance Report',
        'services.bio.item14': 'Activity Report',

        //services social
        'services.social.title': 'SOCIAL ENVIRONMENT',
        'services.social.desc': 'Fostering harmony between business and community.',
        'socio-economic':'Socio-economic impact Assessment',
        'resettlement':'Resettlement Action Plan',
        'social.close':'View All',
        //modal social environement
        'modal.social.title': 'Social Environment',

        'services.social.item1': 'Socio-economic impact Assessment',
        'services.social.item2': 'Resettlement Action Plan',
        'services.social.item3': 'Social Management Plan',
        'services.social.item4': 'Development of Corporate Social Responsibility policies',
        'services.social.item5': 'Compliance audit for social standards',
        'services.social.item6': 'Sustainability Report',
        'services.social.item7': 'Stakeholders Engagement',
        'services.social.item8': 'Community Relations Management',
        'services.social.item9': 'Development of mechanism for Conflict and Complaint Management',
        'services.social.item10': 'Company and Community Relation Assessment',
        'services.social.item11': 'Community Project Plan for Sustainable Development',

        //Hydrogeology et hydrology
        'services.hydro.title': 'HYDROGEOLOGY & HYDROLOGY',
        'services.hydro.desc': 'Together, we protect water and promote sustainable growth.',
        'groundwater':'Groundwater and surface water flux Assessment.',
        'execution':'Execution of potable water drilling.',
        'hydro.view':'View All',

        //modal hydrogeology et hydrology
        'modal.hydro.title': 'HYDROGEOLOGY & HYDROLOGY',

        'services.hydro.item1': 'Groundwater and surface water flux Assessment',
        'services.hydro.item2': 'Technical and financial feasibility study for borehole drilling and installation of water distribution networks',
        'services.hydro.item3': 'Execution of potable water drilling',
        'services.hydro.item4': 'Determination of contaminated areas prohibited for potable water drilling',
        'services.hydro.item5': 'Risk Assessment for pollution control',
        'services.hydro.item6': 'Maintenance of water borehole',
        'services.hydro.item7': 'Pumping tests and determination of level of flux water of borehole',
        'services.hydro.item8': 'Monitoring of water drilling works',
        'services.hydro.item9': 'Water monitoring',
        'services.hydro.item10': 'Stormwater Management and Assessment',
        'services.hydro.item11': 'Hydrogeological Impact Assessment',
        'services.hydro.item12': 'Hydrological and hydraulical Assessment of watersheds',

        //services geotechnic
        'services.geo.title': 'GEOTECHNIC',
        'services.geo.desc': 'Ensuring safe and stable ground for every project.',
        'surveys':'Surveys and test in situ.',
        'rock':'Rock mechanics; concrete and soil',
        'geotechnic.view':'View All',

        //modal geotechnic
         'modal.geo.title': 'GEOTECHNIC',

        'services.geo.item1': 'Surveys and test in situ',
        'services.geo.item2': 'Soil feature and sampling: diamond drilling, destructive testing, auger, shovel',
        'services.geo.item3': 'Mechanical tests: static and dynamic penetrometer, SPT',
        'services.geo.item4': 'Laboratory tests',
        'services.geo.item5': 'Soil identification',
        'services.geo.item6': 'Soil feature',
        'services.geo.item7': 'Rock mechanics; concrete and soil',

        //service training
        'services.training.title': 'TRAINING',
        'services.training.desc': 'Empowering skills for growth.',
        'environ.maneg':'Environmental management.',
        'health':'Health and Safety at work.',
        'health.view':'View All',

        //modal training
        'modal.training.title': 'TRAINING',

        'services.training.item1': 'Environmental management',
        'services.training.item2': 'Health and Safety at work',
        'services.training.item3': 'Development of Environmental and Social Impact Assessment (ESIA), Feasibility Studies',
        'services.training.item4': 'Project Conception & Management',
        'services.training.item5': 'Auditing and Environmental and Social Management System',
        'services.training.item6': 'Other software available in our IT network system',

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

