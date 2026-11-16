<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $latestProducts = DB::table('products')
            ->orderBy('id_products', 'desc')
            ->take(3)
            ->get();

        $categories = DB::table('categories')->get()->map(function ($category) {
            $category->products = DB::table('products')
                ->where('id_category', $category->id_category)
                ->take(6)
                ->get();
            return $category;
        });

        $allDisplayedProducts = $latestProducts
            ->merge($categories->pluck('products')->flatten())
            ->unique('id_products');

        return view('home', compact('latestProducts', 'categories', 'allDisplayedProducts'));
    }
}
