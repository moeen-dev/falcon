<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
        ->orderBy('sub_categories.name', 'ASC')
        ->select('products.*')
        ->get();

        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub_categories = SubCategory::orderBy('name', 'ASC')->get();
        return view('backend.product.create', compact('sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:products',
            'image1' => 'required|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp,',
            'image2' => 'required|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
            'image3' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
            'image4' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
            'sub_category_id' => 'required',
            'off_price' => 'nullable',
            'current_price' => 'required',
            'normal_price' => 'nullable',
            'information' => 'required',
            'details' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image1-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image1'] = $filename;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image2-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image2'] = $filename;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image3-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image3'] = $filename;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image4-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image4'] = $filename;
        }

        Product::create($input);

        return redirect()->route('product.index')->with('success', 'New Product has been added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $sub_categories = SubCategory::orderBy('name', 'ASC')->get();

        $product = Product::findOrFail(intval($id));
        return view('backend.product.edit', compact('sub_categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if($product->slug == $request->slug) {
            $request->validate([
                'title' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255',
                'image1' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image2' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image3' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image4' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'sub_category_id' => 'required',
                'off_price' => 'nullable',
                'current_price' => 'required',
                'normal_price' => 'required',
                'information' => 'required',
                'details' => 'required',
            ]);
        }else{
            $request->validate([
                'title' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255|unique:products',
                'image1' => 'required|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image2' => 'required|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image3' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'image4' => 'nullable|image|min:3|max:2048|mimes:jpeg,jpg,gif,png,webp',
                'sub_category_id' => 'required',
                'off_price' => 'nullable',
                'current_price' => 'required',
                'normal_price' => 'required',
                'information' => 'required',
                'details' => 'required',
            ]);
        }

        $input = $request->all();

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image1-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image1'] = $filename;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image2-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image2'] = $filename;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image3-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image3'] = $filename;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalName();
            $filename = time().'-image4-'.$extension;
            $file->move('upload/images/', $filename);
            $input['image4'] = $filename;
        }

        $product->update($input);

        return redirect()->route('product.index')->with('success', 'Product has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail(intval($id));

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product has been deleted successfully.');
    }
}
