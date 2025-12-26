<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- About Column -->
            <div>
                <a href="{{ route('home') }}" class="text-2xl font-bold mb-6 inline-flex items-center">
                    <span class="w-8 h-8 bg-gradient rounded-lg mr-2 flex items-center justify-center">
                        <i class="fas fa-code text-white text-sm"></i>
                    </span>
                    Portfolio
                </a>
                <p class="text-gray-400 mb-6">
                    Creating beautiful, functional web experiences with modern technologies. Let's build something
                    amazing together.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="social-icon w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-all hover:scale-110">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#"
                        class="social-icon w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-all hover:scale-110">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#"
                        class="social-icon w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-all hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"
                        class="social-icon w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition-all hover:scale-110">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}"
                            class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio.index') }}"
                            class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-xl font-bold mb-6">Services</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-code text-xs mr-2"></i>
                            Web Development
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-paint-brush text-xs mr-2"></i>
                            UI/UX Design
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-mobile-alt text-xs mr-2"></i>
                            Mobile Apps
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all flex items-center">
                            <i class="fas fa-chart-line text-xs mr-2"></i>
                            SEO Optimization
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-bold mb-6">Contact Info</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-3"></i>
                        <span class="text-gray-400">San Francisco, California</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope text-blue-500 mr-3"></i>
                        <span class="text-gray-400">hello@example.com</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone text-blue-500 mr-3"></i>
                        <span class="text-gray-400">+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-clock text-blue-500 mr-3"></i>
                        <span class="text-gray-400">Mon - Fri: 9:00 - 18:00</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="bg-gray-800 rounded-xl p-8 mb-12">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-2">Stay Updated</h3>
                    <p class="text-gray-400">Subscribe to my newsletter for the latest updates and projects.</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Enter your email"
                        class="flex-grow px-6 py-3 bg-gray-900 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white">
                    <button type="submit"
                        class="px-8 py-3 bg-gradient text-white font-medium rounded-lg hover:shadow-xl transition-all hover:scale-105">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-8 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    &copy; {{ date('Y') }} My Portfolio. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-all">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-all">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-all">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
