<section id="gallery" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="inline-block px-4 py-2 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4" data-translate="gal">
                Gallery
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                <span data-translate="section.our">OUR</span> <span class="text-green-600" data-translate="section.gallery">GALLERY</span>
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="discover">
                Discover our environmental projects and sustainable solutions in action
            </p>
        </div>

        <!-- Conteneur de galerie avec navigation -->
        <div class="relative" data-aos="fade-up">
            <!-- Flèche de navigation gauche -->
            <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-6 bg-white rounded-full p-3 shadow-md hover:shadow-lg z-10 transition-all opacity-80 hover:opacity-100">
                <i class="fas fa-chevron-left text-green-600 text-xl"></i>
            </button>

            <!-- Conteneur des images -->
            <div class="gallery-container overflow-hidden">
                <div id="galleryTrack" class="grid grid-cols-3 gap-6 transition-transform duration-500">
                    <!-- Les images seront chargées dynamiquement ici -->
                </div>
            </div>

            <!-- Flèche de navigation droite -->
            <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-6 bg-white rounded-full p-3 shadow-md hover:shadow-lg z-10 transition-all opacity-80 hover:opacity-100">
                <i class="fas fa-chevron-right text-green-600 text-xl"></i>
            </button>

            <!-- Indicateurs de page -->
            <div class="flex justify-center mt-8 space-x-2" id="pageIndicators">
                <!-- Les indicateurs seront générés dynamiquement -->
            </div>
        </div>
    </div>
</section>

<!-- Modal Lightbox (inchangé) -->
<div id="galleryModal" class="fixed hidden inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-2 md:p-4">
    <div class="max-w-4xl w-full max-h-[90vh] relative">
        <button onclick="closeGalleryModal()" class="absolute -top-8 md:-top-12 right-0 text-white text-2xl hover:text-green-400 transition z-10">
            <i class="fas fa-times"></i>
        </button>

        <div class="relative">
            <img id="modalImage" src="" alt="" class="w-full h-auto max-h-[70vh] md:max-h-[80vh] object-contain rounded-lg">

            <button onclick="prevImage()" class="absolute left-1 md:left-4 top-1/2 transform -translate-y-1/2 text-white text-xl md:text-2xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-70 transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button onclick="nextImage()" class="absolute right-1 md:right-4 top-1/2 transform -translate-y-1/2 text-white text-xl md:text-2xl bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-70 transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="text-white text-center mt-3 md:mt-4 px-2">
            <h3 id="modalTitle" class="text-lg md:text-xl font-bold"></h3>
            <p id="modalDesc" class="text-gray-300 text-sm md:text-base mt-1"></p>
        </div>
    </div>
</div>

