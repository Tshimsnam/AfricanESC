<section id="missions" class="py-20 bg-white">
    <div class="max-w-9xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4">
                Our Commitment
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our <span class="text-green-600">Core</span> Services
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
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
                <h3 class="text-xl font-bold text-center mb-4">BIOPHYSICAL ENVIRONMENT</h3>
                <p class="text-gray-600 text-center mb-6">
                    Assessing and protecting our natural environment.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Environmental study</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Environmental Management Plan</span>
                    </li>
                </ul>
                <button onclick="openModal('bioModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300">
                    View All
                </button>
            </div>

            <div id="bioModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">
                    <!-- Header -->
                    <div class="flex justify-between items-center p-6 border-b sticky top-0 z-10 bg-white">
                        <h3 class="text-2xl font-bold text-green-700">Biophysical Environment</h3>
                        <button onclick="closeModal('bioModal')" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <!-- Contenu -->
                    <div class="overflow-y-auto flex-1 p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Environmental study</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Environmental Management Plan (both for industrial exploitation and artisanal
                                        and small scale mining).</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Fauna and Flora Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Aquatic and wetland Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Strategic Environmental and Social Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>RSPO (Round Table for Sustainable Palm Oil) surveys.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>High Conservation Value of biological species Assessment.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Biodiversity compensation/off set Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Biodiversity Action Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Rehabilitation and closure Plan of contaminated sites.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Environmental audit.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Due Diligence for Environmental and Social Risks</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Compliance Report</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded"> <i
                                        class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Activity Report</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="p-4 border-t sticky bottom-0 bg-white">
                        <button onclick="closeModal('bioModal')"
                            class="w-full py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
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
                <h3 class="text-xl font-bold text-center mb-4">SOCIAL ENVIRONMENT</h3>
                <p class="text-gray-600 text-center mb-6">
                    Fostering harmony between business and community.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Socio-economic impact Assessment</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Resettlement Action Plan</span>
                    </li>
                </ul>
                <button onclick="openModal('socialModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300">
                    View All
                </button>
            </div>

            <!-- Modal Structure - Social Environment -->
            <div id="socialModal"
                class="fixed hidden inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl max-w-2xl w-full max-h-[90vh] flex flex-col">

                    <!-- Sticky Header -->
                    <div class="flex justify-between items-center p-6 border-b bg-white sticky top-0 z-10">
                        <h3 class="text-2xl font-bold text-green-700">Social Environment</h3>
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
                                    <span>Socio-economic impact Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Resettlement Action Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Social Management Plan.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Development of Corporate Social Responsibility policies.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Compliance audit for social standards.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Sustainability Report.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Stakeholders ‘Engagement.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Community Relations Management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Development of mechanism for Conflict and Complaint Management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Company and Community Relation Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Community Project Plan for Sustainable Development.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('socialModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
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
                <h3 class="text-xl font-bold text-center mb-4">HYDROGEOLOGY & HYDROLOGY</h3>
                <p class="text-gray-600 text-center mb-6">
                    Together, we protect water and promote sustainable growth.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Groundwater and surface water flux Assessment.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Execution of potable water drilling. </span>
                    </li>
                </ul>
                <button onclick="openModal('hydroModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300">
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
                        <h3 class="text-2xl font-bold text-green-700">HYDROGEOLOGY & HYDROLOGY</h3>
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
                                    <span>Groundwater and surface water flux Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Technical and financial feasibility study for borehole drilling and installation of water distribution networks.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Execution of potable water drilling. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Determination of contaminated areas prohibited for potable water drilling. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Risk Assessment for pollution control. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Maintenance of water borehole.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Pumping tests and determination of level of flux water of borehole.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Monitoring of water drilling works. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Water monitoring. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Stormwater Management and Assessment.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Hydrogeological Impact Assessment</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Hydrological and hydraulical Assessment of watersheds</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('hydroModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
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
                <h3 class="text-xl font-bold text-center mb-4">GEOTECHNIC</h3>
                <p class="text-gray-600 text-center mb-6">
                    Ensuring safe and stable ground for every project.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Surveys and test in situ.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Rock mechanics; concrete and soil</span>
                    </li>
                </ul>
                <button onclick="openModal('geotechnicModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300">
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
                        <h3 class="text-2xl font-bold text-green-700">GEOTECHNIC</h3>
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
                                    <span>Surveys and test in situ.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Soil feature and sampling: diamond drilling, destructive testing, auger, shovel.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Mechanical tests: static and dynamic penetrometer, SPT</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Laboratory tests </span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Soil identification  </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Soil feature </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Rock mechanics; concrete and soil</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('geotechnicModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
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
                <h3 class="text-xl font-bold text-center mb-4">TRAINING</h3>
                <p class="text-gray-600 text-center mb-6">
                    Empowering skills for growth.
                </p>
                <ul class="space-y-3 text-sm text-gray-700 mb-4">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Environmental management.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                        <span>Health and Safety at work.</span>
                    </li>
                </ul>
                <button onclick="openModal('trainingModal')"
                    class="w-full py-2 bg-green-100 text-green-700 font-medium rounded-lg hover:bg-green-200 transition duration-300">
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
                        <h3 class="text-2xl font-bold text-green-700">TRAINING</h3>
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
                                    <span>Environmental management.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Health and Safety at work. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Development of Environmental and Social Impact Assessment (ESIA), Feasibility Studies.</span>
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Project Conception & Management. </span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Auditing and Environmental and Social Management System.</span>
                                </li>
                                <li class="flex items-start p-2 hover:bg-green-50 rounded">
                                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3 flex-shrink-0"></i>
                                    <span>Other software available in our IT network system.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sticky Footer -->
                    <div class="p-4 border-t bg-white sticky bottom-0">
                        <button onclick="closeModal('trainingModal')"
                            class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
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
