<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full mb-4">
                Contact us
            </span>
            <h2 class="title-font text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Let’s get <span class="text-green-600">in touch</span>
            </h2>
            <div class="w-20 h-1 bg-green-500 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Do you have any questions or would you like to engage with us? Write to us!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="bg-green-50 rounded-xl p-8 shadow-md" data-aos="fade-right">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Our Contact Information</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">UK Office</h4>
                            <p class="text-gray-600">19 St Christopher Ways, Pride Park, Derby, DE24 8JY, England,
                                United Kingdom</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">DRC Office</h4>
                            <p class="text-gray-600">8 AV. Du Commerce, Gombe, KINSHASA </p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Téléphone</h4>
                            <p class="text-gray-600">+243 8586 01421</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-medium text-gray-900">Email</h4>
                            <p class="text-gray-600">info@africanesc.co.uk</p>
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
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Follow us</h4>
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
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a message</h3>
                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300"
                                required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300"
                                required>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300"
                                required>
                                <option value="I would like to become a volunteer">I would like to become a volunteer
                                </option>
                                <option value="I would like to make a donation">I would like to make a donation</option>
                                <option value="Question about your solutions">Question about your solutions</option>
                                <option value="Other request">Other request</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition duration-300"
                                required></textarea>
                        </div>
                        <div>
                            @if (session('success'))
                                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div>
                            <button type="submit" id="submitBtn"
                                class="w-full px-6 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                                <span id="btnText">Send message</span>
                                <span id="spinner" class="hidden">
                                    <!-- Icône de chargement (optionnelle) -->
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    Sending...
                                </span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const btn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const spinner = document.getElementById('spinner');

    // Désactive le bouton pour éviter les doubles clics
    btn.disabled = true;

    // Affiche le spinner et change le texte
    btnText.classList.add('hidden');
    spinner.classList.remove('hidden');

    // Optionnel: Change le style pendant l'envoi
    btn.classList.remove('bg-green-600', 'hover:bg-green-700');
    btn.classList.add('bg-green-500');
});
</script>
