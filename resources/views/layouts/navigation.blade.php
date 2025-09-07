<nav class="bg-white shadow-md sticky top-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-6">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}"
                    class="flex-shrink-0 flex items-center transform hover:scale-110 transition duration-300">
                    <img src="{{ asset('images/logo_aes_consulting.png') }}" alt="AES Consulting"
                        class="w-20 h-14 mr-2 floating">
                    <span class="title-font text-lg font-bold text-green-700 hidden sm:block">AES Consulting</span>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-3 lg:space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-sm">
                    <span data-translate="nav.home">Home</span>
                </x-nav-link>

                <x-nav-link href="{{ route('missions') }}" :active="request()->routeIs('missions')" class="text-sm">
                    <span data-translate="nav.services">Services</span>
                </x-nav-link>

                <x-nav-link href="{{ route('solutions') }}" :active="request()->routeIs('solutions')" class="text-sm">
                    <span data-translate="nav.solutions">Solutions</span>
                </x-nav-link>

                <x-nav-link href="{{ route('actions') }}" :active="request()->routeIs('actions')" class="text-sm">
                    <span data-translate="nav.sectors">Sectors</span>
                </x-nav-link>

                <x-nav-link href="{{ route('gallery') }}" :active="request()->routeIs('gallery')" class="text-sm">
                    <span data-translate="nav.gallery">Gallery</span>
                </x-nav-link>

                <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')" class="text-sm">
                    <span data-translate="nav.contact">Contact</span>
                </x-nav-link>

                <!-- Sélecteur de langue Desktop -->
                <div class="language-switcher-desktop ml-3">
                    <select id="languageSelectDesktop" onchange="changeLanguage(this.value)"
                        class="bg-white border border-gray-300 rounded-full px-2 py-1 pr-6 shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none cursor-pointer text-xs">
                        <option value="fr">🇫🇷 FR</option>
                        <option value="en">🇬🇧 EN</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-gray-500">
                        <i class="fas fa-chevron-down text-xs"></i>
                    </div>
                </div>

                <a href="{{ route('download.brochure') }}"
                    class="ml-2 px-4 py-1.5 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-300 flex items-center text-xs">
                    <i class="fas fa-download mr-1 text-xs"></i>
                    <span data-translate="nav.brochure">Brochure</span>
                </a>
            </div>

            <!-- Right Section -->
            <div class="flex items-center space-x-3">
                <!-- Bouton Mobile Menu -->
                <div class="md:hidden">
                    <button
                        class="text-gray-700 focus:outline-none p-1 rounded-lg hover:bg-gray-100 transition flex items-center"
                        id="mobile-menu-button">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="hidden md:hidden bg-white shadow-lg border-t" id="mobile-menu">
        <div class="px-4 py-3 space-y-2">
            <x-mobile-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                <i class="fas fa-home mr-3 text-green-600"></i> <span data-translate="nav.home">Home</span>
            </x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('missions') }}" :active="request()->is('*missions*')">
                <i class="fas fa-cogs mr-3 text-green-600"></i> <span data-translate="nav.services">Services</span>
            </x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('solutions') }}" :active="request()->is('*solutions*')">
                <i class="fas fa-lightbulb mr-3 text-green-600"></i> <span
                    data-translate="nav.solutions">Solutions</span>
            </x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('actions') }}" :active="request()->is('*actions*')">
                <i class="fas fa-industry mr-3 text-green-600"></i> <span data-translate="nav.sectors">Sectors</span>
            </x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('gallery') }}" :active="request()->is('*gallery*')">
                <i class="fas fa-hard-hat mr-3 text-green-600"></i> <span data-translate="nav.gallery">Gallery</span>
            </x-mobile-nav-link>
            <x-mobile-nav-link href="{{ route('contact') }}" :active="request()->is('*contact*')">
                <i class="fas fa-envelope mr-3 text-green-600"></i> <span data-translate="nav.contact">Contact</span>
            </x-mobile-nav-link>

            <!-- Sélecteur de langue dans le menu mobile -->
            <div class="px-3 py-2 border-t border-gray-100 mt-2">
                <label class="block text-sm font-medium text-gray-700 mb-2 px-2">Language / Langue</label>
                <select id="languageSelectMobile" onchange="changeLanguage(this.value)"
                    class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none cursor-pointer">
                    <option value="fr">🇫🇷 Français</option>
                    <option value="en">🇬🇧 English</option>
                </select>
            </div>

            <x-mobile-nav-link href="{{ route('download.brochure') }}"
                class="bg-green-600 text-white justify-center mt-2">
                <i class="fas fa-download mr-2"></i> <span data-translate="nav.brochure">Download Brochure</span>
            </x-mobile-nav-link>
        </div>
    </div>
