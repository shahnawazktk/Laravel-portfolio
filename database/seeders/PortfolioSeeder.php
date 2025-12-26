<?php

namespace Database\Seeders;

use App\Models\PortfolioItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        $portfolioItems = [
            [
                'title' => 'E-commerce Platform',
                'description' => 'A full-featured online store with payment integration and inventory management.',
                'long_description' => 'Developed a complete e-commerce solution with user authentication, product management, shopping cart, and Stripe payment integration. The platform includes an admin dashboard for order management and analytics.',
                'category' => 'Web Development',
                'technologies' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'MySQL', 'Stripe API'],
                'is_featured' => true,
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A collaborative project management tool with real-time updates.',
                'long_description' => 'Built a real-time task management application using Laravel Echo and WebSockets. Features include team collaboration, file attachments, comments, and deadline tracking.',
                'category' => 'Web Application',
                'technologies' => ['Laravel', 'Livewire', 'Alpine.js', 'Redis', 'Pusher'],
                'is_featured' => true,
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'A responsive portfolio website with animations and smooth transitions.',
                'long_description' => 'Designed and developed a personal portfolio website with custom animations using GSAP and AOS. The site is fully responsive and optimized for performance.',
                'category' => 'Web Design',
                'technologies' => ['HTML', 'CSS', 'JavaScript', 'GSAP', 'AOS'],
                'is_featured' => true,
            ],
            [
                'title' => 'API Integration Service',
                'description' => 'A service for integrating multiple third-party APIs with a unified interface.',
                'long_description' => 'Created a middleware service that connects various third-party APIs (payment gateways, shipping services, SMS providers) and provides a unified REST API for client applications.',
                'category' => 'Backend Development',
                'technologies' => ['Laravel', 'REST API', 'OAuth', 'Docker', 'Redis'],
                'is_featured' => false,
            ],
            [
                'title' => 'Mobile App Dashboard',
                'description' => 'Analytics dashboard for a mobile application with real-time data visualization.',
                'long_description' => 'Developed an admin dashboard with charts and graphs to visualize user activity, revenue, and app performance metrics. Features export functionality and custom report generation.',
                'category' => 'Dashboard',
                'technologies' => ['Laravel', 'Chart.js', 'Vue.js', 'MySQL', 'WebSockets'],
                'is_featured' => false,
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A content management system for publishing articles with SEO optimization.',
                'long_description' => 'Built a custom blog platform with WYSIWYG editor, category management, tagging system, and SEO optimization features. Includes social sharing and comment functionality.',
                'category' => 'Content Management',
                'technologies' => ['Laravel', 'Trix Editor', 'SEO Tools', 'Redis Cache', 'Cloudinary'],
                'is_featured' => false,
            ],
        ];

        foreach ($portfolioItems as $item) {
            PortfolioItem::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'description' => $item['description'],
                'long_description' => $item['long_description'],
                'image' => null,
                'category' => $item['category'],
                'client' => 'Various Clients',
                'project_date' => now()->subDays(rand(30, 365)),
                'project_url' => 'https://example.com',
                'technologies' => $item['technologies'],
                'sort_order' => rand(1, 10),
                'is_featured' => $item['is_featured'],
                'is_active' => true,
            ]);
        }
    }
}