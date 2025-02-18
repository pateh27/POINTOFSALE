<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = [
            ['name' => 'Food & Baverage', 'slug' => 'food-and-baverage'],
            ['name' => 'Beauty & Health', 'slug' => 'beauty-and-health'],
            ['name' => 'Home care', 'slug' => 'home-care'],
            ['name' => 'Baby & Kid', 'slug' => 'baby-and-kid'],
        ];
        return view('product.index', compact('categories'));
    }
    public function foodBeverage() {
        return view('products.food-beverage');
    }

    public function beautyHealth() {
        return view('products.beauty-health');
    }

    public function homeCare() {
        return view('products.home-care');
    }

    public function babyKid() {
        return view('products.baby-kid');
    }
}
