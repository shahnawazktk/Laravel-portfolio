<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home page
     */
    public function home()
    {
        return view('home');
    }
    /**
     * About page
     */
    public function about()
    {
        $experience = [
            [
                'year' => '2020 - Present',
                'title' => 'Senior Full Stack Developer',
                'description' => 'Leading development teams and architecting enterprise solutions.',
                'skills' => ['Team Leadership', 'System Architecture', 'Performance Optimization']
            ],
            // ... add more experience items
        ];
        
        $philosophies = [
            [
                'icon' => 'fas fa-code',
                'title' => 'Clean Code',
                'description' => 'Writing maintainable, well-documented code.',
                'color' => 'from-blue-500 to-cyan-500'
            ],
            // ... add more philosophy items
        ];
        
        return view('about', compact('experience', 'philosophies'));
    }
    /**
     * Skill page
     */
    public function skills()
    {
        $skills = [
            [
                'name' => 'Laravel & PHP',
                'level' => 95,
                'icon' => 'fab fa-laravel',
                'color' => 'from-red-500 to-orange-500',
                'description' => 'Expert in Laravel framework, PHP OOP, and backend architecture'
            ],
            // ... add all skills data here
        ];

        $technologies = [
            ['icon' => 'fab fa-laravel', 'name' => 'Laravel', 'color' => 'from-red-500 to-orange-500'],
            // ... add all technologies here
        ];

        $certifications = [
            ['title' => 'Laravel Certified Developer', 'issuer' => 'Laravel', 'year' => '2023'],
            // ... add all certifications here
        ];

        return view('skills', compact('skills', 'technologies', 'certifications'));
    }

    /**
     * Services page
     */
    public function services()
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Full-stack applications with Laravel, Vue.js, and modern frameworks.',
                'icon' => 'fas fa-code',
                'features' => ['Custom Web Apps', 'E-commerce Solutions', 'API Development']
            ],
            [
                'title' => 'Mobile Apps',
                'description' => 'Native and cross-platform mobile solutions for iOS and Android.',
                'icon' => 'fas fa-mobile-alt',
                'features' => ['React Native', 'Flutter', 'PWA']
            ],
            [
                'title' => 'Backend Solutions',
                'description' => 'Robust, scalable backend architecture and database design.',
                'icon' => 'fas fa-server',
                'features' => ['Laravel APIs', 'Microservices', 'Database Optimization']
            ]
        ];

        return view('services', compact('services'));
    }

    /**
     * Portfolio page
     */
    public function portfolio()
    {
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'category' => 'Web Application',
                'description' => 'Complete online marketplace with payment integration and admin dashboard.',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe', 'Redis']
            ],
            [
                'title' => 'Project Management Tool',
                'category' => 'SAAS',
                'description' => 'Real-time collaboration platform for teams with task management and communication.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Socket.io', 'AWS']
            ],
            [
                'title' => 'Fitness Tracker Mobile App',
                'category' => 'Mobile Application',
                'description' => 'AI-powered workout and nutrition planner with progress tracking.',
                'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['React Native', 'Firebase', 'Redux', 'Chart.js']
            ],
            [
                'title' => 'Hospital Management System',
                'category' => 'Web Application',
                'description' => 'Comprehensive system for patient records, appointments, and billing.',
                'image' => 'https://images.unsplash.com/photo-1516549655669-df6654e435de?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Bootstrap']
            ],
            [
                'title' => 'E-learning Platform',
                'category' => 'SAAS',
                'description' => 'Online course platform with video streaming, quizzes, and certificates.',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['Laravel', 'React', 'AWS S3', 'Stripe']
            ],
            [
                'title' => 'Real Estate Listing Portal',
                'category' => 'Web Application',
                'description' => 'Property listing platform with advanced search filters and virtual tours.',
                'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'Google Maps API', 'MySQL']
            ]
        ];

        return view('portfolio', compact('projects'));
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('contact');
    }
}