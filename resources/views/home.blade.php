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

    <!-- Services Section with Card Animations -->
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
                <!-- Service 1 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-code text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">Web Development</h3>
                    <p class="text-gray-400 mb-6">
                        Custom web applications built with Laravel, Vue.js, and modern frameworks.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            RESTful APIs
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Real-time Applications
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            E-commerce Solutions
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-mobile-alt text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">Mobile Apps</h3>
                    <p class="text-gray-400 mb-6">
                        Cross-platform mobile applications using React Native and Flutter.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            React Native
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            iOS & Android
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            PWA Development
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-database text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">Backend Solutions</h3>
                    <p class="text-gray-400 mb-6">
                        Scalable backend architecture and database design for high-performance applications.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            API Development
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Database Design
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Microservices
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="400">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-cloud text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">DevOps & Cloud</h3>
                    <p class="text-gray-400 mb-6">
                        CI/CD pipelines, containerization, and cloud infrastructure management.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Docker & Kubernetes
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            AWS & Azure
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            CI/CD Automation
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="500">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-rose-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-paint-brush text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">UI/UX Design</h3>
                    <p class="text-gray-400 mb-6">
                        Beautiful, intuitive user interfaces that enhance user experience and engagement.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Wireframing
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Prototyping
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            User Testing
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="group glass rounded-3xl p-8 hover-lift transition-all duration-500" data-aos="fade-up"
                    data-aos-delay="600">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>

                    <h3 class="text-xl font-bold mb-4">Tech Consulting</h3>
                    <p class="text-gray-400 mb-6">
                        Strategic technology advice and code audits to optimize your development process.
                    </p>

                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Code Audits
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Performance Optimization
                        </li>
                        <li class="flex items-center text-gray-300">
                            <i class="fas fa-check text-emerald-400 mr-2"></i>
                            Tech Stack Selection
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Featured Projects with Parallax -->
    <section id="portfolio" class="py-24 bg-slate-900 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                    <i class="fas fa-briefcase text-blue-400"></i>
                    <span class="font-medium">My Work</span>
                </div>

                <h2 class="section-heading text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-white">Featured</span>
                    <span class="text-gradient">Projects</span>
                </h2>

                <p class="text-gray-400 text-lg">
                    A selection of my recent work showcasing different technologies and solutions
                </p>
            </div>

            <!-- Portfolio Filter -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button
                    class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-medium">All</button>
                <button class="px-6 py-2 glass rounded-full font-medium hover:bg-white/10 transition-colors">Web
                    Apps</button>
                <button
                    class="px-6 py-2 glass rounded-full font-medium hover:bg-white/10 transition-colors">Mobile</button>
                <button
                    class="px-6 py-2 glass rounded-full font-medium hover:bg-white/10 transition-colors">E-commerce</button>
                <button class="px-6 py-2 glass rounded-full font-medium hover:bg-white/10 transition-colors">SAAS</button>
            </div>

            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Project 1 -->
                <div class="group project-card glass rounded-3xl overflow-hidden hover-lift transition-all duration-500"
                    data-aos="fade-up">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="E-commerce Platform"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent">
                        </div>

                        <!-- Tags -->
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="px-3 py-1 glass text-xs rounded-full">Laravel</span>
                            <span class="px-3 py-1 glass text-xs rounded-full">Vue.js</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold">E-commerce Platform</h3>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>

                        <p class="text-gray-400 mb-6">
                            Complete online marketplace with payment integration and admin dashboard.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300">
                            View Details
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group project-card glass rounded-3xl overflow-hidden hover-lift transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Project Management"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent">
                        </div>

                        <!-- Tags -->
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="px-3 py-1 glass text-xs rounded-full">React</span>
                            <span class="px-3 py-1 glass text-xs rounded-full">Node.js</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold">Project Management</h3>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>

                        <p class="text-gray-400 mb-6">
                            Real-time collaboration tool with task management and team communication.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300">
                            View Details
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group project-card glass rounded-3xl overflow-hidden hover-lift transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Fitness App"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent">
                        </div>

                        <!-- Tags -->
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="px-3 py-1 glass text-xs rounded-full">React Native</span>
                            <span class="px-3 py-1 glass text-xs rounded-full">Firebase</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold">Fitness Tracker</h3>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                        </div>

                        <p class="text-gray-400 mb-6">
                            Mobile app with workout plans, nutrition tracking, and progress analytics.
                        </p>

                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300">
                            View Details
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-16">
                <a href="#"
                    class="inline-flex items-center gap-3 px-8 py-4 glass rounded-full font-semibold hover-lift transition-all duration-300">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section with Interactive Elements -->
    <section id="skills" class="py-24 bg-slate-800 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16">
                    <!-- Left Column -->
                    <div data-aos="fade-right">
                        <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                            <i class="fas fa-brain text-purple-400"></i>
                            <span class="font-medium">My Skills</span>
                        </div>

                        <h2 class="section-heading text-4xl md:text-5xl font-bold mb-8">
                            <span class="text-white">Technical</span>
                            <span class="block text-gradient">Expertise</span>
                        </h2>

                        <p class="text-gray-400 text-lg mb-12 leading-relaxed">
                            Mastery of modern web technologies and frameworks with years of hands-on experience
                        </p>

                        <!-- Skills Progress -->
                        <div class="space-y-8">
                            <!-- Skill 1 -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium">Laravel & PHP</span>
                                    <span class="font-bold text-blue-400">95%</span>
                                </div>
                                <div class="h-2 glass rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full"
                                        style="width: 95%"></div>
                                </div>
                            </div>

                            <!-- Skill 2 -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium">Vue.js & React</span>
                                    <span class="font-bold text-purple-400">92%</span>
                                </div>
                                <div class="h-2 glass rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"
                                        style="width: 92%"></div>
                                </div>
                            </div>

                            <!-- Skill 3 -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium">JavaScript/TypeScript</span>
                                    <span class="font-bold text-yellow-400">90%</span>
                                </div>
                                <div class="h-2 glass rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full"
                                        style="width: 90%"></div>
                                </div>
                            </div>

                            <!-- Skill 4 -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium">Database Design</span>
                                    <span class="font-bold text-emerald-400">88%</span>
                                </div>
                                <div class="h-2 glass rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full"
                                        style="width: 88%"></div>
                                </div>
                            </div>

                            <!-- Skill 5 -->
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-medium">DevOps & Cloud</span>
                                    <span class="font-bold text-indigo-400">85%</span>
                                </div>
                                <div class="h-2 glass rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full"
                                        style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div data-aos="fade-left">
                        <div class="glass rounded-3xl p-8">
                            <h3 class="text-2xl font-bold mb-8 text-center">Technology Stack</h3>

                            <div class="grid grid-cols-3 gap-6 mb-8">
                                <!-- Tech 1 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-laravel text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">Laravel</span>
                                </div>

                                <!-- Tech 2 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-vuejs text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">Vue.js</span>
                                </div>

                                <!-- Tech 3 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-react text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">React</span>
                                </div>

                                <!-- Tech 4 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-js text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">JavaScript</span>
                                </div>

                                <!-- Tech 5 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-php text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">PHP</span>
                                </div>

                                <!-- Tech 6 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fas fa-database text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">MySQL</span>
                                </div>

                                <!-- Tech 7 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-sky-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-docker text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">Docker</span>
                                </div>

                                <!-- Tech 8 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-aws text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">AWS</span>
                                </div>

                                <!-- Tech 9 -->
                                <div class="text-center group">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                                        <i class="fab fa-git-alt text-2xl text-white"></i>
                                    </div>
                                    <span class="text-sm font-medium">Git</span>
                                </div>
                            </div>

                            <!-- Additional Skills -->
                            <div class="pt-6 border-t border-gray-700">
                                <h4 class="text-lg font-semibold mb-4 text-center">Also Experienced With</h4>
                                <div class="flex flex-wrap justify-center gap-2">
                                    <span class="px-3 py-1 glass text-xs rounded-full">Tailwind CSS</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">Bootstrap</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">Redux</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">GraphQL</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">MongoDB</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">PostgreSQL</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">Redis</span>
                                    <span class="px-3 py-1 glass text-xs rounded-full">Socket.io</span>
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
