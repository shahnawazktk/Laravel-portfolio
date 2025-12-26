@extends('layouts.app')

@section('title', 'Portfolio | My Portfolio')

@section('content')
    <!-- Portfolio Header -->
    <section class="py-20 bg-gradient text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6" data-aos="fade-up">My Portfolio</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                A collection of my recent work, projects, and contributions to the digital world.
            </p>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <section class="py-12 bg-white sticky top-20 z-40 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn px-6 py-2 rounded-full bg-primary text-white font-medium transition-all"
                    data-filter="all">
                    All Projects
                </button>
                @foreach ($categories as $category)
                    <button
                        class="filter-btn px-6 py-2 rounded-full bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition-all"
                        data-filter="{{ strtolower(str_replace(' ', '-', $category)) }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 portfolio-container">
                @foreach ($items as $item)
                    <div class="portfolio-item group animate-fadeInUp"
                        data-category="{{ strtolower(str_replace(' ', '-', $item->category)) }}">
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-lg hover-lift transition-all duration-500 h-full">
                            <div class="relative overflow-hidden h-56">
                                <img src="{{ $item->image ?? 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                                    alt="{{ $item->title }}"
                                    class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end p-4">
                                    <a href="{{ route('portfolio.show', $item) }}" class="text-white font-medium">View
                                        Details →</a>
                                </div>
                            </div>
                            <div class="p-6">
                                <span class="inline-block px-3 py-1 bg-primary/10 text-primary text-sm rounded-full mb-3">
                                    {{ $item->category }}
                                </span>
                                <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($item->description, 100) }}</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach ($item->technologies ?? ['Laravel', 'Vue.js'] as $tech)
                                        <span
                                            class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('portfolio.show', $item) }}"
                                    class="inline-flex items-center text-primary font-medium hover:underline">
                                    Learn More <i
                                        class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($items->isEmpty())
                <div class="text-center py-20">
                    <div class="w-24 h-24 mx-auto mb-6 bg-gray-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-folder-open text-4xl text-gray-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">No Projects Yet</h3>
                    <p class="text-gray-600">Check back soon for my latest work!</p>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Portfolio filtering
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white');
                    btn.classList.add('bg-gray-100', 'text-gray-800', 'hover:bg-gray-200');
                });

                this.classList.remove('bg-gray-100', 'text-gray-800', 'hover:bg-gray-200');
                this.classList.add('bg-primary', 'text-white');

                // Filter items
                const filter = this.dataset.filter;
                const items = document.querySelectorAll('.portfolio-item');

                items.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                        gsap.from(item, {
                            duration: 0.5,
                            y: 30,
                            opacity: 0,
                            ease: "power3.out"
                        });
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endpush
