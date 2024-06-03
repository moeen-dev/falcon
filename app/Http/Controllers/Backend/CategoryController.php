<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:255|unique:categories',
            'icon' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->icon = $request->icon;

        $category->save();

        return redirect()->route('category.index')->with('success', 'New category has been added successfully');
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
        $category = Category::findOrFail(intval($id));

        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail(intval($id));

        if ($category->slug == $request->slug ) {
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255',
                'icon' => 'required|string',
            ]);
        }else{
            $request->validate([
                'name' => 'required|string|min:3|max:255',
                'slug' => 'required|string|min:3|max:255|unique:categories',
                'icon' => 'required|string',
            ]);
        }

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->icon = $request->icon;

        $category->save();

        return redirect()->route('category.index')->with('success', 'Category has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail(intval($id));

        if($category->subcategories->count() > 0) {
            return redirect()->route('category.index')->with('error', 'Item can not be deleted.');
        }else{
            $category->delete();
        }

        return redirect()->route('category.index')->with('success', 'Item has been deleted successfully.');
    }
}
