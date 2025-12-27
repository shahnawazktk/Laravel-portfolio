<footer class="bg-slate-950 py-12 border-t border-gray-800">
    <div class="container mx-auto px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Column 1 -->
                <div class="md:col-span-2">
                    <a href="{{ route('home') }}" class="text-2xl font-bold inline-block mb-4">
                        <span class="text-gradient">SN</span>
                        <span class="text-white">.</span>
                    </a>
                    <p class="text-gray-400 mb-6">
                        Full Stack Developer specializing in Laravel, PHP, and modern web technologies.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://github.com/shahnawazktk"
                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/shahnawaz90/"
                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}"
                                class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-gray-400 hover:text-white transition-colors">Services</a>
                        </li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-gray-400 hover:text-white transition-colors">Portfolio</a>
                        </li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div>
                    <h4 class="font-bold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Web
                                Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Mobile Apps</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Backend
                                Solutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Consulting</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="pt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
                <p>© 2025 Shah Nawaz. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
