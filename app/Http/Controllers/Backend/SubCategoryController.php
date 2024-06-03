<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
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


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::orderBy('id', 'DESC')->get();
        return view('backend.subcategory.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('backend.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:sub_categories',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        SubCategory::create($input);

        return redirect()->route('sub-category.index')->with('success', 'New sub category has been added successfully.');
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
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $SubCategory = SubCategory::findOrFail(intval($id));
        return view('backend.subcategory.edit', compact('categories','SubCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $SubCategory = SubCategory::findOrFail($id);

        if($SubCategory->slug == $request->slug) {
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255',
                'category_id' => 'required',
            ]);
        }else{
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255|unique:sub_categories',
                'category_id' => 'required',
            ]);
        }

        $input = $request->all();

        $SubCategory->update($input);

        return redirect()->route('sub-category.index')->with('success', 'New sub category has been updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail(intval($id));

        if($subCategory->products->count() > 0) {
            return redirect()->route('sub-category.index')->with('error', 'Item can not be deleted.');
        }else{
            $subCategory->delete();
        }

        return redirect()->route('sub-category.index')->with('success', 'Item has been deleted successfully.');
    }
}
