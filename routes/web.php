<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;

// Main Pages
// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/about', [PageController::class, 'about'])->name('about');
// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
// Route::get('/portfolio/{portfolioItem}', [PortfolioController::class, 'show'])->name('portfolio.show');
// Route::get('/services', [PageController::class, 'services'])->name('services');
// Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/skills', 'skills')->name('skills');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/contact', 'contact')->name('contact');
});