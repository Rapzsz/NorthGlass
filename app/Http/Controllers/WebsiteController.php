<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\View\View;

class WebsiteController extends Controller
{
    public function home(): View
    {
        return view('website.home', [
            'services' => Service::latest()->get(),
            'products' => Product::latest()->get(),
        ]);
    }

    public function services(): View
    {
        return view('website.pages.our-services', [
            'items' => Service::latest()->get(),
            'kind' => 'services',
            'title' => 'Our Services',
        ]);
    }

    public function service(string $slug): View
    {
        return view('website.detail', [
            'item' => Service::where('slug', $slug)->firstOrFail(),
            'kind' => 'services',
        ]);
    }

    public function products(): View
    {
        return view('website.pages.product', [
            'items' => Product::latest()->get(),
            'kind' => 'products',
            'title' => 'Product',
        ]);
    }

    public function product(string $slug): View
    {
        return view('website.detail', [
            'item' => Product::where('slug', $slug)->firstOrFail(),
            'kind' => 'products',
        ]);
    }

    public function contact(): View
    {
        return view('website.contact', [
            'services' => Service::latest()->get(),
        ]);
    }
}