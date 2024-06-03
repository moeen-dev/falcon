<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function status(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'is_stock' => 'required|boolean',
        ]);

        $product->is_stock = $request->is_stock;

        $product->save();

        return redirect()->back()->with('success', 'Product status updated successfully!');
    }
}
