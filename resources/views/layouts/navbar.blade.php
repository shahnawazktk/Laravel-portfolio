<nav class="fixed top-0 w-full glass-dark z-40 py-4 px-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-bold">
            <span class="text-gradient">SN</span>
            <span class="text-white">.</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white font-medium transition-colors">Home</a>
            <a href="{{ route('about') }}" class="text-gray-300 hover:text-white font-medium transition-colors">About</a>
            <a href="#" class="text-gray-300 hover:text-white font-medium transition-colors">Services</a>
            <a href="#" class="text-gray-300 hover:text-white font-medium transition-colors">Portfolio</a>
            <a href="#" class="text-gray-300 hover:text-white font-medium transition-colors">Skills</a>
            <a href="{{ route('contact') }}"
                class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-medium hover:shadow-lg hover:shadow-purple-500/30 transition-all">Contact</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuToggle" class="md:hidden text-white text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="mobile-menu fixed top-0 right-0 h-full w-64 glass-dark p-8 md:hidden">
        <div class="flex justify-between items-center mb-12">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-gradient">SN.</a>
            <button id="menuClose" class="text-2xl text-white">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="flex flex-col space-y-6">
            <a href="{{ route('home') }}" class="text-white text-lg font-medium py-2 border-b border-gray-800">Home</a>
            <a href="{{ route('about') }}"
                class="text-white text-lg font-medium py-2 border-b border-gray-800">About</a>
            <a href="#" class="text-white text-lg font-medium py-2 border-b border-gray-800">Services</a>
            <a href="#" class="text-white text-lg font-medium py-2 border-b border-gray-800">Portfolio</a>
            <a href="#" class="text-white text-lg font-medium py-2 border-b border-gray-800">Skills</a>
            <a href="#"
                class="mt-4 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full text-center font-medium">Contact</a>
        </div>
    </div>
</nav>
