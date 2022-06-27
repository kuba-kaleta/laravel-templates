<?php

namespace app\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Code\Html\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
}
