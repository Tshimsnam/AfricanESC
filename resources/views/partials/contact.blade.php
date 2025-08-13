<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4">
                Contactez-nous
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Prenons <span class="text-green-600">contact</span>
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Vous avez des questions ou souhaitez vous engager avec nous ? Écrivez-nous !
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="bg-green-50 rounded-xl p-8 shadow-md" data-aos="fade-right">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Nos coordonnées</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Adresse</h4>
                            <p class="text-gray-600">12 Rue de l'Écologie, 75000 Paris, France</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Téléphone</h4>
                            <p class="text-gray-600">+33 1 23 45 67 89</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Email</h4>
                            <p class="text-gray-600">contact@greenharmony.org</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Horaires</h4>
                            <p class="text-gray-600">Lundi - Vendredi : 9h - 18h</p>
                            <p class="text-gray-600">Week-end : Fermé</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center hover:bg-green-200 transition duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-xl shadow-md p-8" data-aos="fade-left">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Envoyez-nous un message</h3>
                <form>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom
                                complet</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300">
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                            <select id="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300">
                                <option>Je souhaite devenir bénévole</option>
                                <option>Je souhaite faire un don</option>
                                <option>Question sur vos solutions</option>
                                <option>Autre demande</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full px-6 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                Envoyer le message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
