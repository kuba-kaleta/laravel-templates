<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class HomeController extends Controller{
    public function index(){
        $categories = Category::all();
        $products = Product::all();

        return view('home', compact('categories', 'products'));
    }
}

