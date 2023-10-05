<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Unsplash\HttpClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('authors')) {
            $authors = User::firstWhere('username', request('authors'));
            $title = ' by ' . $authors->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            // "blogs" => Post::all()
            "blogs" => Post::latest()->filter(request(['search', 'category', 'authors']))->paginate(7)->withQueryString(),
            
        ]);
    }

    public function show(Post $post) {
        return view('blog', [
            "title" => "Content",
            "posts" => $post
        ]);
    }


    public function profile(User $user){
        return view('profile', [
            'title' => 'User Profile',
            'posts' => $user->posts->load('category'),
            'users' => $user,
        ]);
    }

    public function aboutUs(){
        return view('aboutUs', [
            'title' => 'User Profile',
            // 'posts' => $user->posts->load('category'),
            'category' => Category::all(),
        ]);
    }
}
