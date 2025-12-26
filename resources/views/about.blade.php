@extends('layouts.app')

@section('title', 'About Me | My Portfolio')

@section('content')
    <!-- About Hero -->
    <section id="about" class="py-24 bg-slate-900 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>

        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Column -->
                    <div data-aos="fade-right">
                        <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                            <i class="fas fa-user text-purple-400"></i>
                            <span class="font-medium">About Me</span>
                        </div>

                        <h2 class="section-heading text-4xl md:text-5xl font-bold mb-8">
                            <span class="text-white">Crafting Digital</span>
                            <span class="block text-gradient">Experiences</span>
                        </h2>

                        <p class="text-gray-300 text-lg mb-6 leading-relaxed">
                            With over 5 years of experience in web development, I specialize in building robust, scalable
                            applications using modern technologies. My passion lies in solving complex problems and creating
                            efficient solutions that drive business growth.
                        </p>

                        <p class="text-gray-300 mb-10 leading-relaxed">
                            I believe in writing clean, maintainable code and following best practices. My expertise spans
                            across the full stack, from designing responsive UIs with Vue.js/React to building powerful
                            backends with Laravel and Node.js.
                        </p>

                        <div class="grid grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="font-medium">Clean Code</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="font-medium">Fast Delivery</span>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="font-medium">Responsive Design</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-check text-emerald-400"></i>
                                    <span class="font-medium">SEO Friendly</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Timeline -->
                    <div data-aos="fade-left">
                        <div class="glass rounded-3xl p-8">
                            <h3 class="text-2xl font-bold mb-8 text-center">My Journey</h3>

                            <div class="space-y-8">
                                <!-- Timeline Item 1 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-0 w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full">
                                    </div>
                                    <div
                                        class="absolute left-3 top-6 bottom-0 w-0.5 bg-gradient-to-b from-purple-500 to-transparent">
                                    </div>

                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full">2020 -
                                            Present</span>
                                    </div>
                                    <h4 class="text-xl font-semibold mb-2">Senior Full Stack Developer</h4>
                                    <p class="text-gray-400">Leading development teams and architecting enterprise
                                        solutions.</p>
                                </div>

                                <!-- Timeline Item 2 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-0 w-6 h-6 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full">
                                    </div>
                                    <div
                                        class="absolute left-3 top-6 bottom-0 w-0.5 bg-gradient-to-b from-pink-500 to-transparent">
                                    </div>

                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full">2018 -
                                            2020</span>
                                    </div>
                                    <h4 class="text-xl font-semibold mb-2">Full Stack Developer</h4>
                                    <p class="text-gray-400">Built and maintained multiple web applications using Laravel
                                        and Vue.js.</p>
                                </div>

                                <!-- Timeline Item 3 -->
                                <div class="relative pl-10">
                                    <div
                                        class="absolute left-0 top-0 w-6 h-6 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full">
                                    </div>

                                    <div class="mb-2">
                                        <span class="px-3 py-1 bg-pink-500/20 text-pink-300 text-xs rounded-full">2016 -
                                            2018</span>
                                    </div>
                                    <h4 class="text-xl font-semibold mb-2">Web Developer</h4>
                                    <p class="text-gray-400">Started career with frontend development and basic backend
                                        skills.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h1 class="text-5xl font-bold mb-6">
                        About <span class="text-gradient">Me</span>
                    </h1>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-600 mb-4">
                            I'm a passionate Full Stack Developer with over 5 years of experience creating digital solutions
                            that make a difference. My journey in web development started with a curiosity about how
                            websites work, and has evolved into a career dedicated to crafting exceptional user experiences.
                        </p>
                        <p class="text-gray-600 mb-4">
                            I specialize in Laravel, Vue.js, and modern JavaScript frameworks, but I'm always eager to learn
                            new technologies and methodologies. I believe in writing clean, maintainable code and creating
                            interfaces that are both beautiful and functional.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-6 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">50+</div>
                            <div class="text-gray-600">Projects Completed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">5+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">30+</div>
                            <div class="text-gray-600">Happy Clients</div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" class="relative">
                    <div class="relative w-full max-w-md mx-auto">
                        <div class="absolute -inset-4 bg-gradient rounded-3xl animate-pulse opacity-20"></div>
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80"
                                alt="About Me" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Timeline -->
    {{-- <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">My Journey</h2>

            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient hidden lg:block"></div>

                <!-- Timeline items -->
                @php
                    $timeline = [
                        [
                            'year' => '2023 - Present',
                            'title' => 'Senior Full Stack Developer',
                            'company' => 'Tech Innovations Inc.',
                            'description' =>
                                'Leading development of enterprise web applications using Laravel and Vue.js',
                        ],
                        [
                            'year' => '2021 - 2023',
                            'title' => 'Full Stack Developer',
                            'company' => 'Digital Solutions Co.',
                            'description' => 'Developed and maintained multiple client websites and web applications',
                        ],
                        [
                            'year' => '2019 - 2021',
                            'title' => 'Junior Web Developer',
                            'company' => 'WebCraft Studio',
                            'description' => 'Built responsive websites and learned modern web development practices',
                        ],
                        [
                            'year' => '2018',
                            'title' => 'Computer Science Degree',
                            'company' => 'University of Technology',
                            'description' => 'Graduated with honors specializing in software engineering',
                        ],
                    ];
                @endphp

                @foreach ($timeline as $index => $item)
                    <div class="timeline-item mb-12 lg:mb-16" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="flex flex-col lg:flex-row items-center">
                            @if ($index % 2 == 0)
                                <div class="lg:w-1/2 lg:pr-12 mb-6 lg:mb-0 lg:text-right">
                                    <div class="bg-white p-6 rounded-xl shadow-lg">
                                        <div class="text-primary font-bold mb-2">{{ $item['year'] }}</div>
                                        <h3 class="text-xl font-bold mb-2">{{ $item['title'] }}</h3>
                                        <div class="text-gray-600 font-medium mb-2">{{ $item['company'] }}</div>
                                        <p class="text-gray-600">{{ $item['description'] }}</p>
                                    </div>
                                </div>
                                <div class="lg:w-1/2 lg:pl-12 flex items-center">
                                    <div
                                        class="hidden lg:block w-6 h-6 bg-primary rounded-full border-4 border-white shadow-lg">
                                    </div>
                                </div>
                            @else
                                <div class="lg:w-1/2 lg:pr-12 flex items-center justify-end">
                                    <div
                                        class="hidden lg:block w-6 h-6 bg-primary rounded-full border-4 border-white shadow-lg">
                                    </div>
                                </div>
                                <div class="lg:w-1/2 lg:pl-12">
                                    <div class="bg-white p-6 rounded-xl shadow-lg">
                                        <div class="text-primary font-bold mb-2">{{ $item['year'] }}</div>
                                        <h3 class="text-xl font-bold mb-2">{{ $item['title'] }}</h3>
                                        <div class="text-gray-600 font-medium mb-2">{{ $item['company'] }}</div>
                                        <p class="text-gray-600">{{ $item['description'] }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
@endsection
