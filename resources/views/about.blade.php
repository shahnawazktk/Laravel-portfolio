@extends('layouts.app')

@section('title', 'About Me | Shah Nawaz - Full Stack Developer')

@section('content')
    <!-- About Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-b from-slate-900 to-slate-800 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-purple-500/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl animate-float"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Column -->
                    <div data-aos="fade-right">
                        <div
                            class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                            <i class="fas fa-user text-purple-400"></i>
                            <span class="text-sm font-medium">Get to Know Me</span>
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold mb-6">
                            <span class="text-white">About</span>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                                Shah Nawaz
                            </span>
                        </h1>

                        <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                            Senior Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies.
                            I craft exceptional digital experiences that drive business growth and solve complex problems.
                        </p>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-3 gap-6 mb-10">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gradient mb-2">5+</div>
                                <div class="text-sm text-gray-400">Years Experience</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gradient mb-2">50+</div>
                                <div class="text-sm text-gray-400">Projects</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gradient mb-2">30+</div>
                                <div class="text-sm text-gray-400">Happy Clients</div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="{{ route('contact') }}"
                                class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover:shadow-xl hover:shadow-purple-500/30 transition-all duration-300 inline-flex items-center gap-3">
                                <i class="fas fa-paper-plane"></i>
                                <span>Get In Touch</span>
                            </a>
                            <a href="{{ asset('cv/shah-nawaz-cv.pdf') }}"
                                class="px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full font-semibold text-white hover:bg-white/10 transition-all duration-300 inline-flex items-center gap-3"
                                download>
                                <i class="fas fa-download"></i>
                                <span>Download CV</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column - Profile Image -->
                    <div class="relative" data-aos="fade-left">
                        <div class="relative w-full max-w-md mx-auto">
                            <!-- Floating Elements -->
                            <div
                                class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full opacity-20 blur-2xl animate-pulse">
                            </div>
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full opacity-20 blur-2xl animate-pulse"
                                style="animation-delay: 1s;"></div>

                            <!-- Main Image Container -->
                            <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 rounded-3xl p-6">
                                <div class="relative w-64 h-64 mx-auto mb-6">
                                    <!-- Animated Border -->
                                    <div
                                        class="absolute inset-0 rounded-full border-4 border-dashed border-purple-500/30 animate-spin-slow">
                                    </div>

                                    <!-- Profile Image -->
                                    <div class="absolute inset-4 rounded-full overflow-hidden border-4 border-white/20">
                                        <img src="{{ asset('assets/img/pic.jpeg') }}" alt="Shah Nawaz"
                                            class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent">
                                        </div>
                                    </div>

                                    <!-- Status Badge -->
                                    <div
                                        class="absolute bottom-2 right-2 flex items-center gap-2 px-3 py-1 bg-emerald-500/20 backdrop-blur-sm border border-emerald-500/30 rounded-full">
                                        <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                        <span class="text-xs font-medium text-emerald-300">Available</span>
                                    </div>
                                </div>

                                <!-- Quick Info -->
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold text-white mb-2">Shah Nawaz</h3>
                                    <p class="text-purple-300 font-medium mb-3">Senior Full Stack Developer</p>
                                    <p class="text-gray-400 text-sm">📍 Gurguri Karak, KPK Pakistan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Timeline -->
    <section class="py-20 bg-slate-900 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent"></div>

        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                        <i class="fas fa-history text-blue-400"></i>
                        <span class="text-sm font-medium">Professional Journey</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                        My <span class="text-gradient">Experience</span>
                    </h2>

                    <p class="text-gray-400 text-lg">
                        A timeline of my professional growth and career milestones
                    </p>
                </div>

                <!-- Timeline -->
                <div class="relative">
                    <!-- Timeline Line -->
                    <div
                        class="absolute left-6 md:left-1/2 transform md:-translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500">
                    </div>

                    <!-- Timeline Items -->
                    <div class="space-y-12">
                        <!-- Timeline Item 1 -->
                        <div class="relative group" data-aos="fade-up">
                            <div class="flex flex-col md:flex-row items-start">
                                <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                                    <div
                                        class="inline-block px-4 py-2 bg-blue-500/20 text-blue-300 text-sm rounded-full mb-3">
                                        2020 - Present
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Senior Full Stack Developer</h3>
                                    <p class="text-gray-400 text-sm">Leading enterprise projects</p>
                                </div>

                                <!-- Timeline Dot -->
                                <div
                                    class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full border-4 border-slate-900 group-hover:scale-150 transition-transform">
                                </div>

                                <div class="md:w-1/2 md:pl-12">
                                    <div
                                        class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                                        <p class="text-gray-300 mb-4">
                                            Leading development teams and architecting enterprise solutions for various
                                            industries.
                                            Specializing in Laravel microservices and Vue.js SPA applications.
                                        </p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">Team Leadership</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">System
                                                Architecture</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">Performance
                                                Optimization</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                            <div class="flex flex-col md:flex-row items-start">
                                <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0 order-2 md:order-1">
                                    <div
                                        class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                                        <p class="text-gray-300 mb-4">
                                            Developed and maintained multiple web applications using Laravel and Vue.js.
                                            Implemented RESTful APIs and real-time features for various clients.
                                        </p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">Laravel
                                                Development</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">Vue.js SPAs</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">API Development</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Timeline Dot -->
                                <div
                                    class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full border-4 border-slate-900 group-hover:scale-150 transition-transform">
                                </div>

                                <div class="md:w-1/2 md:pl-12 order-1 md:order-2 mb-4 md:mb-0">
                                    <div
                                        class="inline-block px-4 py-2 bg-purple-500/20 text-purple-300 text-sm rounded-full mb-3">
                                        2018 - 2020
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Full Stack Developer</h3>
                                    <p class="text-gray-400 text-sm">Client projects & startups</p>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                            <div class="flex flex-col md:flex-row items-start">
                                <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                                    <div
                                        class="inline-block px-4 py-2 bg-pink-500/20 text-pink-300 text-sm rounded-full mb-3">
                                        2016 - 2018
                                    </div>
                                    <h3 class="text-xl font-bold text-white mb-2">Web Developer</h3>
                                    <p class="text-gray-400 text-sm">Building foundations</p>
                                </div>

                                <!-- Timeline Dot -->
                                <div
                                    class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 w-4 h-4 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full border-4 border-slate-900 group-hover:scale-150 transition-transform">
                                </div>

                                <div class="md:w-1/2 md:pl-12">
                                    <div
                                        class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                                        <p class="text-gray-300 mb-4">
                                            Started career with frontend development and basic backend skills.
                                            Built responsive websites and learned modern web development practices.
                                        </p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">HTML/CSS</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">JavaScript</span>
                                            <span class="px-3 py-1 bg-white/5 text-xs rounded-full">PHP Basics</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy & Approach -->
    <section class="py-20 bg-slate-800 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                        <i class="fas fa-lightbulb text-yellow-400"></i>
                        <span class="text-sm font-medium">My Philosophy</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                        Development <span class="text-gradient">Approach</span>
                    </h2>
                </div>

                <!-- Philosophy Cards -->
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="group" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-code text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Clean Code</h3>
                            <p class="text-gray-400">
                                Writing maintainable, well-documented code that follows industry best practices and design
                                patterns.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="group" data-aos="fade-up" data-aos-delay="200">
                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-rocket text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Performance First</h3>
                            <p class="text-gray-400">
                                Optimizing applications for speed, scalability, and excellent user experience across all
                                devices.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="group" data-aos="fade-up" data-aos-delay="300">
                        <div
                            class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-handshake text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4">Client Collaboration</h3>
                            <p class="text-gray-400">
                                Working closely with clients to understand their needs and deliver solutions that exceed
                                expectations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Interests -->
    <section class="py-20 bg-slate-900 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                        <i class="fas fa-heart text-red-400"></i>
                        <span class="text-sm font-medium">Beyond Code</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">
                        Personal <span class="text-gradient">Interests</span>
                    </h2>

                    <p class="text-gray-400 text-lg">
                        What I enjoy when I'm not writing code
                    </p>
                </div>

                <!-- Interests Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach ([['icon' => 'fas fa-book', 'title' => 'Reading', 'color' => 'from-blue-500 to-cyan-500'], ['icon' => 'fas fa-music', 'title' => 'Music', 'color' => 'from-purple-500 to-pink-500'], ['icon' => 'fas fa-hiking', 'title' => 'Hiking', 'color' => 'from-emerald-500 to-teal-500'], ['icon' => 'fas fa-gamepad', 'title' => 'Gaming', 'color' => 'from-orange-500 to-red-500']] as $interest)
                        <div class="text-center group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="relative mb-4">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r {{ $interest['color'] }} rounded-xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300">
                                </div>
                                <div
                                    class="relative w-20 h-20 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-300">
                                    <i class="{{ $interest['icon'] }} text-2xl text-white"></i>
                                </div>
                            </div>
                            <span class="text-sm font-semibold text-white">{{ $interest['title'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-900/30 to-purple-900/30 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl animate-float"
            style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Let's Build Something Amazing Together
                </h2>

                <p class="text-xl text-gray-300 mb-10">
                    Whether you have a project in mind or just want to connect, I'd love to hear from you.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('contact') }}"
                        class="px-10 py-5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                        <i class="fas fa-paper-plane"></i>
                        <span>Start a Conversation</span>
                    </a>

                    <a href="{{ route('portfolio') }}"
                        class="px-10 py-5 bg-white/5 backdrop-blur-sm border border-white/20 rounded-full font-semibold text-white hover:bg-white/10 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                        <i class="fas fa-briefcase"></i>
                        <span>View My Work</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .text-gradient {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) translateX(0);
            }

            33% {
                transform: translateY(-10px) translateX(5px);
            }

            66% {
                transform: translateY(-5px) translateX(-5px);
            }
        }

        .animate-float {
            animation: float 15s ease-in-out infinite;
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Parallax effect for background elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.animate-float');

                parallaxElements.forEach((el, index) => {
                    const speed = 0.2 + (index * 0.1);
                    el.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Add hover effect to timeline dots
            const timelineDots = document.querySelectorAll('.group .absolute.w-4');
            timelineDots.forEach(dot => {
                dot.addEventListener('mouseenter', () => {
                    dot.classList.add('scale-150');
                });
                dot.addEventListener('mouseleave', () => {
                    dot.classList.remove('scale-150');
                });
            });
        });
    </script>
@endpush
