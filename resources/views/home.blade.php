@extends('layouts.app')

@section('title', 'Shah Nawaz | Creative Full Stack Developer')

@section('content')
    <!-- Hero Section with Advanced Animations -->
    <section
        class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
        <!-- Animated Background Grid -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0"
                style="background-image: linear-gradient(rgba(139, 92, 246, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(139, 92, 246, 0.1) 1px, transparent 1px); background-size: 50px 50px;">
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent"></div>
        </div>

        <!-- Floating Orbs -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-purple-500/30 rounded-full filter blur-3xl animate-float"
                style="animation-delay: 0s;"></div>
            <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-blue-500/30 rounded-full filter blur-3xl animate-float"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-pink-500/30 rounded-full filter blur-3xl animate-float"
                style="animation-delay: 4s;"></div>
        </div>

        <!-- Hero Content -->
        <div class="container relative z-10 mx-auto px-4 py-20">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Text Content -->
                    <div class="text-white space-y-8" data-aos="fade-right">
                        <!-- Animated Badge -->
                        <div class="inline-flex items-center gap-3 px-6 py-3 rounded-full backdrop-blur-xl bg-white/10 border border-white/20 shadow-2xl"
                            data-aos="fade-down" data-aos-delay="100">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                            </span>
                            <span class="text-sm font-semibold tracking-wide">Available for Freelance</span>
                            <span
                                class="px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-full">NEW</span>
                        </div>

                        <!-- Main Heading with Typing Effect -->
                        <div class="space-y-4">
                            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                                <span class="block" data-aos="fade-up" data-aos-delay="200">Hi, I'm</span>
                                <span
                                    class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 animate-gradient"
                                    data-aos="fade-up" data-aos-delay="300">Shah Nawaz</span>
                            </h1>
                            <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full"></div>
                                <p class="text-2xl md:text-3xl text-gray-300 font-light">Full Stack Developer</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl" data-aos="fade-up"
                            data-aos-delay="500">
                            I craft <span class="text-purple-400 font-semibold">exceptional digital experiences</span> that
                            merge creativity with cutting-edge technology. Specializing in Laravel, Vue.js, and modern web
                            architecture.
                        </p>

                        <!-- Stats Counter -->
                        <div class="grid grid-cols-3 gap-6 py-8" data-aos="fade-up" data-aos-delay="600">
                            @foreach ([['count' => '50+', 'label' => 'Projects'], ['count' => '5+', 'label' => 'Years Exp'], ['count' => '98%', 'label' => 'Satisfaction']] as $stat)
                                <div class="group relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
                                    </div>
                                    <div
                                        class="relative backdrop-blur-xl bg-white/5 border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300">
                                        <div
                                            class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-2">
                                            {{ $stat['count'] }}</div>
                                        <div class="text-sm text-gray-400 uppercase tracking-wider">{{ $stat['label'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="700">
                            <a href="{{ route('portfolio.index') }}"
                                class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105 overflow-hidden">
                                <span class="relative z-10 flex items-center gap-3">
                                    <span>Explore My Work</span>
                                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                                </span>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </a>
                            <a href="#contact"
                                class="group px-8 py-4 backdrop-blur-xl bg-white/10 border-2 border-white/20 rounded-full font-semibold text-white hover:bg-white/20 transition-all duration-300 hover:scale-105 flex items-center gap-3">
                                <i class="fas fa-paper-plane"></i>
                                <span>Get In Touch</span>
                            </a>
                        </div>
                    </div>

                    <!-- 3D Card Profile -->
                    <div class="relative" data-aos="fade-left" data-aos-delay="400">
                        <div class="relative perspective-1000">
                            <!-- Main Card -->
                            <div
                                class="relative backdrop-blur-2xl bg-gradient-to-br from-white/10 to-white/5 border border-white/20 rounded-3xl p-8 shadow-2xl transform-gpu hover:scale-105 transition-all duration-500">
                                <!-- Animated Border -->
                                <div
                                    class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 opacity-0 blur-xl group-hover:opacity-50 transition-opacity duration-500">
                                </div>

                                <!-- Profile Image with Frame -->
                                <div class="relative mb-8">
                                    <div class="relative w-72 h-72 mx-auto">
                                        <!-- Rotating Ring -->
                                        <div
                                            class="absolute inset-0 rounded-full border-4 border-dashed border-purple-500/30 animate-spin-slow">
                                        </div>

                                        <!-- Image Container -->
                                        <div
                                            class="absolute inset-4 rounded-full overflow-hidden border-4 border-white/20 shadow-2xl">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=774&q=80"
                                                alt="Alex Morgan" class="w-full h-full object-cover">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-purple-900/50 to-transparent">
                                            </div>
                                        </div>

                                        <!-- Status Indicator -->
                                        <div
                                            class="absolute bottom-8 right-8 flex items-center gap-2 px-4 py-2 backdrop-blur-xl bg-emerald-500/20 border border-emerald-500/30 rounded-full">
                                            <span class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"></span>
                                            <span class="text-sm font-semibold text-emerald-300">Online</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Info Section -->
                                <div class="text-center space-y-6">
                                    <div>
                                        <h3 class="text-3xl font-bold text-white mb-2">Shah Nawaz</h3>
                                        <p class="text-purple-300 font-medium mb-4">Senior Full Stack Developer</p>
                                        <p class="text-gray-400 text-sm">🌍 Gurguri Karak, Kpk Pakistan</p>
                                    </div>

                                    <!-- Tech Stack Pills -->
                                    <div class="flex flex-wrap justify-center gap-2">
                                        @foreach (['Html', 'Css', 'Js','Bootstrap','Mysql', 'Tailwind', 'Node.js', 'Laravel'] as $tech)
                                            <span
                                                class="px-4 py-2 backdrop-blur-xl bg-white/10 border border-white/20 rounded-full text-sm font-medium text-white hover:bg-white/20 transition-all duration-300 hover:scale-110 cursor-default">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>

                                    <!-- Social Links -->
                                    <div class="flex justify-center gap-3 pt-4">
                                        @foreach ([['icon' => 'fab fa-github', 'color' => 'hover:bg-gray-700', 'gradient' => 'from-gray-600 to-gray-800'], ['icon' => 'fab fa-linkedin', 'color' => 'hover:bg-blue-600', 'gradient' => 'from-blue-500 to-blue-700'], ['icon' => 'fab fa-twitter', 'color' => 'hover:bg-sky-500', 'gradient' => 'from-sky-400 to-sky-600'], ['icon' => 'fab fa-dribbble', 'color' => 'hover:bg-pink-600', 'gradient' => 'from-pink-500 to-pink-700']] as $social)
                                            <a href="#"
                                                class="group relative w-12 h-12 backdrop-blur-xl bg-white/10 border border-white/20 rounded-xl flex items-center justify-center text-white hover:scale-110 transition-all duration-300 overflow-hidden">
                                                <i class="{{ $social['icon'] }} text-lg relative z-10"></i>
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-r {{ $social['gradient'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div
                                class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full opacity-20 blur-2xl animate-pulse">
                            </div>
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full opacity-20 blur-2xl animate-pulse"
                                style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 z-20" data-aos="fade-up" data-aos-delay="1000">
            <a href="#services"
                class="flex flex-col items-center gap-2 text-white/70 hover:text-white transition-colors group">
                <span class="text-sm font-medium">Scroll Down</span>
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center p-2">
                    <div class="w-1 h-2 bg-white rounded-full animate-bounce"></div>
                </div>
            </a>
        </div>
    </section>

    <!-- Services Section with Card Animations -->
    <section id="services" class="py-32 bg-gradient-to-b from-slate-900 to-slate-800 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, #8b5cf6 1px, transparent 1px); background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto text-center mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-3 px-6 py-3 backdrop-blur-xl bg-white/5 border border-white/10 rounded-full mb-6">
                    <i class="fas fa-sparkles text-yellow-400"></i>
                    <span class="text-white font-semibold">What I Do Best</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">My</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                        Services</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto leading-relaxed">
                    Delivering world-class solutions from conception to deployment, crafted with precision and passion.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                    $services = [
                        [
                            'icon' => 'fas fa-code',
                            'title' => 'Web Development',
                            'description' =>
                                'Full-stack applications with Laravel, Vue.js, and cutting-edge frameworks.',
                            'features' => ['RESTful APIs', 'Real-time Apps', 'Microservices'],
                            'gradient' => 'from-blue-500 to-cyan-500',
                            'iconBg' => 'from-blue-500/20 to-cyan-500/20',
                        ],
                        [
                            'icon' => 'fas fa-mobile-screen',
                            'title' => 'Mobile Apps',
                            'description' => 'Native and cross-platform mobile solutions for iOS and Android.',
                            'features' => ['React Native', 'Flutter', 'PWA'],
                            'gradient' => 'from-purple-500 to-pink-500',
                            'iconBg' => 'from-purple-500/20 to-pink-500/20',
                        ],
                        [
                            'icon' => 'fas fa-palette',
                            'title' => 'UI/UX Design',
                            'description' => 'Beautiful, intuitive interfaces that users love and remember.',
                            'features' => ['User Research', 'Prototyping', 'Design Systems'],
                            'gradient' => 'from-pink-500 to-rose-500',
                            'iconBg' => 'from-pink-500/20 to-rose-500/20',
                        ],
                        [
                            'icon' => 'fas fa-database',
                            'title' => 'Backend Solutions',
                            'description' => 'Robust, scalable backend architecture and database optimization.',
                            'features' => ['API Design', 'Database Optimization', 'Cloud Infrastructure'],
                            'gradient' => 'from-emerald-500 to-teal-500',
                            'iconBg' => 'from-emerald-500/20 to-teal-500/20',
                        ],
                        [
                            'icon' => 'fas fa-rocket',
                            'title' => 'DevOps & Cloud',
                            'description' => 'CI/CD pipelines, containerization, and cloud infrastructure setup.',
                            'features' => ['Docker', 'Kubernetes', 'AWS/Azure'],
                            'gradient' => 'from-orange-500 to-red-500',
                            'iconBg' => 'from-orange-500/20 to-red-500/20',
                        ],
                        [
                            'icon' => 'fas fa-chart-line',
                            'title' => 'Tech Consulting',
                            'description' => 'Strategic guidance on technology decisions and best practices.',
                            'features' => ['Code Audits', 'Tech Strategy', 'Team Training'],
                            'gradient' => 'from-indigo-500 to-purple-500',
                            'iconBg' => 'from-indigo-500/20 to-purple-500/20',
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $service)
                    <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <!-- Glow Effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r {{ $service['gradient'] }} rounded-3xl opacity-0 group-hover:opacity-20 blur-xl transition-all duration-500">
                        </div>

                        <!-- Card -->
                        <div
                            class="relative backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 hover:-translate-y-2 h-full">
                            <!-- Icon -->
                            <div class="relative mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r {{ $service['iconBg'] }} rounded-2xl blur-xl">
                                </div>
                                <div
                                    class="relative w-20 h-20 bg-gradient-to-r {{ $service['gradient'] }} rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500">
                                    <i class="{{ $service['icon'] }} text-3xl text-white"></i>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $service['gradient'] }} transition-all duration-300">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-gray-400 mb-6 leading-relaxed">{{ $service['description'] }}</p>

                            <!-- Features -->
                            <ul class="space-y-3 mb-6">
                                @foreach ($service['features'] as $feature)
                                    <li class="flex items-center text-gray-300">
                                        <div
                                            class="w-2 h-2 bg-gradient-to-r {{ $service['gradient'] }} rounded-full mr-3">
                                        </div>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>

                            <!-- CTA -->
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-white font-semibold group/link">
                                <span
                                    class="bg-gradient-to-r {{ $service['gradient'] }} bg-clip-text text-transparent">Learn
                                    More</span>
                                <i
                                    class="fas fa-arrow-right ml-2 text-white transition-transform group-hover/link:translate-x-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Projects with Parallax -->
    <section id="projects" class="py-32 bg-slate-800 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto text-center mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-3 px-6 py-3 backdrop-blur-xl bg-white/5 border border-white/10 rounded-full mb-6">
                    <i class="fas fa-briefcase text-blue-400"></i>
                    <span class="text-white font-semibold">Portfolio Showcase</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">Featured</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">
                        Projects</span>
                </h2>
            </div>

            <!-- Projects Grid -->
            @php
                $projects = [
                    [
                        'title' => 'E-Commerce Platform',
                        'category' => 'Web Application',
                        'description' => 'Modern online marketplace with advanced features',
                        'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=800&q=80',
                        'tags' => ['Laravel', 'Vue.js', 'Stripe'],
                        'gradient' => 'from-blue-600 to-purple-600',
                    ],
                    [
                        'title' => 'Project Dashboard',
                        'category' => 'SaaS Platform',
                        'description' => 'Real-time collaborative workspace',
                        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80',
                        'tags' => ['React', 'Node.js', 'MongoDB'],
                        'gradient' => 'from-purple-600 to-pink-600',
                    ],
                    [
                        'title' => 'Fitness Tracker',
                        'category' => 'Mobile App',
                        'description' => 'AI-powered workout and nutrition planner',
                        'image' => 'https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?w=800&q=80',
                        'tags' => ['React Native', 'Firebase'],
                        'gradient' => 'from-emerald-600 to-teal-600',
                    ],
                ];
            @endphp

            <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @foreach ($projects as $index => $project)
                    <div class="project-card group relative" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <!-- Card Container -->
                        <div
                            class="relative backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 transition-all duration-500 hover:-translate-y-2">
                            <!-- Image Container -->
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500">
                                </div>

                                <!-- Overlay Content -->
                                <div class="absolute inset-0 flex items-end p-6">
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($project['tags'] as $tag)
                                            <span
                                                class="px-3 py-1 backdrop-blur-xl bg-white/20 border border-white/30 text-white text-xs font-semibold rounded-full">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6 space-y-4">
                                <div>
                                    <span
                                        class="inline-block px-4 py-1 bg-gradient-to-r {{ $project['gradient'] }} text-white text-sm font-semibold rounded-full mb-3">
                                        {{ $project['category'] }}
                                    </span>
                                    <h3
                                        class="text-2xl font-bold text-white mb-2 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $project['gradient'] }} transition-all duration-300">
                                        {{ $project['title'] }}
                                    </h3>
                                    <p class="text-gray-400">{{ $project['description'] }}</p>
                                </div>

                                <a href="#"
                                    class="inline-flex items-center gap-2 text-white font-semibold group/link">
                                    <span
                                        class="bg-gradient-to-r {{ $project['gradient'] }} bg-clip-text text-transparent">View
                                        Project</span>
                                    <i
                                        class="fas fa-arrow-right text-white transition-transform group-hover/link:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <a href="{{ route('portfolio.index') }}"
                    class="group inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105">
                    <span>Explore All Projects</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section with Interactive Elements -->
    <section id="skills" class="py-32 bg-gradient-to-b from-slate-800 to-slate-900 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Left: Skills Progress -->
                    <div data-aos="fade-right">
                        <div
                            class="inline-flex items-center gap-3 px-6 py-3 backdrop-blur-xl bg-white/5 border border-white/10 rounded-full mb-6">
                            <i class="fas fa-brain text-purple-400"></i>
                            <span class="text-white font-semibold">My Expertise</span>
                        </div>

                        <h2 class="text-5xl font-bold mb-6">
                            <span class="text-white">Technical</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">
                                Skills</span>
                        </h2>

                        <p class="text-xl text-gray-400 mb-12 leading-relaxed">
                            Mastering the full spectrum of modern web development with years of hands-on experience.
                        </p>

                        <div class="space-y-8">
                            @php
                                $skills = [
                                    ['name' => 'Laravel & PHP', 'level' => 95, 'color' => 'from-red-500 to-orange-500'],
                                    [
                                        'name' => 'Vue.js & React',
                                        'level' => 92,
                                        'color' => 'from-green-500 to-emerald-500',
                                    ],
                                    [
                                        'name' => 'JavaScript/TypeScript',
                                        'level' => 90,
                                        'color' => 'from-yellow-500 to-orange-500',
                                    ],
                                    [
                                        'name' => 'Database Design',
                                        'level' => 88,
                                        'color' => 'from-blue-500 to-cyan-500',
                                    ],
                                    [
                                        'name' => 'DevOps & Cloud',
                                        'level' => 85,
                                        'color' => 'from-purple-500 to-pink-500',
                                    ],
                                ];
                            @endphp

                            @foreach ($skills as $skill)
                                <div class="skill-item group">
                                    <div class="flex justify-between items-center mb-3">
                                        <span class="text-lg font-semibold text-white">{{ $skill['name'] }}</span>
                                        <span
                                            class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r {{ $skill['color'] }}">{{ $skill['level'] }}%</span>
                                    </div>
                                    <div
                                        class="relative h-3 bg-white/5 rounded-full overflow-hidden backdrop-blur-xl border border-white/10">
                                        <div class="skill-bar absolute inset-y-0 left-0 bg-gradient-to-r {{ $skill['color'] }} rounded-full transition-all duration-1000 ease-out shadow-lg"
                                            style="width: 0%" data-width="{{ $skill['level'] }}%"></div>
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r {{ $skill['color'] }} opacity-20 blur-sm">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right: Tech Stack -->
                    <div data-aos="fade-left">
                        <div
                            class="relative backdrop-blur-2xl bg-gradient-to-br from-white/10 to-white/5 border border-white/10 rounded-3xl p-10 shadow-2xl">
                            <h3 class="text-3xl font-bold text-white mb-10 text-center">Technology Stack</h3>

                            <div class="grid grid-cols-3 gap-6">
                                @php
                                    $technologies = [
                                        [
                                            'icon' => 'fab fa-laravel',
                                            'name' => 'Laravel',
                                            'color' => 'from-red-500 to-orange-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-vuejs',
                                            'name' => 'Vue.js',
                                            'color' => 'from-green-500 to-emerald-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-react',
                                            'name' => 'React',
                                            'color' => 'from-blue-500 to-cyan-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-js',
                                            'name' => 'JavaScript',
                                            'color' => 'from-yellow-500 to-orange-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-php',
                                            'name' => 'PHP',
                                            'color' => 'from-purple-500 to-indigo-600',
                                        ],
                                        [
                                            'icon' => 'fas fa-database',
                                            'name' => 'MySQL',
                                            'color' => 'from-blue-600 to-indigo-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-docker',
                                            'name' => 'Docker',
                                            'color' => 'from-blue-500 to-sky-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-aws',
                                            'name' => 'AWS',
                                            'color' => 'from-orange-500 to-yellow-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-git-alt',
                                            'name' => 'Git',
                                            'color' => 'from-red-500 to-rose-600',
                                        ],
                                    ];
                                @endphp

                                @foreach ($technologies as $tech)
                                    <div class="group text-center transform hover:scale-110 transition-all duration-300">
                                        <div class="relative mb-3">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-r {{ $tech['color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300">
                                            </div>
                                            <div
                                                class="relative w-20 h-20 backdrop-blur-xl bg-white/5 border border-white/10 rounded-2xl flex items-center justify-center mx-auto group-hover:bg-white/10 transition-all duration-300">
                                                <i
                                                    class="{{ $tech['icon'] }} text-3xl text-transparent bg-clip-text bg-gradient-to-r {{ $tech['color'] }}"></i>
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-white">{{ $tech['name'] }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Additional Skills -->
                            <div class="mt-10 pt-8 border-t border-white/10">
                                <h4 class="text-lg font-semibold text-white mb-4 text-center">Also Experienced With</h4>
                                <div class="flex flex-wrap justify-center gap-3">
                                    @foreach (['Tailwind CSS', 'Bootstrap', 'Redux', 'GraphQL', 'MongoDB', 'PostgreSQL', 'Redis', 'Socket.io'] as $tool)
                                        <span
                                            class="px-4 py-2 backdrop-blur-xl bg-white/5 border border-white/10 rounded-full text-sm text-gray-300 hover:bg-white/10 hover:text-white transition-all duration-300 cursor-default">
                                            {{ $tool }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-32 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, #8b5cf6 2px, transparent 2px); background-size: 50px 50px;">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-20" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-3 px-6 py-3 backdrop-blur-xl bg-white/5 border border-white/10 rounded-full mb-6">
                    <i class="fas fa-quote-left text-purple-400"></i>
                    <span class="text-white font-semibold">Client Testimonials</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">What Clients</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400"> Say</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                    $testimonials = [
                        [
                            'name' => 'Sarah Johnson',
                            'role' => 'CEO, TechStart Inc',
                            'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80',
                            'text' =>
                                'Alex delivered beyond expectations. The platform is robust, scalable, and beautifully designed.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Michael Chen',
                            'role' => 'Product Manager, Innovate Co',
                            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80',
                            'text' =>
                                'Working with Alex was a game-changer. Professional, skilled, and always responsive.',
                            'rating' => 5,
                        ],
                        [
                            'name' => 'Emily Rodriguez',
                            'role' => 'Founder, Creative Solutions',
                            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&q=80',
                            'text' =>
                                'Exceptional work! Our app exceeded all performance metrics. Highly recommend Alex.',
                            'rating' => 5,
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $index => $testimonial)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <div
                            class="relative backdrop-blur-xl bg-white/5 border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 h-full">
                            <!-- Quote Icon -->
                            <div class="absolute top-8 right-8 text-6xl text-purple-500/20">
                                <i class="fas fa-quote-right"></i>
                            </div>

                            <!-- Rating -->
                            <div class="flex gap-1 mb-6">
                                @for ($i = 0; $i < $testimonial['rating']; $i++)
                                    <i class="fas fa-star text-yellow-400"></i>
                                @endfor
                            </div>

                            <!-- Testimonial Text -->
                            <p class="text-gray-300 text-lg mb-8 leading-relaxed relative z-10">
                                "{{ $testimonial['text'] }}"
                            </p>

                            <!-- Author -->
                            <div class="flex items-center gap-4">
                                <div class="relative">
                                    <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-purple-500/50">
                                        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div
                                        class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-slate-900">
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold">{{ $testimonial['name'] }}</h4>
                                    <p class="text-gray-400 text-sm">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact"
        class="py-32 bg-gradient-to-br from-blue-900 via-purple-900 to-pink-900 relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0"
                style="background-image: linear-gradient(rgba(255,255,255,0.1) 2px, transparent 2px), linear-gradient(90deg, rgba(255,255,255,0.1) 2px, transparent 2px); background-size: 60px 60px;">
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/30 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-500/30 rounded-full filter blur-3xl animate-float"
            style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-5xl mx-auto text-center" data-aos="zoom-in">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-3 px-6 py-3 backdrop-blur-xl bg-white/10 border border-white/20 rounded-full mb-8">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-white font-semibold">Open for New Projects</span>
                </div>

                <!-- Heading -->
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                    Let's Create Something
                    <span
                        class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-300 via-purple-300 to-pink-300">
                        Extraordinary Together
                    </span>
                </h2>

                <!-- Description -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 max-w-3xl mx-auto leading-relaxed">
                    Have a project in mind? Let's discuss how we can bring your vision to life with cutting-edge technology
                    and creative excellence.
                </p>

                <!-- Contact Info Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-4xl mx-auto">
                    @foreach ([['icon' => 'fas fa-envelope', 'title' => 'Email', 'value' => 'alex@example.com', 'link' => 'mailto:alex@example.com'], ['icon' => 'fas fa-phone', 'title' => 'Phone', 'value' => '+1 (555) 123-4567', 'link' => 'tel:+15551234567'], ['icon' => 'fas fa-map-marker-alt', 'title' => 'Location', 'value' => 'San Francisco, CA', 'link' => '#']] as $contact)
                        <div
                            class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 hover:scale-105">
                            <i class="{{ $contact['icon'] }} text-3xl text-purple-300 mb-3"></i>
                            <h3 class="text-white font-semibold mb-2">{{ $contact['title'] }}</h3>
                            <a href="{{ $contact['link'] }}"
                                class="text-gray-300 hover:text-white transition-colors">{{ $contact['value'] }}</a>
                        </div>
                    @endforeach
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('contact') }}"
                        class="group relative px-12 py-6 bg-white text-purple-900 font-bold text-lg rounded-full shadow-2xl hover:shadow-white/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-4 overflow-hidden">
                        <span class="relative z-10 flex items-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            <span>Start a Project</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                        </span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </a>

                    <a href="#"
                        class="group px-12 py-6 backdrop-blur-xl bg-white/10 border-2 border-white/30 text-white font-bold text-lg rounded-full hover:bg-white/20 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                        <i class="fas fa-calendar-check"></i>
                        <span>Schedule Call</span>
                    </a>
                </div>

                <!-- Social Proof -->
                <div class="mt-16 pt-12 border-t border-white/20">
                    <p class="text-gray-300 mb-6">Join 50+ satisfied clients worldwide</p>
                    <div class="flex justify-center items-center gap-8 flex-wrap">
                        @foreach (['fab fa-google', 'fab fa-microsoft', 'fab fa-amazon', 'fab fa-spotify', 'fab fa-slack'] as $brand)
                            <i
                                class="{{ $brand }} text-4xl text-white/40 hover:text-white/60 transition-colors"></i>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-gray-400 py-16 border-t border-white/10">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-4 gap-12 mb-12">
                    <!-- Brand -->
                    <div class="md:col-span-2">
                        <h3
                            class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-4">
                            Alex Morgan
                        </h3>
                        <p class="text-gray-400 mb-6 max-w-md">
                            Full Stack Developer passionate about creating exceptional digital experiences with modern
                            technologies.
                        </p>
                        <div class="flex gap-4">
                            @foreach ([['icon' => 'fab fa-github', 'gradient' => 'from-gray-500 to-gray-700'], ['icon' => 'fab fa-linkedin', 'gradient' => 'from-blue-500 to-blue-700'], ['icon' => 'fab fa-twitter', 'gradient' => 'from-sky-400 to-sky-600'], ['icon' => 'fab fa-dribbble', 'gradient' => 'from-pink-500 to-pink-700']] as $social)
                                <a href="#"
                                    class="group relative w-12 h-12 backdrop-blur-xl bg-white/5 border border-white/10 rounded-xl flex items-center justify-center hover:bg-white/10 transition-all duration-300 hover:scale-110 overflow-hidden">
                                    <i
                                        class="{{ $social['icon'] }} text-lg relative z-10 text-gray-400 group-hover:text-white transition-colors"></i>
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r {{ $social['gradient'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-white font-bold mb-4">Quick Links</h4>
                        <ul class="space-y-3">
                            @foreach (['Home', 'About', 'Services', 'Portfolio', 'Blog', 'Contact'] as $link)
                                <li>
                                    <a href="#"
                                        class="hover:text-white transition-colors inline-flex items-center gap-2 group">
                                        <i
                                            class="fas fa-chevron-right text-xs text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                        {{ $link }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Services -->
                    <div>
                        <h4 class="text-white font-bold mb-4">Services</h4>
                        <ul class="space-y-3">
                            @foreach (['Web Development', 'Mobile Apps', 'UI/UX Design', 'Consulting', 'DevOps', 'Support'] as $service)
                                <li>
                                    <a href="#"
                                        class="hover:text-white transition-colors inline-flex items-center gap-2 group">
                                        <i
                                            class="fas fa-chevron-right text-xs text-purple-400 group-hover:translate-x-1 transition-transform"></i>
                                        {{ $service }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-sm">
                        © 2025 Alex Morgan. All rights reserved.
                    </p>
                    <div class="flex gap-6 text-sm">
                        <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('styles')
    <style>
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
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

        .perspective-1000 {
            perspective: 1000px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) translateX(0px);
            }

            33% {
                transform: translateY(-20px) translateX(10px);
            }

            66% {
                transform: translateY(-10px) translateX(-10px);
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate skill bars on scroll
            const skillBars = document.querySelectorAll('.skill-bar');

            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const width = bar.getAttribute('data-width');
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 200);
                        observer.unobserve(bar);
                    }
                });
            }, observerOptions);

            skillBars.forEach(bar => observer.observe(bar));

            // Parallax effect for sections
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.animate-float');

                parallaxElements.forEach((el, index) => {
                    const speed = 0.5 + (index * 0.1);
                    el.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });
        });
    </script>
@endpush
