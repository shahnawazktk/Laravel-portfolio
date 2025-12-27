<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Shah Nawaz - Senior Full Stack Developer specializing in Laravel, Vue.js, and modern web development">

    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #3b82f6;
            --secondary: #10b981;
            --dark: #1f2937;
            --light: #f9fafb;
            --accent: #8b5cf6;
        }

        .text-gradient {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-gradient {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        }

        /* Custom animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }

        /* Glass morphism effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #8b5cf6;
            --accent: #ec4899;
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        body {
            background-color: #0f172a;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Custom Animations */
        @keyframes gradient {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
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

        @keyframes pulse-glow {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.6;
            }
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 6s ease infinite;
        }

        .animate-float {
            animation: float 15s ease-in-out infinite;
        }

        .animate-pulse-glow {
            animation: pulse-glow 4s ease-in-out infinite;
        }

        .animate-slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }

        .text-gradient {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.8);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
            border-radius: 5px;
        }

        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-dark {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Custom Utilities */
        .perspective-1000 {
            perspective: 1000px;
        }

        .text-shadow {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
        }

        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(139, 92, 246, 0.4);
        }

        /* Mobile Menu */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        /* Loading Animation */
        .loader {
            border: 3px solid rgba(255, 255, 255, 0.1);
            border-top: 3px solid #8b5cf6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-heading {
                font-size: 3rem;
            }

            .section-heading {
                font-size: 2.5rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .hero-heading {
                font-size: 2.5rem;
            }

            .section-heading {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .project-card {
                height: auto;
                min-height: 300px;
            }
        }
    </style>

    @stack('styles')
</head>

<body class="antialiased">
    <div id="loadingScreen" class="fixed inset-0 bg-slate-900 z-50 flex items-center justify-center">
        <div class="text-center">
            <div class="loader w-16 h-16 mb-6"></div>
            <h3 class="text-xl font-semibold text-white">Loading Portfolio...</h3>
            <p class="text-gray-400 mt-2">Shah Nawaz</p>
        </div>
    </div>
    <!-- Navigation -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')
    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-8 right-8 w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-all duration-300 opacity-0 pointer-events-none">
        <i class="fas fa-chevron-up"></i>
    </button>



    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // DOM Ready
        document.addEventListener('DOMContentLoaded', function() {
            // Remove loading screen
            setTimeout(() => {
                document.getElementById('loadingScreen').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('loadingScreen').style.display = 'none';
                }, 500);
            }, 1000);

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menuToggle');
            const menuClose = document.getElementById('menuClose');
            const mobileMenu = document.getElementById('mobileMenu');

            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.add('open');
                document.body.style.overflow = 'hidden';
            });

            menuClose.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });

            // Close mobile menu when clicking links
            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('open');
                    document.body.style.overflow = '';
                });
            });

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

            // Form Submission
            const contactForm = document.getElementById('contactForm');

            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Thank you for your message! I will get back to you soon.');
                contactForm.reset();
            });

            // Animate elements on scroll
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.skill-progress, .project-card, .service-card');

                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('animate-slide-in');
                    }
                });
            };

            window.addEventListener('scroll', animateOnScroll);

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    if (href === '#') return;

                    e.preventDefault();
                    const target = document.querySelector(href);

                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Initialize scroll animation
            animateOnScroll();
        });

        // Parallax effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');

            parallaxElements.forEach(element => {
                const speed = element.getAttribute('data-speed') || 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // GSAP Animations
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize ScrollTrigger
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // Parallax effect for hero section
                gsap.to('.hero-bg-image', {
                    scrollTrigger: {
                        trigger: '.hero-section',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: true
                    },
                    y: 100,
                    ease: 'none'
                });

                // Animate skill bars on scroll
                gsap.utils.toArray('.skill-bar').forEach(bar => {
                    const width = bar.style.width;
                    bar.style.width = '0%';

                    ScrollTrigger.create({
                        trigger: bar,
                        start: 'top 80%',
                        onEnter: () => {
                            gsap.to(bar, {
                                width: width,
                                duration: 1.5,
                                ease: 'power3.out'
                            });
                        }
                    });
                });

                // Stagger animation for project cards
                gsap.utils.toArray('.project-card').forEach((card, i) => {
                    gsap.from(card, {
                        scrollTrigger: {
                            trigger: card,
                            start: 'top 85%',
                            toggleActions: 'play none none reverse'
                        },
                        y: 50,
                        opacity: 0,
                        duration: 0.8,
                        delay: i * 0.1,
                        ease: 'power3.out'
                    });
                });
            }

            // Typewriter effect for hero text
            const heroTitle = document.querySelector('.hero-title');
            if (heroTitle) {
                const text = heroTitle.textContent;
                heroTitle.textContent = '';

                let i = 0;
                const typeWriter = () => {
                    if (i < text.length) {
                        heroTitle.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, 50);
                    }
                };
                setTimeout(typeWriter, 500);
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
