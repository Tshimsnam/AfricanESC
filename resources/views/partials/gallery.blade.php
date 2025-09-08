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

        <!-- Filtres -->
        <div class="flex flex-wrap justify-center gap-3 md:gap-4 mb-12" data-aos="fade-up">
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition flex items-center text-sm md:text-base" data-filter="all" data-translate="all_proj">
                <i class="fas fa-th-large mr-2"></i> All
            </button>
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-green-50 transition flex items-center text-sm md:text-base" data-filter="mining" data-translate="mining">
                <i class="fas fa-hard-hat mr-2"></i> Mining
            </button>
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-green-50 transition flex items-center text-sm md:text-base" data-filter="energy" data-translate="energy">
                <i class="fas fa-bolt mr-2"></i> Energy
            </button>
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-green-50 transition flex items-center text-sm md:text-base" data-filter="water" data-translate="water">
                <i class="fas fa-tint mr-2"></i> Water
            </button>
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-green-50 transition flex items-center text-sm md:text-base" data-filter="community" data-translate="community">
                <i class="fas fa-users mr-2"></i> Community
            </button>
            <button class="filter-btn px-4 py-2 md:px-6 md:py-2 bg-white text-gray-700 border border-gray-300 rounded-full hover:bg-green-50 transition flex items-center text-sm md:text-base" data-filter="agriculture"data-translate="agriculture ">
                <i class="mr-2"></i> Agriculture
            </button>
        </div>

        <!-- Grille Gallery -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6" data-aos="fade-up">
            <!-- Image 1 - Environmental Impact Assessment for Mining  -->
            <div class="gallery-item group cursor-pointer" data-category="mining">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/ciel_ouvert.jpg') }}" alt="Identification of Land Agriculture " class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-hard-hat text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.enviro">Environmental Impact Assessment for Mining </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 2 - Identification of Land Agriculture  -->
            <div class="gallery-item group cursor-pointer" data-category="agriculture">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/identification_land.jpg') }}" alt="Identification of Land Agriculture " class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="identif">Identification of Land Agriculture</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 3 - Water -->
            <div class="gallery-item group cursor-pointer" data-category="water">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/hydrology_survey.jpg') }}" alt="Hydrology Survey" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-tint text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="hydrol">Hydrology Survey</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 4 - Socio-economic studies -->
            <div class="gallery-item group cursor-pointer" data-category="community">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/socio_economic.png') }}" alt="Socio-economic studies" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-users text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="eco.studies">Socio-economic studies</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 5 - Artisanal Mining Impact Assessment  -->
            <div class="gallery-item group cursor-pointer" data-category="mining">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/mining_gal.jpg') }}" alt="Artisanal Mining Impact Assessment" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-hard-hat text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="artisanal">Artisanal Mining Impact Assessment </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 6 - Tracking de la ligne electrique -->
            <div class="gallery-item group cursor-pointer" data-category="energy">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/line_energy.jpg') }}" alt="Tracking de la ligne electrique" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-bolt text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="energi.tracking">Tracking de la ligne electrique</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 7 - Aquatic Assessment -->
            <div class="gallery-item group cursor-pointer" data-category="water">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/aquatic_ass.jpg') }}" alt="Aquatic Assessment" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-tint text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.aquatic">Aquatic Assessment</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 8 - Fied visit for geological survey  -->
            <div class="gallery-item group cursor-pointer" data-category="mining">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/fied_visit.jpg') }}" alt="Fied visit for geological survey" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.fied">Fied visit for geological survey</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 9 - Hydrolic Resources Survey -->
            <div class="gallery-item group cursor-pointer" data-category="water">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/ress.hydroliques.jpg') }}" alt="Hydrolic Resources Survey" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-tint text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.ress.hydrol">Hydrolic Resources Survey</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 10 - Fauna & Flora Study  -->
            <div class="gallery-item group cursor-pointer" data-category="agriculture">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/fauna.jpg') }}" alt="Fauna & Flora Study" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.faune">Etude de la Faune & de la Flore</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 11 - Community Social Index Development Study  -->
            <div class="gallery-item group cursor-pointer" data-category="community">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/community_social.jpg') }}" alt="Community Social Index Development Study" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="gal.com.social">Community Social Index Development Study</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 12 - Social Baseline Study -->
            <div class="gallery-item group cursor-pointer" data-category="community">
                <div class="relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('images/baseline.jpg') }}" alt="Social Baseline Study" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition duration-300 flex items-center justify-center">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 text-center">
                            <i class="fas fa-users text-2xl md:text-3xl mb-2"></i>
                            <p class="font-semibold text-sm md:text-base" data-translate="baseline">Social Baseline Study</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Bouton Voir Plus -->
        {{-- <div class="text-center mt-12" data-aos="fade-up">
            <button class="px-6 py-3 md:px-8 md:py-3 bg-green-600 text-white rounded-full hover:bg-green-700 transition font-semibold text-sm md:text-base">
                View More Projects
            </button>
        </div> --}}
    </div>
</section>

<!-- Modal Lightbox Optimisé Mobile -->
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
    .filter-btn.active {
        @apply bg-green-600 text-white border-green-600;
    }

    .gallery-item {
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
    }

    #galleryModal {
        touch-action: manipulation;
    }
</style>

<script>
    // Filtrage des images
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-green-600', 'text-white');
                btn.classList.add('bg-white', 'text-gray-700');
            });

            this.classList.add('active', 'bg-green-600', 'text-white');
            this.classList.remove('bg-white', 'text-gray-700');

            const filter = this.getAttribute('data-filter');
            filterGallery(filter);
        });
    });

    function filterGallery(filter) {
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Lightbox functionality
    let currentImageIndex = 0;
    const galleryImages = [];
    let touchStartX = 0;
    let touchEndX = 0;

    function initGallery() {
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            const img = item.querySelector('img');
            const title = item.querySelector('p')?.textContent || '';

            galleryImages.push({
                src: img.src,
                alt: img.alt,
                title: title
            });

            item.addEventListener('click', () => openGalleryModal(index));
        });

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

    // Initialisation
    document.addEventListener('DOMContentLoaded', function() {
        initGallery();
    });
</script>
