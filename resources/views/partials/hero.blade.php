<section class="relative h-screen overflow-hidden">
    <!-- Slider Container -->
    <div class="absolute inset-0 slider-container">
        <!-- Slide 1 - Nature -->
        <div class="absolute inset-0 slide active opacity-100 transition-opacity duration-1000">
            <div class="absolute inset-0 opacity-90 overflow-hidden">
                <img src="{{ asset('images/foret.jpg') }}" alt="Forêt" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-green-900 to-transparent opacity-80"></div>
            <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="title-font text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        <span class="inline-block transform hover:scale-105 transition duration-300">Biodiversity &
                        </span>
                        <span
                            class="inline-block transform hover:scale-105 transition duration-300 text-green-200">Environmental
                            Impact</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-green-100 mb-10 max-w-3xl mx-auto">
                        Safeguarding Africa’s Natural Heritage
                    </p>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Énergie -->
        <div class="absolute inset-0 slide opacity-0 transition-opacity duration-1000">
           <div class="absolute inset-0 opacity-90 overflow-hidden">
                <img src="{{ asset('images/social.jpg') }}" alt="Forêt" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-80"></div>
            <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="title-font text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        <span class="inline-block transform hover:scale-105 transition duration-300">Social
                            Responsibility &</span>
                        <span
                            class="inline-block transform hover:scale-105 transition duration-300 text-blue-200">Communities</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto">
                        Empowering Communities, Ensuring Equity
                    </p>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Agriculture -->
        <div class="absolute inset-0 slide opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 opacity-90 overflow-hidden">
                <img src="{{ asset('images/water.jpg') }}" alt="Forêt" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-yellow-900 to-transparent opacity-80"></div>
            <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="title-font text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        <span class="inline-block transform hover:scale-105 transition duration-300">Water & </span>
                        <span
                            class="inline-block transform hover:scale-105 transition duration-300 text-yellow-200">Hydrogeology</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-yellow-100 mb-10 max-w-3xl mx-auto">
                        Smart Water Solutions for Africa
                    </p>
                </div>
            </div>
        </div>

        <!-- Slide 4 - Eau -->
        <div class="absolute inset-0 slide opacity-0 transition-opacity duration-1000">
            <div class="absolute inset-0 opacity-90 overflow-hidden">
                <img src="{{ asset('images/cariere.jpg') }}" alt="Forêt" class="w-full h-full object-cover">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-teal-900 to-transparent opacity-80"></div>
            <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="title-font text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        <span class="inline-block transform hover:scale-105 transition duration-300">Sustainable </span>
                        <span
                            class="inline-block transform hover:scale-105 transition duration-300 text-teal-200">Industries</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-teal-100 mb-10 max-w-3xl mx-auto">
                        Responsible Extraction, Renewable Futures
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Flèches de navigation -->
    <button
        class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 slide-arrow bg-white bg-opacity-30 hover:bg-opacity-50 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300">
        <i class="fas fa-chevron-left text-2xl"></i>
    </button>
    <button
        class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 slide-arrow bg-white bg-opacity-30 hover:bg-opacity-50 text-white rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300">
        <i class="fas fa-chevron-right text-2xl"></i>
    </button>

    <!-- Contrôles du slider -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 flex space-x-4">
        <button
            class="slide-control w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 focus:outline-none transition-opacity duration-300"
            data-slide="0"></button>
        <button
            class="slide-control w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 focus:outline-none transition-opacity duration-300"
            data-slide="1"></button>
        <button
            class="slide-control w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 focus:outline-none transition-opacity duration-300"
            data-slide="2"></button>
        <button
            class="slide-control w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 focus:outline-none transition-opacity duration-300"
            data-slide="3"></button>
    </div>

    <!-- Flèche vers le bas -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <a href="#missions" class="text-white text-3xl">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>

    <!-- Feuilles flottantes (communes à toutes les slides) -->
    <div class="absolute top-20 left-10 text-green-300 opacity-70 floating" style="font-size: 2rem;">
        <i class="fas fa-mountain"></i>
    </div>
    <div class="absolute top-1/3 right-20 text-green-200 opacity-80 floating-2" style="font-size: 3rem;">
        <i class="fas fa-hard-hat"></i>
    </div>
    <div class="absolute bottom-1/4 left-1/4 text-green-100 opacity-90 floating-3" style="font-size: 4rem;">
        <i class="fas fa-leaf"></i>
    </div>
</section>
