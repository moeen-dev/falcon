<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view("frontend.home.index", compact('products'));
    }
}
