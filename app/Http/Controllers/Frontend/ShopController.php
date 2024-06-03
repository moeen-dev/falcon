<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex(Request $request)
    {
        $sortOrder = strtoupper($request->input('sort', 'ID_DESC'));
        $perPage = $request->input('per_page', 20);

        if ($perPage === 'ALL') {
            $perPage = Product::count();
        }

        if ($sortOrder === 'ASC') {
            $products = Product::orderBy('current_price', 'ASC')->paginate($perPage);
        } elseif ($sortOrder === 'DESC') {
            $products = Product::orderBy('current_price', 'DESC')->paginate($perPage);
        } else {
            $products = Product::orderBy('id', 'DESC')->paginate($perPage);
            $sortOrder = 'ID_DESC';
        }

        return view('frontend.shop.index', compact('products', 'sortOrder', 'perPage'));
    }


    public function shopDetails($productslug)
    {
        $product = Product::where('slug', $productslug)->first();
        return view('frontend.shop.show', compact('product'));
    }
}
