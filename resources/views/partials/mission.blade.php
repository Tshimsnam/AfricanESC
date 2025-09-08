<section id="missions" class="py-20 bg-white">
    <div class="max-w-9xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4">
                Services
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                <span data-translate="services1">Our</span> <span
                    class="text-green-600"data-translate="services2">Services</span>
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="services3">
                The African for the Environment and Sustainable Development Consulting (AES Consulting), work for a
                better future, by delivering high quality services and specific solutions in the following areas:
            </p>
        </div>

        <!--grip et modal pour la biophysical environnement-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8"
                data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-leaf text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-4" data-translate="services.bio.title">BIOPHYSICAL
                    ENVIRONMENT</h3>
                <p class="text-gray-600 text-center mb-6" data-translate="services.bio.desc">
                    Assessing and protecting our natural environment.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="env.study">Environmental study</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="env.management">Environmental Management Plan</span>
                    </li>
                </ul>
                <button onclick="openModal('bioModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300"
                    data-translate="services.view_all">
                    View All
                </button>
            </div>

            <div id="bioModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b sticky top-0 z-10 bg-white">
                        <h3 class="text-2xl font-bold text-green-700" data-translate="modal.bio.title">Biophysical
                            Environment</h3>
                        <button onclick="closeModal('bioModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <!-- Contenu -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item1">Environmental study</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item2">Environmental Management Plan (both for
                                        industrial exploitation and artisanal and small scale mining)</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item3">Fauna and Flora Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item4">Aquatic and wetland Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item5">Strategic Environmental and Social
                                        Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item6">RSPO (Round Table for Sustainable Palm
                                        Oil) surveys</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item7">High Conservation Value of biological
                                        species Assessment</span>
                                </li>
                            </ul>

                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item8">Biodiversity compensation/off set
                                        Plan</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item9">Biodiversity Action Plan</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item10">Rehabilitation and closure Plan of
                                        contaminated sites</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item11">Environmental audit</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item12">Due Diligence for Environmental and
                                        Social Risks</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item13">Compliance Report</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item14">Activity Report</span>
                                </li>
                                 <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item15">Plan d’Atténuation et Réhabilitation ; Etude Stratégique Environnementale </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.bio.item16">Etude Stratégique Environnementale</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="p-4 border-t sticky bottom-0 bg-white">
                        <button onclick="closeModal('bioModal')"
                            class="w-full py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition"
                            data-translate="modal.close">
                            Close
                        </button>
                    </div>
                </div>
            </div>

            <!--grid et modal SOCIAL ENVIRONMENT-->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8"
                data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-users text-green-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-4" data-translate="services.social.title">SOCIAL ENVIRONMENT
                </h3>
                <p class="text-gray-600 text-center mb-6" data-translate="services.social.desc">
                    Fostering harmony between business and community.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="socio-economic">Socio-economic impact Assessment</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="resettlement">Resettlement Action Plan</span>
                    </li>
                </ul>
                <button onclick="openModal('socialModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300"
                    data-translate="social.close">
                    View All
                </button>
            </div>

            <!-- Modal Structure - Social Environment -->
            <div id="socialModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Sticky Header -->
                    <div class="flex justify-between items-center p-6 border-b bg-white sticky top-0 z-10">
                        <h3 class="text-2xl font-bold text-green-700" data-translate="modal.social.title">Social
                            Environment</h3>
                        <button onclick="closeModal('socialModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <!-- Scrollable Content -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item1">Socio-economic impact
                                        Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item2">Resettlement Action Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item3">Social Management Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item4">Development of Corporate Social
                                        Responsibility policies.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item5">Compliance audit for social
                                        standards.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item6">Sustainability Report.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item7">Stakeholders 'Engagement.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item8">Community Relations Management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item9">Development of mechanism for Conflict
                                        and Complaint Management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item10">Company and Community Relation
                                        Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item11">Community Project Plan for
                                        Sustainable Development.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.social.item12">Stakeholders Engagement Plan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('socialModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition"
                            data-translate="modal.close">
                            Close
                        </button>
                    </div>
                </div>
            </div>

            <!--grid et modal HYDROGEOLOGY & HYDROLOGY-->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8"
                data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-tint text-green-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-4" data-translate="services.hydro.title">HYDROGEOLOGY &
                    HYDROLOGY</h3>
                <p class="text-gray-600 text-center mb-6" data-translate="services.hydro.desc">
                    Together, we protect water and promote sustainable growth.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="groundwater">Groundwater and surface water flux Assessment.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="execution">Execution of potable water drilling.</span>
                    </li>
                </ul>
                <button onclick="openModal('hydroModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300"
                    data-translate="hydro.view">
                    View All
                </button>
            </div>

            <!-- Modal Structure HYDROGEOLOGY & HYDROLOGY -->
            <div id="hydroModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Sticky Header -->
                    <div class="flex justify-between items-center p-6 border-b bg-white sticky top-0 z-10">
                        <h3 class="text-2xl font-bold text-green-700" data-translate="modal.hydro.title">HYDROGEOLOGY
                            & HYDROLOGY</h3>
                        <button onclick="closeModal('hydroModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <!-- Scrollable Content -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item1">Groundwater and surface water flux
                                        Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item2">Technical and financial feasibility
                                        study for borehole drilling and installation of water distribution
                                        networks.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item3">Execution of potable water
                                        drilling.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item4">Determination of contaminated areas
                                        prohibited for potable water drilling.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item5">Risk Assessment for pollution
                                        control.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item6">Maintenance of water borehole.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item7">Pumping tests and determination of
                                        level of flux water of borehole.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item8">Monitoring of water drilling
                                        works.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item9">Water monitoring.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item10">Stormwater Management and
                                        Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item11">Hydrogeological Impact
                                        Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.hydro.item12">Hydrological and hydraulical
                                        Assessment of watersheds</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('hydroModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition"
                            data-translate="modal.close">
                            Close
                        </button>
                    </div>
                </div>
            </div>

            <!--grid et modal GEOTECHNIC -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8"
                data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-mountain text-green-500"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-4" data-translate="services.geo.title">GEOTECHNIC</h3>
                <p class="text-gray-600 text-center mb-6" data-translate="services.geo.desc">
                    Ensuring safe and stable ground for every project.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="surveys">Surveys and test in situ.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="rock">Rock mechanics; concrete and soil</span>
                    </li>
                </ul>
                <button onclick="openModal('geotechnicModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300"
                    data-translate="geotechnic.view">
                    View All
                </button>
            </div>

            <!-- Modal Structure geotechnic -->
            <div id="geotechnicModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Sticky Header -->
                    <div class="flex justify-between items-center p-6 border-b bg-white sticky top-0 z-10">
                        <h3 class="text-2xl font-bold text-green-700" data-translate="modal.geo.title">GEOTECHNIC</h3>
                        <button onclick="closeModal('geotechnicModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <!-- Scrollable Content -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item1">Surveys and test in situ.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item2">Soil feature and sampling: diamond
                                        drilling, destructive testing, auger, shovel.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item3">Mechanical tests: static and dynamic
                                        penetrometer, SPT</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item4">Laboratory tests</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item5">Soil identification</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item6">Soil feature</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.geo.item7">Rock mechanics; concrete and soil</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('geotechnicModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition"
                            data-translate="modal.close">
                            Close
                        </button>
                    </div>
                </div>
            </div>


            <!--grid et modal training -->
            <div class="bg-gradient-to-br from-green-50 to-white rounded-xl shadow-md hover:shadow-xl transition duration-500 transform hover:-translate-y-2 p-8"
                data-aos="fade-up" data-aos-delay="150">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6 mx-auto">
                    <i class="fas fa-graduation-cap text-green-500 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-4" data-translate="services.training.title">TRAINING</h3>
                <p class="text-gray-600 text-center mb-6" data-translate="services.training.desc">
                    Empowering skills for growth.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="environ.maneg">Environmental management.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span data-translate="health">Health and Safety at work.</span>
                    </li>
                </ul>
                <button onclick="openModal('trainingModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300"
                    data-translate="health.view">
                    View All
                </button>
            </div>

            <!-- Modal Structure training -->
            <div id="trainingModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Sticky Header -->
                    <div class="flex justify-between items-center p-6 border-b bg-white sticky top-0 z-10">
                        <h3 class="text-2xl font-bold text-green-700" data-translate="modal.training.title">TRAINING
                        </h3>
                        <button onclick="closeModal('trainingModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>

                    <!-- Scrollable Content -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item1">Environmental management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item2">Health and Safety at work.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item3">Development of Environmental and
                                        Social Impact Assessment (ESIA), Feasibility Studies.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item4">Project Conception &
                                        Management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item5">Auditing and Environmental and
                                        Social Management System.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span data-translate="services.training.item6">Other software available in our IT
                                        network system.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('trainingModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition"
                            data-translate="modal.close">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Fermer en cliquant à l'extérieur
    document.addEventListener('click', (e) => {
        if (e.target.id === 'bioModal') {
            closeModal('bioModal');
        }
    });
</script>
