<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.admin.categories', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.create-category', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|max:50',
            'slug' => 'required|unique:categories',
        ]);

        // $validateDate['user_id'] = auth()->user()->id;
        Category::create($validateDate);

        return redirect('/dashboard/categories')->with('message', 'New Category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.admin.edit-categories', [
            'update' => $category,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required',
        ];

        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validateDate = $request->validate($rules);

        Category::where('id', $category->id)->update($validateDate);

        return redirect('/dashboard/categories')->with('message', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete($category->slug);

        return redirect('/dashboard/categories')->with('message', 'Category Has Been Deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);

        return response()->json(['slug' => $slug]);
    }
}
