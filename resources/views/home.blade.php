@extends('layouts.app')

@section('title', 'Alex Morgan | Full Stack Developer Portfolio')

@section('content')
    <!-- Hero Section with Blurred Background -->
    <section class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Blur -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                alt="Code Background" class="hero-bg-image w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-blue-900/80 mix-blend-multiply"></div>
            <!-- Animated Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-transparent to-purple-600/20 animate-pulse">
            </div>
        </div>

        <!-- Floating Particles Background -->
        <div class="absolute inset-0 z-0">
            @for ($i = 0; $i < 20; $i++)
                <div class="absolute w-4 h-4 bg-white/10 rounded-full animate-pulse"
                    style="top: {{ rand(5, 95) }}%; left: {{ rand(5, 95) }}%; animation-delay: {{ $i * 0.2 }}s;">
                </div>
            @endfor
        </div>

        <!-- Hero Content -->
        <div class="container relative z-10 mx-auto px-4 py-20">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="text-white" data-aos="fade-right">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-effect mb-6"
                            data-aos="fade-up" data-aos-delay="200">
                            <span class="w-2 h-2 bg-green-400 rounded-full animate-ping"></span>
                            <span class="text-sm font-medium">Available for freelance work</span>
                        </div>

                        <!-- Main Heading -->
                        <h1 class="hero-title text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-6 leading-tight">
                            Building Digital
                            <span class="text-gradient block">Experiences</span>
                            That Matter
                        </h1>

                        <!-- Subtitle -->
                        <p class="text-xl text-gray-300 mb-8 max-w-2xl" data-aos="fade-up" data-aos-delay="300">
                            I'm <span class="font-bold text-white">Alex Morgan</span>, a passionate Full Stack Developer
                            specializing in Laravel, Vue.js, and modern web technologies. I transform ideas into
                            exceptional digital solutions.
                        </p>

                        <!-- Stats -->
                        <div class="flex flex-wrap gap-8 mb-10" data-aos="fade-up" data-aos-delay="400">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-1">50+</div>
                                <div class="text-gray-300 text-sm">Projects Delivered</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-1">5+</div>
                                <div class="text-gray-300 text-sm">Years Experience</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-1">100%</div>
                                <div class="text-gray-300 text-sm">Client Satisfaction</div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{ route('portfolio.index') }}"
                                class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:shadow-2xl transition-all duration-300 hover:scale-105 inline-flex items-center gap-3">
                                <span>View My Work</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                            </a>
                            <a href="#contact"
                                class="group px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-full hover:bg-white/20 transition-all duration-300 hover:scale-105 inline-flex items-center gap-3 border border-white/20">
                                <i class="fas fa-envelope"></i>
                                <span>Let's Connect</span>
                            </a>
                        </div>
                    </div>

                    <!-- Profile Image Card -->
                    <div class="relative" data-aos="fade-left" data-aos-delay="300">
                        <div class="relative mx-auto max-w-md">
                            <!-- Floating Card -->
                            <div
                                class="relative bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-2xl border border-white/20">
                                <!-- Profile Image -->
                                <div class="relative mb-6">
                                    <div
                                        class="relative w-64 h-64 mx-auto rounded-full overflow-hidden border-4 border-white/30">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                                            alt="Alex Morgan - Full Stack Developer" class="w-full h-full object-cover">
                                    </div>
                                    <!-- Status Badge -->
                                    <div
                                        class="absolute bottom-4 right-8 w-6 h-6 bg-green-500 rounded-full border-4 border-white">
                                    </div>
                                </div>

                                <!-- Profile Info -->
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold text-white mb-2">Alex Morgan</h3>
                                    <p class="text-blue-200 mb-4">Senior Full Stack Developer</p>

                                    <!-- Tech Stack -->
                                    <div class="flex flex-wrap justify-center gap-2 mb-6">
                                        @foreach (['Laravel', 'Vue.js', 'React', 'Tailwind', 'MySQL'] as $tech)
                                            <span class="px-3 py-1 bg-white/10 rounded-full text-sm text-white">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>

                                    <!-- Social Links -->
                                    <div class="flex justify-center gap-4">
                                        @foreach ([['icon' => 'fab fa-github', 'color' => 'hover:bg-gray-800'], ['icon' => 'fab fa-linkedin', 'color' => 'hover:bg-blue-700'], ['icon' => 'fab fa-twitter', 'color' => 'hover:bg-sky-500'], ['icon' => 'fab fa-dribbble', 'color' => 'hover:bg-pink-600']] as $social)
                                            <a href="#"
                                                class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-300 {{ $social['color'] }}">
                                                <i class="{{ $social['icon'] }}"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Elements -->
                            <div
                                class="absolute -top-4 -right-4 w-20 h-20 bg-gradient rounded-full animate-float opacity-80">
                            </div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-purple-500/30 rounded-full animate-ping">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce" data-aos="fade-up"
            data-aos-delay="700">
            <a href="#services" class="text-white/70 hover:text-white transition-colors">
                <i class="fas fa-chevron-down text-3xl"></i>
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium mb-4">
                    <i class="fas fa-star mr-2"></i> What I Do
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Services I <span class="text-gradient">Provide</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    From concept to deployment, I deliver end-to-end web solutions that drive business growth.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $services = [
                        [
                            'icon' => 'fas fa-code',
                            'title' => 'Web Development',
                            'description' =>
                                'Custom web applications built with Laravel, Vue.js, and modern frameworks.',
                            'features' => ['API Development', 'E-commerce Solutions', 'CMS Development'],
                            'color' => 'from-blue-500 to-blue-600',
                        ],
                        [
                            'icon' => 'fas fa-paint-brush',
                            'title' => 'UI/UX Design',
                            'description' => 'User-centered designs that enhance engagement and drive conversions.',
                            'features' => ['Wireframing', 'Prototyping', 'Design Systems'],
                            'color' => 'from-purple-500 to-pink-600',
                        ],
                        [
                            'icon' => 'fas fa-mobile-alt',
                            'title' => 'Mobile Apps',
                            'description' => 'Cross-platform mobile applications with React Native and Flutter.',
                            'features' => ['iOS & Android', 'PWA Development', 'App Store Optimization'],
                            'color' => 'from-green-500 to-emerald-600',
                        ],
                        [
                            'icon' => 'fas fa-database',
                            'title' => 'Backend Solutions',
                            'description' => 'Scalable backend architecture and database optimization.',
                            'features' => ['API Integration', 'Database Design', 'Server Management'],
                            'color' => 'from-orange-500 to-red-600',
                        ],
                        [
                            'icon' => 'fas fa-rocket',
                            'title' => 'DevOps',
                            'description' => 'CI/CD pipelines, containerization, and cloud infrastructure.',
                            'features' => ['Docker', 'AWS/Azure', 'Automated Testing'],
                            'color' => 'from-indigo-500 to-purple-600',
                        ],
                        [
                            'icon' => 'fas fa-chart-line',
                            'title' => 'Technical Consulting',
                            'description' => 'Expert advice on technology stack, architecture, and best practices.',
                            'features' => ['Code Review', 'Performance Audit', 'Tech Strategy'],
                            'color' => 'from-cyan-500 to-blue-600',
                        ],
                    ];
                @endphp

                @foreach ($services as $index => $service)
                    <div class="group relative" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="absolute inset-0 bg-gradient-to-br {{ $service['color'] }} rounded-2xl opacity-0 group-hover:opacity-10 transition-opacity duration-300">
                        </div>
                        <div
                            class="relative bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 h-full">
                            <div
                                class="w-16 h-16 bg-gradient-to-br {{ $service['color'] }} rounded-xl flex items-center justify-center mb-6">
                                <i class="{{ $service['icon'] }} text-2xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold mb-4">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 mb-6">{{ $service['description'] }}</p>
                            <ul class="space-y-2 mb-6">
                                @foreach ($service['features'] as $feature)
                                    <li class="flex items-center text-gray-700">
                                        <i class="fas fa-check text-green-500 mr-3"></i>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>
                            <a href="{{ route('contact') }}"
                                class="inline-flex items-center text-blue-600 font-semibold group/link">
                                Get Started
                                <i class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="featured-projects" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium mb-4">
                    <i class="fas fa-briefcase mr-2"></i> My Work
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Featured <span class="text-gradient">Projects</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    A showcase of my recent work that demonstrates my expertise and attention to detail.
                </p>
            </div>

            @php
                $featuredProjects = [
                    [
                        'title' => 'E-commerce Platform',
                        'description' =>
                            'Full-featured online store with payment integration and inventory management.',
                        'image' =>
                            'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'category' => 'Web Development',
                        'technologies' => ['Laravel', 'Vue.js', 'Stripe', 'MySQL'],
                        'link' => '#',
                    ],
                    [
                        'title' => 'Task Management App',
                        'description' => 'Collaborative project management tool with real-time updates.',
                        'image' =>
                            'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'category' => 'Web Application',
                        'technologies' => ['React', 'Node.js', 'Socket.io', 'MongoDB'],
                        'link' => '#',
                    ],
                    [
                        'title' => 'Health & Fitness App',
                        'description' => 'Mobile application for tracking workouts and nutrition.',
                        'image' =>
                            'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                        'category' => 'Mobile App',
                        'technologies' => ['React Native', 'Firebase', 'Redux', 'GraphQL'],
                        'link' => '#',
                    ],
                ];
            @endphp

            <div class="grid lg:grid-cols-3 gap-8 mb-12">
                @foreach ($featuredProjects as $index => $project)
                    <div class="project-card group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="relative overflow-hidden rounded-2xl mb-6 h-64">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-6 left-6 right-6">
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach ($project['technologies'] as $tech)
                                            <span
                                                class="px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-sm rounded-full">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>
                                    <a href="{{ $project['link'] }}"
                                        class="inline-flex items-center text-white font-semibold group/link">
                                        View Case Study
                                        <i
                                            class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span
                                class="inline-block px-4 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-3">
                                {{ $project['category'] }}
                            </span>
                            <h3 class="text-2xl font-bold mb-3">{{ $project['title'] }}</h3>
                            <p class="text-gray-600">{{ $project['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('portfolio.index') }}"
                    class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <span>View All Projects</span>
                    <i class="fas fa-arrow-right transition-transform group-hover:translate-x-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills & Technologies -->
    <section id="skills" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div data-aos="fade-right">
                        <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium mb-4">
                            <i class="fas fa-cogs mr-2"></i> My Expertise
                        </span>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">
                            Technical <span class="text-gradient">Skills</span>
                        </h2>
                        <p class="text-gray-600 text-lg mb-8">
                            With 5+ years of experience, I've mastered a wide range of technologies and frameworks
                            to deliver robust, scalable solutions.
                        </p>

                        <div class="space-y-6">
                            @php
                                $skills = [
                                    ['name' => 'Laravel & PHP', 'level' => 95],
                                    ['name' => 'Vue.js & React', 'level' => 90],
                                    ['name' => 'JavaScript & TypeScript', 'level' => 92],
                                    ['name' => 'MySQL & PostgreSQL', 'level' => 88],
                                    ['name' => 'AWS & DevOps', 'level' => 85],
                                    ['name' => 'UI/UX Design', 'level' => 80],
                                ];
                            @endphp

                            @foreach ($skills as $skill)
                                <div class="skill-item">
                                    <div class="flex justify-between mb-2">
                                        <span class="font-semibold text-gray-800">{{ $skill['name'] }}</span>
                                        <span class="font-bold text-blue-600">{{ $skill['level'] }}%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="skill-bar h-full bg-gradient-to-r from-blue-500 to-purple-500 rounded-full transition-all duration-1000 ease-out"
                                            style="width: 0%" data-width="{{ $skill['level'] }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Right Content - Tech Stack -->
                    <div data-aos="fade-left">
                        <div class="bg-gray-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold mb-8 text-center">Technology Stack</h3>
                            <div class="grid grid-cols-3 gap-6">
                                @php
                                    $technologies = [
                                        [
                                            'icon' => 'fab fa-laravel',
                                            'name' => 'Laravel',
                                            'color' => 'bg-red-100 text-red-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-vuejs',
                                            'name' => 'Vue.js',
                                            'color' => 'bg-green-100 text-green-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-react',
                                            'name' => 'React',
                                            'color' => 'bg-blue-100 text-blue-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-js',
                                            'name' => 'JavaScript',
                                            'color' => 'bg-yellow-100 text-yellow-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-php',
                                            'name' => 'PHP',
                                            'color' => 'bg-purple-100 text-purple-600',
                                        ],
                                        [
                                            'icon' => 'fas fa-database',
                                            'name' => 'MySQL',
                                            'color' => 'bg-orange-100 text-orange-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-docker',
                                            'name' => 'Docker',
                                            'color' => 'bg-blue-100 text-blue-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-aws',
                                            'name' => 'AWS',
                                            'color' => 'bg-yellow-100 text-yellow-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-git-alt',
                                            'name' => 'Git',
                                            'color' => 'bg-red-100 text-red-600',
                                        ],
                                    ];
                                @endphp

                                @foreach ($technologies as $tech)
                                    <div class="text-center group">
                                        <div
                                            class="w-20 h-20 {{ $tech['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                            <i class="{{ $tech['icon'] }} text-3xl"></i>
                                        </div>
                                        <span class="font-semibold text-gray-800">{{ $tech['name'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-24 bg-gradient-to-r from-blue-900 to-purple-900">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center" data-aos="zoom-in">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Ready to Bring Your Idea to Life?
                </h2>
                <p class="text-xl text-blue-200 mb-10 max-w-2xl mx-auto">
                    Let's collaborate and create something amazing together. I'm just one message away.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('contact') }}"
                        class="group px-10 py-5 bg-white text-blue-900 font-bold rounded-full hover:shadow-2xl transition-all duration-300 hover:scale-105 inline-flex items-center justify-center gap-3">
                        <i class="fas fa-paper-plane"></i>
                        <span>Start a Project</span>
                        <i class="fas fa-arrow-right transition-transform group-hover:translate-x-2"></i>
                    </a>
                    <a href="tel:+15551234567"
                        class="group px-10 py-5 bg-transparent border-2 border-white text-white font-bold rounded-full hover:bg-white/10 transition-all duration-300 inline-flex items-center justify-center gap-3">
                        <i class="fas fa-phone"></i>
                        <span>Schedule a Call</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Initialize skill bars animation
        document.addEventListener('DOMContentLoaded', function() {
            // Animate skill bars when they come into view
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
                threshold: 0.5
            });

            skillBars.forEach(bar => observer.observe(bar));
        });
    </script>
@endpush
