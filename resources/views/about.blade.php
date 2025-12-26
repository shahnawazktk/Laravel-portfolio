@extends('layouts.app')

@section('title', 'About Me | My Portfolio')

@section('content')
    <!-- About Hero -->
    <section class="py-20 bg-white">
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
    </section>

    <!-- Timeline -->
    <section class="py-20 bg-gray-50">
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
    </section>
@endsection
