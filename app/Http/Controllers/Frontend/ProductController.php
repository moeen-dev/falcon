<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showBySubCategory($categoryslug, $subcategoryslug)
    {
        $category = Category::where('slug', $categoryslug)->first();
        $subCategory = SubCategory::where('slug', $subcategoryslug)->first();
        return view('frontend.product.index', compact('subCategory', 'category'));
    }

    public function showDetails($categoryslug, $subcategoryslug, $productslug)
    {
        $category = Category::where('slug', $categoryslug)->first();
        $subCategory = SubCategory::where('slug', $subcategoryslug)->first();
        $product = Product::where('slug', $productslug)->first();

        return view('frontend.product.details', compact('category', 'subCategory', 'product'));
    }
}
