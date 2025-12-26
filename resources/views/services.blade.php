@extends('layouts.app')

@section('title', 'Services | My Portfolio')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #8b5cf6;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            color: #ffffff;
        }

        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

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
    </style>
    <!-- Services Hero -->
    <section class="pt-32 pb-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="text-white">My</span>
                    <span class="text-gradient">Services</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Comprehensive web development and technology solutions tailored to your business needs
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="glass rounded-3xl p-8 hover-lift transition-all duration-300">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6">
                            <i class="{{ $service['icon'] }} text-2xl text-white"></i>
                        </div>

                        <h3 class="text-2xl font-bold mb-4">{{ $service['title'] }}</h3>
                        <p class="text-gray-400 mb-6">{{ $service['description'] }}</p>

                        <ul class="space-y-3">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-center text-gray-300">
                                    <i class="fas fa-check text-emerald-400 mr-3"></i>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center mt-8 text-purple-400 font-semibold hover:text-purple-300">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="glass rounded-3xl p-12">
                <h2 class="text-4xl font-bold mb-6">Ready to Start Your Project?</h2>
                <p class="text-xl text-gray-400 mb-8">
                    Let's discuss how I can help bring your ideas to life with cutting-edge technology.
                </p>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white hover:shadow-xl hover:shadow-purple-500/30 transition-all">
                    <i class="fas fa-paper-plane mr-3"></i>
                    Contact Me
                </a>
            </div>
        </div>
    </section>


@endsection
