@extends('layouts.app')

@section('title', 'Contact | My Portfolio')

@section('content')
    <!-- Contact Hero -->
    <section id="contact"
        class="py-24 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-blue-500/10 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-purple-500/10 rounded-full filter blur-3xl animate-float"
            style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <div class="inline-flex items-center gap-3 px-4 py-2 glass rounded-full mb-6">
                        <i class="fas fa-paper-plane text-emerald-400"></i>
                        <span class="font-medium">Get In Touch</span>
                    </div>

                    <h2 class="section-heading text-4xl md:text-5xl font-bold mb-6">
                        <span class="text-white">Let's Work</span>
                        <span class="block text-gradient">Together</span>
                    </h2>

                    <p class="text-gray-400 text-lg">
                        Have a project in mind? I'd love to hear about it. Send me a message and let's discuss.
                    </p>
                </div>

                <!-- Contact Content -->
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="glass rounded-3xl p-8" data-aos="fade-right">
                        <h3 class="text-2xl font-bold mb-6">Send a Message</h3>

                        <form id="contactForm" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Name</label>
                                    <input type="text"
                                        class="w-full px-4 py-3 glass rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                                        placeholder="Your Name">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium mb-2">Email</label>
                                    <input type="email"
                                        class="w-full px-4 py-3 glass rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                                        placeholder="your@email.com">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Subject</label>
                                <input type="text"
                                    class="w-full px-4 py-3 glass rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Project Inquiry">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Message</label>
                                <textarea rows="5" class="w-full px-4 py-3 glass rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"
                                    placeholder="Tell me about your project..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full font-semibold hover-glow hover-lift transition-all duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div data-aos="fade-left">
                        <div class="space-y-6 mb-8">
                            <!-- Info 1 -->
                            <div class="flex items-start gap-4 glass p-6 rounded-2xl">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Email</h4>
                                    <a href="mailto:shahnawaz@example.com"
                                        class="text-gray-400 hover:text-white transition-colors">
                                        shahnawaz@example.com
                                    </a>
                                </div>
                            </div>

                            <!-- Info 2 -->
                            <div class="flex items-start gap-4 glass p-6 rounded-2xl">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Phone</h4>
                                    <a href="tel:+923001234567" class="text-gray-400 hover:text-white transition-colors">
                                        +92 300 1234567
                                    </a>
                                </div>
                            </div>

                            <!-- Info 3 -->
                            <div class="flex items-start gap-4 glass p-6 rounded-2xl">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Location</h4>
                                    <p class="text-gray-400">Gurguri Karak, KPK Pakistan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Availability -->
                        <div class="glass rounded-2xl p-6">
                            <h4 class="font-bold mb-4">Current Availability</h4>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="relative">
                                    <span
                                        class="absolute inset-0 animate-ping bg-emerald-400 rounded-full opacity-75"></span>
                                    <span class="relative block w-3 h-3 bg-emerald-500 rounded-full"></span>
                                </div>
                                <span class="font-medium">Available for freelance projects</span>
                            </div>
                            <p class="text-sm text-gray-400">
                                I'm currently accepting new projects and available for full-time opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Show success message
                document.getElementById('success-message').classList.remove('hidden');

                // Reset form
                form.reset();

                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;

                // Hide success message after 5 seconds
                setTimeout(() => {
                    document.getElementById('success-message').classList.add('hidden');
                }, 5000);
            }, 1500);
        });
    </script>
@endpush
