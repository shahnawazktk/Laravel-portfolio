@extends('layouts.app')

@section('title', 'Portfolio | Shah Nawaz - Full Stack Developer')

@section('content')
    <!-- Portfolio Header -->
    <section class="py-24 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-purple-500/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full mb-6">
                    <i class="fas fa-briefcase text-blue-400"></i>
                    <span class="text-sm font-medium">My Work</span>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-6" data-aos="fade-up">
                    <span class="text-white">Featured</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400">
                        Projects
                    </span>
                </h1>
                
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    A curated collection of my recent work, showcasing innovative solutions and cutting-edge technologies.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <section class="py-8 bg-slate-900/80 backdrop-blur-sm sticky top-0 z-40 border-b border-white/10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="filter-btn px-5 py-2 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium transition-all hover:shadow-lg hover:shadow-purple-500/30 active"
                    data-filter="all">
                    All Projects
                </button>
                @php
                    $categories = array_unique(array_column($projects, 'category'));
                @endphp
                
                @foreach ($categories as $category)
                    <button
                        class="filter-btn px-5 py-2 rounded-full bg-white/5 backdrop-blur-sm border border-white/10 text-gray-300 font-medium hover:bg-white/10 hover:text-white transition-all"
                        data-filter="{{ strtolower(str_replace(' ', '-', $category)) }}">
                        {{ $category }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 portfolio-container">
                @foreach ($projects as $index => $project)
                    <div class="portfolio-item group" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ $index * 100 }}"
                         data-category="{{ strtolower(str_replace(' ', '-', $project['category'])) }}">
                        <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden hover-lift transition-all duration-500 h-full hover:border-purple-500/30">
                            <!-- Project Image -->
                            <div class="relative overflow-hidden h-56">
                                <img src="{{ $project['image'] }}" 
                                     alt="{{ $project['title'] }}"
                                     class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent opacity-60"></div>
                                
                                <!-- Live Preview Button -->
                                <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                    <a href="#" 
                                       class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition-transform">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Project Content -->
                            <div class="p-6">
                                <!-- Category Badge -->
                                <span class="inline-block px-3 py-1 bg-gradient-to-r from-blue-500/20 to-purple-500/20 text-blue-300 text-xs rounded-full mb-3 border border-blue-500/30">
                                    {{ $project['category'] }}
                                </span>
                                
                                <!-- Project Title -->
                                <h3 class="text-xl font-bold text-white mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-300">
                                    {{ $project['title'] }}
                                </h3>
                                
                                <!-- Project Description -->
                                <p class="text-gray-400 mb-5 text-sm leading-relaxed">
                                    {{ $project['description'] }}
                                </p>
                                
                                <!-- Technologies Used -->
                                <div class="flex flex-wrap gap-2 mb-5">
                                    @foreach ($project['technologies'] as $tech)
                                        <span class="px-3 py-1 bg-white/5 border border-white/10 text-gray-300 text-xs rounded-full hover:bg-white/10 hover:text-white transition-all">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="flex justify-between items-center pt-4 border-t border-white/10">
                                    <a href="#"
                                       class="inline-flex items-center text-sm font-medium text-purple-400 hover:text-purple-300 group/link">
                                        <span>View Details</span>
                                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover/link:translate-x-2"></i>
                                    </a>
                                    
                                    <div class="flex gap-3">
                                        <a href="#" class="text-gray-400 hover:text-white transition-colors" title="GitHub">
                                            <i class="fab fa-github"></i>
                                        </a>
                                        <a href="#" class="text-gray-400 hover:text-white transition-colors" title="Live Demo">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            @if (empty($projects))
                <div class="text-center py-24" data-aos="fade-up">
                    <div class="w-32 h-32 mx-auto mb-8 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-folder-open text-5xl text-gray-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">No Projects Yet</h3>
                    <p class="text-gray-400 max-w-md mx-auto">I'm currently working on some exciting projects. Check back soon for updates!</p>
                </div>
            @endif
            
            <!-- Load More Button -->
            <div class="text-center mt-16" data-aos="fade-up">
                <button class="load-more-btn px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/10 text-white rounded-full font-medium hover:bg-white/10 transition-all duration-300 inline-flex items-center gap-3">
                    <span>Load More Projects</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-slate-800">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="text-center" data-aos="fade-up">
                    <div class="text-4xl font-bold text-gradient mb-2">50+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Projects Completed</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold text-gradient mb-2">98%</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Client Satisfaction</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold text-gradient mb-2">5+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Years Experience</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold text-gradient mb-2">30+</div>
                    <div class="text-gray-400 text-sm uppercase tracking-wider">Happy Clients</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-900/30 to-purple-900/30">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Have a Project in Mind?
                </h2>
                <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
                    Let's discuss how we can bring your ideas to life with cutting-edge technology and creative excellence.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold text-white shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105 group">
                    <i class="fas fa-paper-plane"></i>
                    <span>Start a Project</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .filter-btn.active {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        color: white;
        box-shadow: 0 4px 20px rgba(139, 92, 246, 0.3);
    }
    
    .hover-lift:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .text-gradient {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .portfolio-item {
        transition: all 0.3s ease;
    }
    
    .portfolio-item.hidden {
        display: none;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0); }
        33% { transform: translateY(-10px) translateX(5px); }
        66% { transform: translateY(-5px) translateX(-5px); }
    }
    
    .animate-float {
        animation: float 20s ease-in-out infinite;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Portfolio Filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white');
                    btn.classList.add('bg-white/5', 'text-gray-300');
                });
                
                // Add active class to clicked button
                this.classList.add('active', 'bg-gradient-to-r', 'from-blue-600', 'to-purple-600', 'text-white');
                this.classList.remove('bg-white/5', 'text-gray-300');
                
                // Get filter value
                const filterValue = this.getAttribute('data-filter');
                
                // Filter items
                portfolioItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    
                    if (filterValue === 'all' || itemCategory === filterValue) {
                        item.classList.remove('hidden');
                        // Animate item appearance
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            item.style.transition = 'all 0.5s ease';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
        
        // Load More Button (Example functionality)
        const loadMoreBtn = document.querySelector('.load-more-btn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                this.disabled = true;
                
                // Simulate loading more projects
                setTimeout(() => {
                    this.innerHTML = '<span>All Projects Loaded</span>';
                    this.classList.add('opacity-50');
                    this.classList.remove('hover:bg-white/10');
                }, 1500);
            });
        }
        
        // Initialize AOS animations
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        }
        
        // Add parallax effect to header background
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.animate-float');
            
            parallaxElements.forEach((el, index) => {
                const speed = 0.2 + (index * 0.1);
                el.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    });
</script>
@endpush