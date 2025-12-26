@extends('layouts.app')

@section('title', 'Contact | My Portfolio')

@section('content')
    <!-- Contact Hero -->
    <section class="py-20 bg-gradient text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6" data-aos="fade-up">Get In Touch</h1>
            <p class="text-xl opacity-90 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Have a project in mind? Let's work together to bring your ideas to life.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div data-aos="fade-right">
                    <h2 class="text-3xl font-bold mb-8">Send a Message</h2>
                    
                    <form id="contact-form" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Full Name *</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                       placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email Address *</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                       placeholder="john@example.com">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-gray-700 mb-2">Subject *</label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                   placeholder="Project Inquiry">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Message *</label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="6" 
                                      required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                                      placeholder="Tell me about your project..."></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="btn-send px-8 py-4 bg-primary text-white font-medium rounded-lg hover:shadow-xl transition-all hover:scale-105 w-full">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                    
                    <!-- Success Message (hidden by default) -->
                    <div id="success-message" class="hidden mt-6 p-4 bg-green-100 text-green-800 rounded-lg">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>Thank you! Your message has been sent successfully.</span>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div data-aos="fade-left">
                    <h2 class="text-3xl font-bold mb-8">Contact Information</h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Location</h3>
                                <p class="text-gray-600">San Francisco, California</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Email</h3>
                                <p class="text-gray-600">hello@example.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-primary text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Phone</h3>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Map Placeholder -->
                    <div class="mt-12 rounded-xl overflow-hidden shadow-lg">
                        <div class="h-64 bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-map text-4xl text-gray-400"></i>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4">Follow Me</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
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