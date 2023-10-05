<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            "title" => "Blog",
            "category" => Category::all()
        ]);
    }

    public function perId(Category $category) {
        return view('category', [
            "title" => "Category",
            "posts" => $category->posts,
            'categories' => $category->name,
        ]);
    }
}
