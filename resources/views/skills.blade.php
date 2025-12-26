@extends('layouts.app')

@section('title', 'Skills | Shah Nawaz - Full Stack Developer')

@section('content')
    <!-- Skills Section -->
    <section class="min-h-screen bg-gradient-to-b from-slate-900 to-slate-800 pt-24 px-4 md:px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                    <i class="fas fa-brain text-purple-400"></i>
                    <span class="text-sm font-medium">Technical Expertise</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="text-white">My</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                        Skills
                    </span>
                </h1>

                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Mastery of modern web technologies and frameworks with years of hands-on experience
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Left Column: Skill Progress Bars -->
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-8 text-white">
                        Technical <span class="text-purple-400">Proficiency</span>
                    </h2>

                    <div class="space-y-8">
                        @php
                            $skills = [
                                [
                                    'name' => 'Laravel & PHP',
                                    'level' => 95,
                                    'icon' => 'fab fa-laravel',
                                    'color' => 'from-red-500 to-orange-500',
                                    'description' => 'Expert in Laravel framework, PHP OOP, and backend architecture',
                                ],
                                [
                                    'name' => 'Vue.js & React',
                                    'level' => 92,
                                    'icon' => 'fab fa-vuejs',
                                    'color' => 'from-green-500 to-emerald-500',
                                    'description' => 'Advanced frontend development with modern JavaScript frameworks',
                                ],
                                [
                                    'name' => 'JavaScript/TypeScript',
                                    'level' => 90,
                                    'icon' => 'fab fa-js-square',
                                    'color' => 'from-yellow-500 to-orange-500',
                                    'description' => 'Mastery of ES6+, TypeScript, and modern JS patterns',
                                ],
                                [
                                    'name' => 'Database Design',
                                    'level' => 88,
                                    'icon' => 'fas fa-database',
                                    'color' => 'from-blue-500 to-cyan-500',
                                    'description' => 'MySQL, PostgreSQL, MongoDB design and optimization',
                                ],
                                [
                                    'name' => 'DevOps & Cloud',
                                    'level' => 85,
                                    'icon' => 'fas fa-cloud',
                                    'color' => 'from-purple-500 to-pink-500',
                                    'description' => 'AWS, Docker, CI/CD pipelines, and server management',
                                ],
                                [
                                    'name' => 'UI/UX Design',
                                    'level' => 82,
                                    'icon' => 'fas fa-paint-brush',
                                    'color' => 'from-pink-500 to-rose-500',
                                    'description' => 'Figma, Adobe XD, responsive design principles',
                                ],
                            ];
                        @endphp

                        @foreach ($skills as $skill)
                            <div class="group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-gradient-to-r {{ $skill['color'] }} flex items-center justify-center">
                                            <i class="{{ $skill['icon'] }} text-white"></i>
                                        </div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">{{ $skill['name'] }}</h3>
                                            <p class="text-sm text-gray-400">{{ $skill['description'] }}</p>
                                        </div>
                                    </div>
                                    <span
                                        class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r {{ $skill['color'] }}">
                                        {{ $skill['level'] }}%
                                    </span>
                                </div>

                                <!-- Progress Bar -->
                                <div class="relative h-2 bg-white/5 rounded-full overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r {{ $skill['color'] }} rounded-full transition-all duration-1000 ease-out"
                                        style="width: 0%" data-width="{{ $skill['level'] }}%">
                                    </div>
                                    <div class="absolute inset-0 bg-gradient-to-r {{ $skill['color'] }} opacity-20 blur-sm">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Skills Summary -->
                    <div class="mt-12 p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl"
                        data-aos="fade-up">
                        <h3 class="text-xl font-bold mb-4 text-white">Skill Summary</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">Clean Code Practices</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">API Development</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">Testing & Debugging</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">Performance Optimization</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">Security Best Practices</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="text-gray-300">Agile Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Tech Stack & Tools -->
                <div data-aos="fade-left">
                    <div class="sticky top-24">
                        <h2 class="text-3xl font-bold mb-8 text-white">
                            Technology <span class="text-blue-400">Stack</span>
                        </h2>

                        <!-- Tech Stack Grid -->
                        <div class="mb-12">
                            <div class="grid grid-cols-3 gap-4 mb-8">
                                @php
                                    $technologies = [
                                        [
                                            'icon' => 'fab fa-laravel',
                                            'name' => 'Laravel',
                                            'color' => 'from-red-500 to-orange-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-vuejs',
                                            'name' => 'Vue.js',
                                            'color' => 'from-green-500 to-emerald-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-react',
                                            'name' => 'React',
                                            'color' => 'from-blue-500 to-cyan-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-js',
                                            'name' => 'JavaScript',
                                            'color' => 'from-yellow-500 to-orange-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-php',
                                            'name' => 'PHP',
                                            'color' => 'from-purple-500 to-indigo-500',
                                        ],
                                        [
                                            'icon' => 'fas fa-database',
                                            'name' => 'MySQL',
                                            'color' => 'from-blue-600 to-indigo-600',
                                        ],
                                        [
                                            'icon' => 'fab fa-docker',
                                            'name' => 'Docker',
                                            'color' => 'from-blue-500 to-sky-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-aws',
                                            'name' => 'AWS',
                                            'color' => 'from-orange-500 to-yellow-500',
                                        ],
                                        [
                                            'icon' => 'fab fa-git-alt',
                                            'name' => 'Git',
                                            'color' => 'from-red-500 to-rose-500',
                                        ],
                                    ];
                                @endphp

                                @foreach ($technologies as $tech)
                                    <div class="group text-center transform hover:scale-105 transition-all duration-300">
                                        <div class="relative mb-3">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-r {{ $tech['color'] }} rounded-xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-300">
                                            </div>
                                            <div
                                                class="relative w-16 h-16 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl flex items-center justify-center mx-auto group-hover:bg-white/10 transition-all duration-300">
                                                <i
                                                    class="{{ $tech['icon'] }} text-2xl text-transparent bg-clip-text bg-gradient-to-r {{ $tech['color'] }}"></i>
                                            </div>
                                        </div>
                                        <span class="text-sm font-semibold text-white">{{ $tech['name'] }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Additional Tools -->
                            <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
                                <h4 class="text-lg font-semibold mb-4 text-white">Additional Tools & Technologies</h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach (['Tailwind CSS', 'Bootstrap', 'Redis', 'MongoDB', 'GraphQL', 'Webpack', 'Vite', 'Nginx', 'Linux', 'Jenkins', 'GitHub Actions', 'Postman'] as $tool)
                                        <span
                                            class="px-3 py-1 bg-white/5 border border-white/10 rounded-full text-sm text-gray-300 hover:bg-white/10 hover:text-white transition-all duration-300 cursor-default">
                                            {{ $tool }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Experience Timeline -->
                        <div class="p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
                            <h3 class="text-xl font-bold mb-6 text-white">Skill Development Timeline</h3>

                            <div class="space-y-6">
                                <!-- Timeline Item -->
                                <div class="relative pl-8 border-l border-purple-500/30">
                                    <div class="absolute -left-2 top-0 w-4 h-4 bg-purple-500 rounded-full"></div>
                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full">2020 -
                                            Present</span>
                                    </div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Advanced Full Stack</h4>
                                    <p class="text-gray-400 text-sm">Mastered Laravel, Vue.js, DevOps, and cloud
                                        technologies</p>
                                </div>

                                <!-- Timeline Item -->
                                <div class="relative pl-8 border-l border-blue-500/30">
                                    <div class="absolute -left-2 top-0 w-4 h-4 bg-blue-500 rounded-full"></div>
                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full">2018 -
                                            2020</span>
                                    </div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Frontend Specialization</h4>
                                    <p class="text-gray-400 text-sm">Deep dive into React, Vue.js, and modern JavaScript</p>
                                </div>

                                <!-- Timeline Item -->
                                <div class="relative pl-8 border-l border-green-500/30">
                                    <div class="absolute -left-2 top-0 w-4 h-4 bg-green-500 rounded-full"></div>
                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-green-500/20 text-green-300 text-xs rounded-full">2016 -
                                            2018</span>
                                    </div>
                                    <h4 class="text-lg font-semibold text-white mb-1">Backend Foundations</h4>
                                    <p class="text-gray-400 text-sm">PHP, MySQL, and basic web development fundamentals</p>
                                </div>
                            </div>
                        </div>

                        <!-- Certifications -->
                        <div class="mt-8 p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl">
                            <h3 class="text-xl font-bold mb-6 text-white">Certifications</h3>
                            <div class="space-y-4">
                                @foreach ([['title' => 'Laravel Certified Developer', 'issuer' => 'Laravel', 'year' => '2023'], ['title' => 'AWS Certified Solutions Architect', 'issuer' => 'Amazon Web Services', 'year' => '2022'], ['title' => 'Vue.js Developer Certification', 'issuer' => 'Vue School', 'year' => '2021']] as $cert)
                                    <div
                                        class="flex items-center justify-between p-3 bg-white/5 rounded-lg hover:bg-white/10 transition-colors">
                                        <div>
                                            <h4 class="font-semibold text-white">{{ $cert['title'] }}</h4>
                                            <p class="text-sm text-gray-400">{{ $cert['issuer'] }}</p>
                                        </div>
                                        <span class="text-sm text-gray-400">{{ $cert['year'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Soft Skills Section -->
            <div class="mt-20" data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-8 text-center text-white">
                    Professional <span class="text-pink-400">Soft Skills</span>
                </h2>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ([['title' => 'Communication', 'icon' => 'fas fa-comments', 'description' => 'Clear technical communication and collaboration'], ['title' => 'Problem Solving', 'icon' => 'fas fa-lightbulb', 'description' => 'Analytical thinking and creative solutions'], ['title' => 'Team Leadership', 'icon' => 'fas fa-users', 'description' => 'Project management and team coordination'], ['title' => 'Time Management', 'icon' => 'fas fa-clock', 'description' => 'Efficient task prioritization and delivery']] as $softSkill)
                        <div
                            class="group p-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl hover:bg-white/10 transition-all duration-300">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="{{ $softSkill['icon'] }} text-xl text-white"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">{{ $softSkill['title'] }}</h3>
                            <p class="text-gray-400 text-sm">{{ $softSkill['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-20 text-center" data-aos="fade-up">
                <div
                    class="max-w-3xl mx-auto p-8 bg-gradient-to-r from-blue-900/30 to-purple-900/30 backdrop-blur-sm border border-white/10 rounded-3xl">
                    <h2 class="text-3xl font-bold mb-4 text-white">Ready to Build Something Amazing?</h2>
                    <p class="text-gray-400 mb-8">
                        Let's combine my technical skills with your vision to create exceptional digital experiences.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover:shadow-xl hover:shadow-purple-500/30 transition-all duration-300">
                        <i class="fas fa-paper-plane"></i>
                        <span>Start a Project</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-8 right-8 w-12 h-12 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full flex items-center justify-center text-white hover:bg-white/20 transition-all duration-300 z-50">
        <i class="fas fa-chevron-up"></i>
    </button>
@endsection

@push('styles')
    <style>
        .skill-bar {
            width: 0%;
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-progress {
            animation: progress 1.5s ease-out forwards;
        }

        @keyframes progress {
            from {
                width: 0%;
            }

            to {
                width: var(--target-width);
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
            border-radius: 4px;
        }

        /* Smooth transitions */
        * {
            scroll-behavior: smooth;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

            // Add hover effects to tech stack items
            const techItems = document.querySelectorAll('.tech-item');
            techItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.style.transform = 'translateY(-5px)';
                });
                item.addEventListener('mouseleave', () => {
                    item.style.transform = 'translateY(0)';
                });
            });

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

            // Back to top button visibility
            const backToTop = document.querySelector('button[onclick*="scrollTo"]');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 500) {
                    backToTop.style.opacity = '1';
                    backToTop.style.pointerEvents = 'auto';
                } else {
                    backToTop.style.opacity = '0';
                    backToTop.style.pointerEvents = 'none';
                }
            });
        });

        // Initialize AOS if not already initialized
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }
    </script>
@endpush
