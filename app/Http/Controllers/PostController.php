<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    // public function __construct(Category $category)
    // {
    //     $categories = Category::all();
    //     View::share('categories', $categories);

    //     View::share('category', $category); // ??
    // }

    public function index()
    {
        $categories = Category::all();

        $variables = $categories->all();


        return view('welcome', [
            'posts' => Post::orderBy('created_at', 'desc')->get()
        ])->with('categories', $categories)->with('variables', $variables);
    }

    public function show(Category $category)
    {
        $categories = Category::all();

        return view('category', [
            'posts' => $category->posts,
            'categories' => $categories
        ]);
    }
}
