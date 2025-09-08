<section class="py-20 bg-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4"
                data-translate="team.subtitle">
                Notre Équipe
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                <span data-translate="team.title1">Rencontrez notre</span> <span class="text-green-600"
                    data-translate="team.title2">équipe dirigeante</span>
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="team.description">
                Des experts passionnés dédiés à l'environnement et au développement durable
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <!-- Directeur Exécutif Version Courte -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8 text-center"
                data-aos="fade-right" data-aos-delay="100">
                <div class="relative mb-6">
                    <img src="{{ asset('images/executif_director.jpg') }}" alt="FREDDY SHAMWANA - Directeur Exécutif"
                        class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-green-100">
                    <div class="absolute bottom-0 right-1/4 transform translate-x-1/4 bg-green-500 text-white rounded-full p-2">
                        <i class="fas fa-crown"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2" data-translate="team.ceo.name">FREDDY SHAMWANA</h3>
                <p class="text-green-600 font-semibold mb-4" data-translate="team.ceo.position">Directeur Exécutif</p>
                <p class="text-gray-600 mb-4 line-clamp-3" data-translate="team.ceo.short_desc">
                    Freddy Shamwana est Directeur Exécutif chez AES CONSULTING RDC et Royaume-Uni, responsable du développement des affaires, de la gouvernance environnementale et sociale et des politiques de durabilité...
                </p>
                <button onclick="openTeamModal('freddyModal')"
                    class="px-6 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition duration-300 font-medium"
                    data-translate="team.ceo.view_profile">
                    Voir le profil complet
                </button>
            </div>

            <!-- Modal pour FREDDY SHAMWANA -->
            <div id="freddyModal" class="fixed hidden inset-0 bg-black bg-opacity-80 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="relative p-8">
                        <button onclick="closeTeamModal('freddyModal')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">
                            <i class="fas fa-times"></i>
                        </button>

                        <div class="text-center mb-6">
                            <img src="{{ asset('images/executif_director.jpg') }}" alt="FREDDY SHAMWANA - Directeur Exécutif"
                                class="w-40 h-40 rounded-full mx-auto object-cover border-4 border-green-100 mb-4">
                            <h3 class="text-3xl font-bold text-gray-900 mb-2" data-translate="team.ceo.modal.title">FREDDY SHAMWANA</h3>
                            <p class="text-green-600 font-semibold text-lg mb-4" data-translate="team.ceo.modal.position">Directeur Exécutif</p>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700">
                            <p class="mb-4" data-translate="team.ceo.modal.description1">
                                Freddy Shamwana est Directeur Exécutif chez AES CONSULTING en République Démocratique du Congo et au Royaume-Uni. Il est responsable du développement des affaires, de la gouvernance environnementale et sociale, ainsi que des politiques de durabilité.
                            </p>

                            <p class="mb-4">
                                Son expertise couvre un large éventail de domaines incluant :
                            </p>

                            <ul class="list-disc list-inside mb-4 ml-4">
                                <li>L'engagement efficace des parties prenantes</li>
                                <li>La gouvernance environnementale et sociale</li>
                                <li>La planification et mise en œuvre des réinstallations</li>
                                <li>L'impact du développement pour les projets à grande échelle dans l'industrie extractive</li>
                            </ul>

                            <p class="mb-4">
                                Il possède une connaissance approfondie de la législation de la RDC pour divers secteurs, principalement les mines, l'agriculture, l'eau, la foresterie et l'énergie.
                            </p>

                            <p class="mb-4">
                                Son expérience a été acquise à travers divers rôles dans la gestion de projets pour les investissements en partenariat public-privé, ainsi que dans l'évaluation des impacts environnementaux et sociaux en RDC, au Congo Brazzaville, au Cameroun et au Mali.
                            </p>

                            <p class="mb-4">
                                <strong data-translate="team.ceo.modal.education">Formation :</strong> Freddy est titulaire d'un Master en Stratégie Environnementale et Développement Durable de l'Université de Surrey au Royaume-Uni (2010).
                            </p>

                            <div class="bg-green-50 rounded-lg p-4 mt-6">
                                <h4 class="font-semibold text-green-800 mb-2" data-translate="team.ceo.modal.expertise_title">Domaines d'expertise :</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.ceo.modal.expertise1">Gouvernance ESG</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.ceo.modal.expertise2">Développement Durable</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.ceo.modal.expertise3">Industrie Minière</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.ceo.modal.expertise4">Énergie Renouvelable</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.ceo.modal.expertise5">Gestion de l'Eau</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JEAN-DIDIER MUALABA Version Courte -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8 text-center"
                data-aos="fade-left" data-aos-delay="200">
                <div class="relative mb-6">
                    <img src="{{ asset('images/director.jpg') }}" alt="JEAN-DIDIER MUALABA - Communication & Partenariats"
                        class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-green-100">
                    <div class="absolute bottom-0 right-1/4 transform translate-x-1/4 bg-green-500 text-white rounded-full p-2">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2" data-translate="team.comm.name">JEAN-DIDIER MUALABA</h3>
                <p class="text-green-600 font-semibold mb-4" data-translate="team.comm.position">Directeur Communication & Partenariats</p>
                <p class="text-gray-600 mb-4 line-clamp-3" data-translate="team.comm.short_desc">
                    Jean-Didier est un praticien engagé du développement communautaire et environnemental avec de nombreuses années d'expérience dans le développement et le monitoring de la conformité environnementale...
                </p>
                <button onclick="openTeamModal('jeandidierModal')"
                    class="px-6 py-2 bg-green-100 text-green-700 rounded-full hover:bg-green-200 transition duration-300 font-medium"
                    data-translate="team.comm.view_profile">
                    Voir le profil complet
                </button>
            </div>

            <!-- Modal pour JEAN-DIDIER MUALABA -->
            <div id="jeandidierModal" class="fixed hidden inset-0 bg-black bg-opacity-80 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="relative p-8">
                        <button onclick="closeTeamModal('jeandidierModal')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">
                            <i class="fas fa-times"></i>
                        </button>

                        <div class="text-center mb-6">
                            <img src="{{ asset('images/director.jpg') }}" alt="JEAN-DIDIER MUALABA - Communication & Partenariats"
                                class="w-40 h-40 rounded-full mx-auto object-cover border-4 border-green-100 mb-4">
                            <h3 class="text-3xl font-bold text-gray-900 mb-2" data-translate="team.comm.modal.title">JEAN-DIDIER MUALABA</h3>
                            <p class="text-green-600 font-semibold text-lg mb-4" data-translate="team.comm.modal.position">Directeur Communication & Partenariats</p>
                        </div>

                        <div class="prose prose-lg max-w-none text-gray-700">
                            <p class="mb-4" data-translate="team.comm.modal.description1">
                                Jean-Didier MUALABA est un praticien engagé du développement communautaire et environnemental avec de nombreuses années d'expérience dans le développement et le monitoring de la conformité environnementale avec la législation actuelle en matière d'émissions, de pollution, d'empreinte carbone et de gestion des déchets.
                            </p>

                            <p class="mb-4">
                                <strong data-translate="team.comm.modal.skills_title">Compétences clés :</strong>
                            </p>

                            <ul class="list-disc list-inside mb-4 ml-4">
                                <li data-translate="team.comm.modal.skill1">Expérience considérable dans la formulation de politiques environnementales, procédures et bonnes pratiques</li>
                                <li data-translate="team.comm.modal.skill2">Réalisation d'études d'impact environnemental et mise en œuvre de solutions durables</li>
                                <li data-translate="team.comm.modal.skill3">Monitoring et revue des performances environnementales</li>
                                <li data-translate="team.comm.modal.skill4">Implication des communautés locales dans les processus de régénération et développement</li>
                            </ul>

                            <p class="mb-4">
                                <strong data-translate="team.comm.modal.community_title">Engagement communautaire :</strong> Jean-Didier possède une expérience significative dans l'implication des communautés des zones défavorisées dans les processus de régénération et de développement local, leur donnant ainsi l'opportunité de faire partie des solutions aux problèmes qui affectent leurs quartiers.
                            </p>

                            <p class="mb-4">
                                <strong data-translate="team.comm.modal.relationships_title">Compétences relationnelles :</strong> Capacités d'audit et aptitude à communiquer avec des interlocuteurs de tous niveaux, y compris les cadres dirigeants, le personnel, les contractants externes et les professionnels de l'environnement.
                            </p>

                            <p class="mb-4">
                                <strong data-translate="team.comm.modal.profile_title">Profil professionnel :</strong> Professionnel autonome et motivé, talentueux pour développer et favoriser des solutions créatives et innovantes. Forte capacité à respecter les délais et à gérer efficacement les relations avec les clients et les contacts externes de l'entreprise.
                            </p>

                            <div class="bg-green-50 rounded-lg p-4 mt-6">
                                <h4 class="font-semibold text-green-800 mb-2" data-translate="team.comm.modal.expertise_title">Domaines d'expertise :</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise1">Conformité Environnementale</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise2">Développement Communautaire</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise3">Gestion des Déchets</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise4">Émissions & Pollution</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise5">Audit Environnemental</span>
                                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm" data-translate="team.comm.modal.expertise6">Engagement des Parties Prenantes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .team-modal {
        transition: all 0.3s ease-in-out;
    }
</style>

<script>
    function openTeamModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeTeamModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Fermer en cliquant à l'extérieur
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('fixed')) {
            const modals = document.querySelectorAll('.fixed[id$="Modal"]');
            modals.forEach(modal => {
                modal.classList.add('hidden');
            });
            document.body.style.overflow = 'auto';
        }
    });

    // Navigation au clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modals = document.querySelectorAll('.fixed[id$="Modal"]');
            modals.forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        }
    });
</script>