</nav>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap');

    /* Style pour les sélecteurs de langue */
    .language-switcher-desktop {
        position: relative;
        display: inline-block;
    }

    #languageSelectDesktop,
    #languageSelectMobile {
        font-family: 'Noto Color Emoji', 'Segoe UI Emoji', 'Apple Color Emoji', sans-serif;
        background-image: none;
        transition: all 0.3s ease;
    }

    #languageSelectDesktop {
        padding-right: 2rem;
        border-radius: 9999px;
        padding: 0.5rem 2rem 0.5rem 1rem;
    }

    #languageSelectMobile {
        padding: 0.75rem 3rem 0.75rem 1rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
        background-position: right 1rem center;
        background-repeat: no-repeat;
        background-size: 1.5em 1.5em;
    }

    #languageSelectDesktop:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-1px);
    }

    .language-switcher-desktop option,
    #languageSelectMobile option {
        font-family: 'Noto Color Emoji', 'Segoe UI Emoji', 'Apple Color Emoji', sans-serif;
        padding: 12px;
        font-size: 1rem;
    }

    /* Flèche custom pour desktop */
    .language-switcher-desktop .absolute {
        right: 0.5rem;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .language-switcher-desktop {
            display: none;
        }
    }

    /* Animation pour le menu mobile */
    #mobile-menu {
        transition: all 0.3s ease-in-out;
        max-height: 0;
        overflow: hidden;
    }

    #mobile-menu.mobile-menu-open {
        max-height: 500px;
        display: block;
    }

    #mobile-menu:not(.mobile-menu-open) {
        max-height: 0;
        display: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser la langue
        const savedLanguage = localStorage.getItem('preferredLanguage') || 'fr';
        const selectDesktop = document.getElementById('languageSelectDesktop');
        const selectMobile = document.getElementById('languageSelectMobile');

        if (selectDesktop) selectDesktop.value = savedLanguage;
        if (selectMobile) selectMobile.value = savedLanguage;

        // Gestion du menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                mobileMenu.classList.toggle('mobile-menu-open');
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Fermer le menu en cliquant à l'extérieur
        document.addEventListener('click', function(event) {
            if (mobileMenu && mobileMenu.classList.contains('mobile-menu-open') &&
                !mobileMenu.contains(event.target) &&
                event.target !== mobileMenuButton &&
                !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.remove('mobile-menu-open');
                mobileMenu.classList.add('hidden');
            }
        });

        // Empêcher la fermeture quand on clique sur le sélecteur
        const languageSelect = document.getElementById('languageSelectMobile');
        if (languageSelect) {
            languageSelect.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    });

    function changeLanguage(lang) {
        localStorage.setItem('preferredLanguage', lang);

        // Synchroniser les deux sélecteurs
        const selectDesktop = document.getElementById('languageSelectDesktop');
        const selectMobile = document.getElementById('languageSelectMobile');

        if (selectDesktop) selectDesktop.value = lang;
        if (selectMobile) selectMobile.value = lang;

        // Fermer le menu mobile après sélection
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu) {
            mobileMenu.classList.remove('mobile-menu-open');
            mobileMenu.classList.add('hidden');
        }

        console.log('Language changed to:', lang);
        // Ajoutez ici votre logique de traduction
    }
</script>
