@extends('layouts.app')

@section('title', 'Shah Nawaz | Creative Full Stack Developer')

@section('content')
    <!-- Hero Section with Advanced Animations -->
    <section id="home"
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 pt-20">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-10"
                style="background-image: linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
                        background-size: 50px 50px;">
            </div>

            <!-- Floating Orbs -->
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-purple-500/20 rounded-full filter blur-3xl animate-float animate-pulse-glow">
            </div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/20 rounded-full filter blur-3xl animate-float"
                style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-500/10 rounded-full filter blur-3xl animate-float"
                style="animation-delay: 4s;"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 container mx-auto px-6 py-16">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column -->
                    <div class="text-white" data-aos="fade-right" data-aos-duration="1000">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 glass rounded-full mb-8 animate-slide-in">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span class="text-sm font-medium">Available for Projects</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="hero-heading text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            <span class="block text-gray-300">Hi, I'm</span>
                            <span class="block text-gradient animate-gradient">Shah Nawaz</span>
                            <span class="block text-gray-300 mt-4 text-2xl md:text-3xl">Full Stack Developer</span>
                        </h1>

                        <!-- Description -->
                        <p class="text-xl text-gray-300 mb-10 max-w-2xl leading-relaxed">
                            I build <span class="text-purple-400 font-semibold">scalable web applications</span> using
                            Laravel, Vue.js, and modern technologies. Passionate about clean code, performance optimization,
                            and creating exceptional user experiences.
                        </p>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mb-10 stats-grid">
                            <div class="glass p-6 rounded-2xl hover-lift transition-all duration-300">
                                <div class="text-3xl font-bold text-gradient mb-2">50+</div>
                                <div class="text-gray-400 text-sm uppercase tracking-wider">Projects</div>
                            </div>
                            <div class="glass p-6 rounded-2xl hover-lift transition-all duration-300">
                                <div class="text-3xl font-bold text-gradient mb-2">5+</div>
                                <div class="text-gray-400 text-sm uppercase tracking-wider">Years Exp</div>
                            </div>
                            <div class="glass p-6 rounded-2xl hover-lift transition-all duration-300">
                                <div class="text-3xl font-bold text-gradient mb-2">98%</div>
                                <div class="text-gray-400 text-sm uppercase tracking-wider">Satisfaction</div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <a href="#portfolio"
                                class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover-glow hover-lift transition-all duration-300 inline-flex items-center gap-3">
                                <span>View My Work</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="#contact"
                                class="group px-8 py-4 glass rounded-full font-semibold text-white hover:bg-white/10 transition-all duration-300 inline-flex items-center gap-3">
                                <i class="fas fa-paper-plane"></i>
                                <span>Get In Touch</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Column - Profile Card -->
                    <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="perspective-1000">
                            <!-- Main Card -->
                            <div
                                class="relative glass rounded-3xl p-8 shadow-2xl hover-lift transition-all duration-500 overflow-hidden">
                                <!-- Animated Border -->
                                <div
                                    class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 opacity-0 group-hover:opacity-20 transition-opacity duration-500">
                                </div>

                                <!-- Profile Image -->
                                <div class="relative mb-8">
                                    <div class="relative w-64 h-64 mx-auto">
                                        <!-- Rotating Border -->
                                        <div
                                            class="absolute inset-0 rounded-full border-4 border-dashed border-purple-500/30 animate-spin-slow">
                                        </div>

                                        <!-- Image -->
                                        <div class="absolute inset-4 rounded-full overflow-hidden border-4 border-white/10">
                                            <img src="{{ asset('assets/img/pic.jpeg') }}" alt="Shah Nawaz"
                                                class="w-full h-full object-cover">
                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent">
                                            </div>
                                        </div>

                                        <!-- Status Badge -->
                                        <div
                                            class="absolute bottom-4 right-4 flex items-center gap-2 px-3 py-1 glass rounded-full">
                                            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                            <span class="text-xs font-medium text-emerald-300">Online</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Profile Info -->
                                <div class="text-center space-y-4">
                                    <h3 class="text-2xl font-bold text-white">Shah Nawaz</h3>
                                    <p class="text-purple-300 font-medium">Senior Full Stack Developer</p>
                                    <p class="text-gray-400 text-sm">📍 Gurguri Karak, KPK Pakistan</p>

                                    <!-- Tech Stack -->
                                    <div class="flex flex-wrap justify-center gap-2 pt-4">
                                        @foreach (['Laravel', 'Vue.js', 'React', 'Node.js', 'MySQL', 'Tailwind', 'AWS'] as $tech)
                                            <span class="px-3 py-1 glass text-xs rounded-full">{{ $tech }}</span>
                                        @endforeach
                                    </div>

                                    <!-- Social Links -->
                                    <div class="flex justify-center gap-4 pt-6">
                                        <a href="#"
                                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#"
                                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="#"
                                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#"
                                            class="w-10 h-10 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-colors">
                                            <i class="fab fa-codepen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
            <a href="#about" class="flex flex-col items-center text-gray-400 hover:text-white transition-colors">
                <span class="text-sm mb-2">Scroll Down</span>
                <div class="w-6 h-10 border-2 border-gray-600 rounded-full flex justify-center p-1">
                    <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce"></div>
                </div>
            </a>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section id="portfolio" class="py-24 bg-slate-800 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, #8b5cf6 1px, transparent 1px);
                        background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-briefcase text-blue-400"></i>
                    <span class="font-medium">Featured Work</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">Latest</span>
                    <span class="text-gradient">Projects</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    A glimpse into my recent work and client projects
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @php
                    $projects = [
                        [
                            'title' => 'E-commerce Platform',
                            'category' => 'Web Application',
                            'description' => 'Modern online marketplace with advanced features and payment integration',
                            'image' =>
                                'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'tags' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe'],
                            'link' => '#',
                        ],
                        [
                            'title' => 'Project Dashboard',
                            'category' => 'SaaS Platform',
                            'description' => 'Real-time collaborative workspace for teams',
                            'image' =>
                                'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'tags' => ['React', 'Node.js', 'Socket.io'],
                            'link' => '#',
                        ],
                        [
                            'title' => 'Fitness Tracker',
                            'category' => 'Mobile App',
                            'description' => 'AI-powered workout and nutrition planner',
                            'image' =>
                                'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'tags' => ['React Native', 'Firebase'],
                            'link' => '#',
                        ],
                    ];
                @endphp

                @foreach ($projects as $index => $project)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                        <div
                            class="relative glass rounded-3xl overflow-hidden hover-lift transition-all duration-500 h-full">
                            <!-- Project Image -->
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500">
                                </div>

                                <!-- Category Badge -->
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-blue-300 text-xs rounded-full border border-blue-500/30">
                                        {{ $project['category'] }}
                                    </span>
                                </div>

                                <!-- View Project Button -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href="{{ $project['link'] }}"
                                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover:shadow-lg hover:shadow-purple-500/30 transition-all">
                                        View Project
                                    </a>
                                </div>
                            </div>

                            <!-- Project Content -->
                            <div class="p-6">
                                <h3
                                    class="text-xl font-bold text-white mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-300">
                                    {{ $project['title'] }}
                                </h3>

                                <p class="text-gray-400 mb-4 text-sm">
                                    {{ $project['description'] }}
                                </p>

                                <!-- Technologies -->
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($project['tags'] as $tag)
                                        <span
                                            class="px-3 py-1 bg-white/5 border border-white/10 text-gray-300 text-xs rounded-full">
                                            {{ $tag }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <a href="{{ route('portfolio') }}"
                    class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover:shadow-xl hover:shadow-purple-500/30 transition-all duration-300">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Tech Stack Showcase -->
    <section class="py-24 bg-slate-900 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-tools text-purple-400"></i>
                    <span class="font-medium">Tech Stack</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">Technologies I</span>
                    <span class="text-gradient">Work With</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    Modern tools and technologies for building exceptional web applications
                </p>
            </div>

            <!-- Tech Icons -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 max-w-6xl mx-auto">
                @php
                    $techStack = [
                        ['icon' => 'fab fa-laravel', 'name' => 'Laravel', 'color' => 'text-red-500'],
                        ['icon' => 'fab fa-vuejs', 'name' => 'Vue.js', 'color' => 'text-green-500'],
                        ['icon' => 'fab fa-react', 'name' => 'React', 'color' => 'text-blue-400'],
                        ['icon' => 'fab fa-js', 'name' => 'JavaScript', 'color' => 'text-yellow-500'],
                        ['icon' => 'fab fa-php', 'name' => 'PHP', 'color' => 'text-indigo-400'],
                        ['icon' => 'fas fa-database', 'name' => 'MySQL', 'color' => 'text-blue-600'],
                        ['icon' => 'fab fa-docker', 'name' => 'Docker', 'color' => 'text-blue-500'],
                        ['icon' => 'fab fa-aws', 'name' => 'AWS', 'color' => 'text-orange-500'],
                        ['icon' => 'fab fa-git-alt', 'name' => 'Git', 'color' => 'text-red-400'],
                        ['icon' => 'fab fa-node-js', 'name' => 'Node.js', 'color' => 'text-green-400'],
                        ['icon' => 'fab fa-bootstrap', 'name' => 'Bootstrap', 'color' => 'text-purple-500'],
                        ['icon' => 'fab fa-npm', 'name' => 'NPM', 'color' => 'text-red-600'],
                    ];
                @endphp

                @foreach ($techStack as $tech)
                    <div class="text-center group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        <div class="relative mb-4">
                            <div
                                class="absolute inset-0 {{ $tech['color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-300">
                            </div>
                            <div
                                class="relative w-20 h-20 glass rounded-2xl flex items-center justify-center mx-auto group-hover:scale-110 transition-all duration-300">
                                <i class="{{ $tech['icon'] }} {{ $tech['color'] }} text-3xl"></i>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-white">{{ $tech['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-800 relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, #8b5cf6 1px, transparent 1px);
                        background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-cog text-yellow-400"></i>
                    <span class="font-medium">My Services</span>
                </div>

                <h2 class="section-heading text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">What I</span>
                    <span class="text-gradient">Offer</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    Comprehensive web development services tailored to your business needs
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
                                'Custom web applications built with Laravel, Vue.js, and modern frameworks.',
                            'features' => ['RESTful APIs', 'Real-time Apps', 'E-commerce'],
                            'gradient' => 'from-blue-500 to-cyan-500',
                        ],
                        [
                            'icon' => 'fas fa-mobile-alt',
                            'title' => 'Mobile Apps',
                            'description' => 'Cross-platform mobile applications using React Native and Flutter.',
                            'features' => ['React Native', 'iOS & Android', 'PWA Development'],
                            'gradient' => 'from-purple-500 to-pink-500',
                        ],
                        [
                            'icon' => 'fas fa-database',
                            'title' => 'Backend Solutions',
                            'description' => 'Scalable backend architecture and database design.',
                            'features' => ['API Development', 'Database Design', 'Microservices'],
                            'gradient' => 'from-emerald-500 to-teal-500',
                        ],
                        [
                            'icon' => 'fas fa-cloud',
                            'title' => 'DevOps & Cloud',
                            'description' => 'CI/CD pipelines, containerization, and cloud infrastructure.',
                            'features' => ['Docker & Kubernetes', 'AWS & Azure', 'CI/CD'],
                            'gradient' => 'from-orange-500 to-red-500',
                        ],
                        [
                            'icon' => 'fas fa-paint-brush',
                            'title' => 'UI/UX Design',
                            'description' => 'Beautiful, intuitive user interfaces.',
                            'features' => ['Wireframing', 'Prototyping', 'User Testing'],
                            'gradient' => 'from-pink-500 to-rose-500',
                        ],
                        [
                            'icon' => 'fas fa-chart-line',
                            'title' => 'Tech Consulting',
                            'description' => 'Strategic technology advice and optimization.',
                            'features' => ['Code Audits', 'Performance', 'Tech Stack'],
                            'gradient' => 'from-indigo-500 to-purple-500',
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $service)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="relative glass rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 h-full hover-lift">
                            <!-- Icon -->
                            <div class="relative mb-6">
                                <div
                                    class="absolute inset-0 bg-gradient-to-r {{ $service['gradient'] }} rounded-2xl blur-xl opacity-20 group-hover:opacity-40 transition-opacity duration-300">
                                </div>
                                <div
                                    class="relative w-16 h-16 bg-gradient-to-r {{ $service['gradient'] }} rounded-2xl flex items-center justify-center group-hover:scale-110 transition-all duration-300">
                                    <i class="{{ $service['icon'] }} text-2xl text-white"></i>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-xl font-bold text-white mb-4 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r {{ $service['gradient'] }} transition-all duration-300">
                                {{ $service['title'] }}
                            </h3>

                            <p class="text-gray-400 mb-6">
                                {{ $service['description'] }}
                            </p>

                            <!-- Features -->
                            <ul class="space-y-2 mb-6">
                                @foreach ($service['features'] as $feature)
                                    <li class="flex items-center text-gray-300">
                                        <i class="fas fa-check text-emerald-400 mr-3"></i>
                                        <span class="text-sm">{{ $feature }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <!-- Learn More -->
                            <a href="{{ route('services') }}"
                                class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300 group/link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="py-24 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle, #8b5cf6 2px, transparent 2px);
                        background-size: 50px 50px;">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-quote-left text-purple-400"></i>
                    <span class="font-medium">Testimonials</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">What Clients</span>
                    <span class="text-gradient">Say</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    Feedback from clients and collaborators
                </p>
            </div>

            <!-- Testimonials Carousel -->
            <div class="relative max-w-4xl mx-auto">
                <div class="glide" id="testimonialCarousel">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @php
                                $testimonials = [
                                    [
                                        'name' => 'Sarah Johnson',
                                        'role' => 'CEO, TechStart Inc',
                                        'image' =>
                                            'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80',
                                        'text' =>
                                            'Working with Shah Nawaz was an absolute pleasure. He delivered beyond expectations and the platform is both robust and beautifully designed.',
                                        'rating' => 5,
                                    ],
                                    [
                                        'name' => 'Michael Chen',
                                        'role' => 'Product Manager',
                                        'image' =>
                                            'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80',
                                        'text' =>
                                            'Professional, skilled, and always responsive. The project was completed on time and exceeded all our requirements.',
                                        'rating' => 5,
                                    ],
                                    [
                                        'name' => 'Emily Rodriguez',
                                        'role' => 'Founder, Creative Solutions',
                                        'image' =>
                                            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&q=80',
                                        'text' =>
                                            'Exceptional work! Our app exceeded all performance metrics. Highly recommend for any web development project.',
                                        'rating' => 5,
                                    ],
                                ];
                            @endphp

                            @foreach ($testimonials as $testimonial)
                                <li class="glide__slide">
                                    <div class="glass rounded-3xl p-8">
                                        <!-- Quote Icon -->
                                        <div class="text-6xl text-purple-500/20 mb-6">
                                            <i class="fas fa-quote-left"></i>
                                        </div>

                                        <!-- Rating -->
                                        <div class="flex justify-center gap-1 mb-6">
                                            @for ($i = 0; $i < $testimonial['rating']; $i++)
                                                <i class="fas fa-star text-yellow-400"></i>
                                            @endfor
                                        </div>

                                        <!-- Testimonial Text -->
                                        <p class="text-gray-300 text-lg mb-8 leading-relaxed text-center">
                                            "{{ $testimonial['text'] }}"
                                        </p>

                                        <!-- Author -->
                                        <div class="flex items-center justify-center gap-4">
                                            <div class="relative">
                                                <div
                                                    class="w-16 h-16 rounded-full overflow-hidden border-2 border-purple-500/50">
                                                    <img src="{{ $testimonial['image'] }}"
                                                        alt="{{ $testimonial['name'] }}"
                                                        class="w-full h-full object-cover">
                                                </div>
                                                <div
                                                    class="absolute -bottom-1 -right-1 w-6 h-6 bg-emerald-500 rounded-full border-4 border-slate-900">
                                                </div>
                                            </div>
                                            <div class="text-left">
                                                <h4 class="text-white font-bold">{{ $testimonial['name'] }}</h4>
                                                <p class="text-gray-400 text-sm">{{ $testimonial['role'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Navigation -->
                    <div class="glide__arrows" data-glide-el="controls">
                        <button
                            class="glide__arrow glide__arrow--left absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-12 h-12 glass rounded-full flex items-center justify-center text-white hover:bg-white/10 transition-all">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="glide__arrow glide__arrow--right absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-12 h-12 glass rounded-full flex items-center justify-center text-white hover:bg-white/10 transition-all">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>

                    <!-- Bullets -->
                    <div class="glide__bullets flex justify-center gap-2 mt-8" data-glide-el="controls[nav]">
                        @foreach ($testimonials as $index => $testimonial)
                            <button class="glide__bullet w-2 h-2 bg-white/30 rounded-full"
                                data-glide-dir="={{ $index }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Preview -->
    <section class="py-24 bg-slate-800 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-blog text-blue-400"></i>
                    <span class="font-medium">Latest Articles</span>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">From The</span>
                    <span class="text-gradient">Blog</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    Thoughts on web development, technology, and best practices
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @php
                    $articles = [
                        [
                            'title' => 'Building Scalable Laravel Applications',
                            'excerpt' => 'Learn how to architect Laravel applications for scale and performance.',
                            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800&q=80',
                            'date' => 'Mar 15, 2024',
                            'read_time' => '5 min read',
                        ],
                        [
                            'title' => 'Vue.js 3 Composition API Guide',
                            'excerpt' => 'Master the new Composition API in Vue.js 3 with practical examples.',
                            'image' => 'https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=800&q=80',
                            'date' => 'Feb 28, 2024',
                            'read_time' => '7 min read',
                        ],
                        [
                            'title' => 'Microservices Architecture Patterns',
                            'excerpt' => 'Design patterns for building resilient microservices applications.',
                            'image' => 'https://images.unsplash.com/photo-1457305237443-44c3d5a30b89?w=800&q=80',
                            'date' => 'Feb 12, 2024',
                            'read_time' => '8 min read',
                        ],
                    ];
                @endphp

                @foreach ($articles as $article)
                    <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                        <div class="glass rounded-3xl overflow-hidden hover-lift transition-all duration-500">
                            <!-- Article Image -->
                            <div class="relative h-48 overflow-hidden">
                                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}"
                                    class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent">
                                </div>
                            </div>

                            <!-- Article Content -->
                            <div class="p-6">
                                <div class="flex items-center gap-4 text-sm text-gray-400 mb-3">
                                    <span>{{ $article['date'] }}</span>
                                    <span>•</span>
                                    <span>{{ $article['read_time'] }}</span>
                                </div>

                                <h3
                                    class="text-xl font-bold text-white mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-300">
                                    {{ $article['title'] }}
                                </h3>

                                <p class="text-gray-400 mb-6">
                                    {{ $article['excerpt'] }}
                                </p>

                                <a href="#"
                                    class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300 group/link">
                                    <span>Read Article</span>
                                    <i
                                        class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- View All Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <a href="#"
                    class="inline-flex items-center gap-3 px-8 py-4 glass rounded-full font-semibold text-white hover:bg-white/10 transition-all duration-300">
                    <span>View All Articles</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact"
        class="py-24 bg-gradient-to-br from-blue-900/30 via-purple-900/30 to-pink-900/30 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-500/20 rounded-full blur-3xl animate-float"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-sm font-medium">Open for Projects</span>
                </div>

                <!-- Heading -->
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Let's Build Something
                    <span class="block text-gradient">Amazing Together</span>
                </h2>

                <!-- Description -->
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                    Have a project in mind? Let's discuss how we can bring your vision to life with cutting-edge technology
                    and creative excellence.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:shahnawaz@example.com"
                        class="group px-10 py-5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                        <i class="fas fa-envelope"></i>
                        <span>Email Me</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>

                    <a href="https://wa.me/923001234567" target="_blank"
                        class="group px-10 py-5 glass rounded-full font-semibold text-white hover:bg-white/10 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                </div>

                <!-- Quick Contact -->
                <div class="mt-16 pt-8 border-t border-white/20">
                    <p class="text-gray-400 mb-6">Or reach out directly:</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-purple-400"></i>
                            <a href="tel:+923001234567" class="text-gray-300 hover:text-white transition-colors">+92 300
                                1234567</a>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-purple-400"></i>
                            <a href="mailto:shahnawaz@example.com"
                                class="text-gray-300 hover:text-white transition-colors">shahnawaz@example.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <button id="backToTop"
        class="fixed bottom-8 right-8 w-12 h-12 glass rounded-full flex items-center justify-center text-white hover:bg-white/10 transition-all duration-300 z-50 opacity-0 pointer-events-none">
        <i class="fas fa-chevron-up"></i>
    </button>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">

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
                transform: translateY(0) translateX(0);
            }

            33% {
                transform: translateY(-20px) translateX(10px);
            }

            66% {
                transform: translateY(-10px) translateX(-10px);
            }
        }

        .animate-float {
            animation: float 15s ease-in-out infinite;
        }

        @keyframes slide-in {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-in {
            animation: slide-in 0.8s ease-out forwards;
        }

        .text-gradient {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            transition: transform 0.3s ease;
        }

        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(139, 92, 246, 0.4);
        }

        .glide__arrow {
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .glide__arrow:hover {
            opacity: 1;
        }

        .glide__bullet {
            opacity: 0.3;
            transition: opacity 0.3s ease;
        }

        .glide__bullet--active {
            opacity: 1;
            background: white;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
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

            // Initialize Glide Carousel
            if (typeof Glide !== 'undefined') {
                new Glide('#testimonialCarousel', {
                    type: 'carousel',
                    perView: 1,
                    autoplay: 3000,
                    hoverpause: true,
                    gap: 32,
                    breakpoints: {
                        768: {
                            perView: 1
                        }
                    }
                }).mount();
            }

            // Back to Top Button
            const backToTop = document.getElementById('backToTop');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTop.style.opacity = '1';
                    backToTop.style.pointerEvents = 'auto';
                } else {
                    backToTop.style.opacity = '0';
                    backToTop.style.pointerEvents = 'none';
                }
            });

            backToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Smooth scrolling for anchor links
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

            // Parallax effect
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.animate-float');

                parallaxElements.forEach((el, index) => {
                    const speed = 0.2 + (index * 0.1);
                    el.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Animate skill bars on scroll
            const skillBars = document.querySelectorAll('.skill-bar');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width;
                        observer.unobserve(bar);
                    }
                });
            }, {
                threshold: 0.5,
                rootMargin: '0px 0px -100px 0px'
            });

            skillBars.forEach(bar => observer.observe(bar));

            // Add typing effect to hero text
            const heroText = document.querySelector('.hero-heading .text-gradient');
            if (heroText) {
                const text = heroText.textContent;
                heroText.textContent = '';
                let i = 0;
                const typeWriter = () => {
                    if (i < text.length) {
                        heroText.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 100);
                    }
                };
                setTimeout(typeWriter, 1000);
            }

            // Counter animation for stats
            const counters = document.querySelectorAll('.stats-grid .text-3xl');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                const increment = target / 50;
                let current = 0;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.ceil(current) + '+';
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.textContent = target + '+';
                    }
                };

                // Start when in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(counter);
                        }
                    });
                });

                observer.observe(counter);
            });
        });
    </script>
@endpush
