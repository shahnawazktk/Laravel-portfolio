<nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}"
                class="text-2xl font-bold text-gradient transition-all hover:scale-105 flex items-center">
                <span class="w-8 h-8 bg-gradient rounded-lg mr-2 flex items-center justify-center">
                    <i class="fas fa-code text-white text-sm"></i>
                </span>
                ShahNawaz
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex space-x-8">
                <a href="{{ route('home') }}"
                    class="nav-link font-medium hover:text-blue-600 transition-all relative group">
                    <i class="fas fa-home mr-2"></i>
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('about') }}"
                    class="nav-link font-medium hover:text-blue-600 transition-all relative group">
                    <i class="fas fa-user mr-2"></i>
                    About
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('portfolio.index') }}"
                    class="nav-link font-medium hover:text-blue-600 transition-all relative group">
                    <i class="fas fa-briefcase mr-2"></i>
                    Portfolio
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('contact') }}"
                    class="nav-link font-medium hover:text-blue-600 transition-all relative group">
                    <i class="fas fa-envelope mr-2"></i>
                    Contact
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>

            <!-- Call to Action Button (Desktop) -->
            <div class="hidden lg:block">
                <a href="{{ route('contact') }}"
                    class="px-6 py-2 bg-gradient text-white font-medium rounded-full hover:shadow-xl transition-all hover:scale-105">
                    Hire Me
                </a>
            </div>

            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="lg:hidden text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden mt-4 space-y-4 pb-4">
            <a href="{{ route('home') }}"
                class="block py-3 px-4 font-medium hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all flex items-center">
                <i class="fas fa-home mr-3"></i>
                Home
            </a>
            <a href="{{ route('about') }}"
                class="block py-3 px-4 font-medium hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all flex items-center">
                <i class="fas fa-user mr-3"></i>
                About
            </a>
            <a href="{{ route('portfolio.index') }}"
                class="block py-3 px-4 font-medium hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all flex items-center">
                <i class="fas fa-briefcase mr-3"></i>
                Portfolio
            </a>
            <a href="{{ route('contact') }}"
                class="block py-3 px-4 font-medium hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all flex items-center">
                <i class="fas fa-envelope mr-3"></i>
                Contact
            </a>
            <div class="pt-4 border-t">
                <a href="{{ route('contact') }}"
                    class="block py-3 px-4 bg-gradient text-white font-medium rounded-lg text-center hover:shadow-lg transition-all">
                    Hire Me
                </a>
            </div>
        </div>
    </div>
</nav>