<style>
    .gallery-container {
        width: 100%;
        position: relative;
    }

    .gallery-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        break-inside: avoid;
        margin-bottom: 1rem;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .page-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #d1d5db;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .page-indicator.active {
        background-color: #16a34a;
        transform: scale(1.3);
    }

    /* Cacher les éléments non actifs */
    .gallery-page {
        display: none;
    }

    .gallery-page.active {
        display: grid;
    }

    /* Style responsive */
    @media (max-width: 768px) {
        #galleryTrack {
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        #prevButton {
            left: -0.5rem;
            transform: translateY(-50%) scale(0.8);
        }

        #nextButton {
            right: -0.5rem;
            transform: translateY(-50%) scale(0.8);
        }
    }

    @media (max-width: 640px) {
        #galleryTrack {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // Données de la galerie
    const galleryData = [
        {
            src: "{{ asset('images/ciel_ouvert.jpg') }}",
            alt: "Identification of Land Agriculture",
            title: "Environmental Impact Assessment for Mining",
            icon: "fas fa-hard-hat",
            translate: "gal.enviro"
        },
        {
            src: "{{ asset('images/identification_land.jpg') }}",
            alt: "Identification of Land Agriculture",
            title: "Identification of Land Agriculture",
            icon: "",
            translate: "identif"
        },
        {
            src: "{{ asset('images/hydrology_survey.jpg') }}",
            alt: "Hydrology Survey",
            title: "Hydrology Survey",
            icon: "fas fa-tint",
            translate: "hydrol"
        },
        {
            src: "{{ asset('images/socio_economic.png') }}",
            alt: "Socio-economic studies",
            title: "Socio-economic studies",
            icon: "fas fa-users",
            translate: "eco.studies"
        },
        {
            src: "{{ asset('images/mining_gal.jpg') }}",
            alt: "Artisanal Mining Impact Assessment",
            title: "Artisanal Mining Impact Assessment",
            icon: "fas fa-hard-hat",
            translate: "artisanal"
        },
        {
            src: "{{ asset('images/line_energy.jpg') }}",
            alt: "Tracking de la ligne electrique",
            title: "Tracking de la ligne electrique",
            icon: "fas fa-bolt",
            translate: "energi.tracking"
        },
        {
            src: "{{ asset('images/aquatic_ass.jpg') }}",
            alt: "Aquatic Assessment",
            title: "Aquatic Assessment",
            icon: "fas fa-tint",
            translate: "gal.aquatic"
        },
        {
            src: "{{ asset('images/fied_visit.jpg') }}",
            alt: "Fied visit for geological survey",
            title: "Fied visit for geological survey",
            icon: "",
            translate: "gal.fied"
        },
        {
            src: "{{ asset('images/ress.hydroliques.jpg') }}",
            alt: "Hydrolic Resources Survey",
            title: "Hydrolic Resources Survey",
            icon: "fas fa-tint",
            translate: "gal.ress.hydrol"
        },
        {
            src: "{{ asset('images/fauna.jpg') }}",
            alt: "Fauna & Flora Study",
            title: "Etude de la Faune & de la Flore",
            icon: "",
            translate: "gal.faune"
        },
        {
            src: "{{ asset('images/community_social.jpg') }}",
            alt: "Community Social Index Development Study",
            title: "Community Social Index Development Study",
            icon: "",
            translate: "gal.com.social"
        },
        {
            src: "{{ asset('images/baseline.jpg') }}",
            alt: "Social Baseline Study",
            title: "Social Baseline Study",
            icon: "fas fa-users",
            translate: "baseline"
        }
    ];

    let currentPage = 0;
    const itemsPerPage = 6; // 3 colonnes × 2 lignes = 6 images par page
    let totalPages = Math.ceil(galleryData.length / itemsPerPage);
    let currentImageIndex = 0;
    const galleryImages = [];

    document.addEventListener('DOMContentLoaded', function() {
        initGallery();
        renderGallery();
        initLightbox();

        // Événements pour les boutons de navigation
        document.getElementById('prevButton').addEventListener('click', showPrevPage);
        document.getElementById('nextButton').addEventListener('click', showNextPage);
    });

    function initGallery() {
        // Initialisation des données pour la lightbox
        galleryData.forEach(item => {
            galleryImages.push({
                src: item.src,
                alt: item.alt,
                title: item.title
            });
        });
    }

    function renderGallery() {
        const galleryTrack = document.getElementById('galleryTrack');
        const indicatorsContainer = document.getElementById('pageIndicators');

        galleryTrack.innerHTML = '';
        indicatorsContainer.innerHTML = '';

        // Créer les indicateurs de page
        for (let i = 0; i < totalPages; i++) {
            const indicator = document.createElement('div');
            indicator.classList.add('page-indicator');
            if (i === currentPage) indicator.classList.add('active');
            indicator.addEventListener('click', () => goToPage(i));
            indicatorsContainer.appendChild(indicator);
        }

        // Calculer les indices de début et de fin pour la page actuelle
        const startIndex = currentPage * itemsPerPage;
        const endIndex = Math.min(startIndex + itemsPerPage, galleryData.length);

        // Ajouter les éléments de la page actuelle
        for (let i = startIndex; i < endIndex; i++) {
            const item = galleryData[i];
            const galleryItem = document.createElement('div');
            galleryItem.classList.add('gallery-item', 'group', 'cursor-pointer');
            galleryItem.setAttribute('data-index', i);

            galleryItem.innerHTML = `
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300 h-full">
                    <img src="${item.src}" alt="${item.alt}" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            ${item.icon ? `<i class="${item.icon} text-2xl md:text-3xl mb-2"></i>` : ''}
                            <p class="font-semibold text-sm md:text-base" data-translate="${item.translate}">${item.title}</p>
                        </div>
                    </div>
                </div>
            `;

            galleryItem.addEventListener('click', () => openGalleryModal(i));
            galleryTrack.appendChild(galleryItem);
        }
    }

    function showPrevPage() {
        if (currentPage > 0) {
            currentPage--;
            renderGallery();
        }
    }

    function showNextPage() {
        if (currentPage < totalPages - 1) {
            currentPage++;
            renderGallery();
        }
    }

    function goToPage(page) {
        if (page >= 0 && page < totalPages) {
            currentPage = page;
            renderGallery();
        }
    }

    // Lightbox functions
    function initLightbox() {
        // Swipe gestures pour mobile
        const modal = document.getElementById('galleryModal');
        if (modal) {
            modal.addEventListener('touchstart', handleTouchStart, false);
            modal.addEventListener('touchend', handleTouchEnd, false);
        }
    }

    function handleTouchStart(e) {
        touchStartX = e.changedTouches[0].screenX;
    }

    function handleTouchEnd(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) nextImage();
        if (touchEndX > touchStartX + swipeThreshold) prevImage();
    }

    function openGalleryModal(index) {
        currentImageIndex = index;
        const image = galleryImages[index];

        document.getElementById('modalImage').src = image.src;
        document.getElementById('modalImage').alt = image.alt;
        document.getElementById('modalTitle').textContent = image.title;
        document.getElementById('modalDesc').textContent = image.alt;

        document.getElementById('galleryModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeGalleryModal() {
        document.getElementById('galleryModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
        openGalleryModal(currentImageIndex);
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
        openGalleryModal(currentImageIndex);
    }

    // Navigation au clavier
    document.addEventListener('keydown', function(e) {
        if (!document.getElementById('galleryModal').classList.contains('hidden')) {
            if (e.key === 'Escape') closeGalleryModal();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        }
    });
</script>
