<nav class="bg-white shadow-md sticky top-0 z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo Animé -->
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center transform hover:scale-110 transition duration-300">
                    <i class="fas fa-leaf text-3xl text-green-500 mr-2 floating"></i>
                    <span class="title-font text-xl font-bold text-green-700">AfricanESC</span>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Accueil</x-nav-link>
                <x-nav-link href="#missions" :active="request()->is('*missions*')">Missions</x-nav-link>
                <x-nav-link href="#solutions" :active="request()->is('*solutions*')">Solutions</x-nav-link>
                <x-nav-link href="#actions" :active="request()->is('*actions*')">Actions</x-nav-link>
                <x-nav-link href="#contact" :active="request()->is('*contact*')">Contact</x-nav-link>

                <a href="#don" class="ml-4 px-6 py-2 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-300 flex items-center">
                    <i class="fas fa-seedling mr-2"></i> Faire un don
                </a>
            </div>

            <!-- Bouton Mobile -->
            <div class="md:hidden flex items-center">
                <button class="text-gray-700 focus:outline-none" id="mobile-menu-button">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="hidden md:hidden bg-white shadow-lg" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-mobile-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Accueil</x-mobile-nav-link>
            <x-mobile-nav-link href="#missions" :active="request()->is('*missions*')">Missions</x-mobile-nav-link>
            <x-mobile-nav-link href="#solutions" :active="request()->is('*solutions*')">Solutions</x-mobile-nav-link>
            <x-mobile-nav-link href="#actions" :active="request()->is('*actions*')">Actions</x-mobile-nav-link>
            <x-mobile-nav-link href="#contact" :active="request()->is('*contact*')">Contact</x-mobile-nav-link>
            <x-mobile-nav-link href="#don" icon="fas fa-seedling" class="bg-green-600 text-white">
                Faire un don
            </x-mobile-nav-link>
        </div>
    </div>
</nav>
