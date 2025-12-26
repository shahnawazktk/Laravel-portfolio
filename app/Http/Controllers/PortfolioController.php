<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();
        
        $categories = PortfolioItem::where('is_active', true)
            ->distinct()
            ->pluck('category')
            ->toArray();
        
        return view('portfolio.index', compact('items', 'categories'));
    }

    public function show(PortfolioItem $portfolioItem)
    {
        return view('portfolio.show', compact('portfolioItem'));
    }
}