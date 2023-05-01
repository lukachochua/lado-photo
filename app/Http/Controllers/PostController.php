<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::inRandomOrder()->limit(3)->get();
        $images = scandir(public_path('storage/images'));

        return view('about', [
            'categories' => $categories,
            'posts' => $posts,
            'images' => $images
        ]);
    }

    public function photos()
    {
        $categories = Category::all();

        return view('photos', [
            'posts' => Post::orderBy('created_at', 'desc')->get()
        ])->with('categories', $categories);
    }

    public function show(Category $category)
    {
        $categories = Category::all();

        return view('category', [
            'posts' => $category->posts,
            'categories' => $categories
        ]);
    }

    public function video()
    {
        $categories = Category::all();

        return view('videos', [
            'categories' => $categories
        ]);
    }
}
