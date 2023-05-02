<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::inRandomOrder()->limit(3)->get();

        return view('about', [
            'categories' => $categories,
            'posts' => $posts,
        ]);
    }

    public function portfolio()
    {
        $categories = Category::all();
        $posts = $posts = Post::orderBy('created_at')->get()->map(function ($post) {
            $image = Image::make(storage_path('app/public/images/' . $post->photo));
            $post->aspectRatio = $image->getWidth() / $image->getHeight();
            return $post;
        });
        

        $verticalPosts = $posts->filter(function($post) {
            return $post->aspectRatio < 1;
        });

        $horizontalPosts = $posts->filter(function($post) {
            return $post->aspectRatio >= 1;
        });

        $chunkedVerticalPosts = $verticalPosts->chunk(2);
        $totalChunks = count($chunkedVerticalPosts) + count($horizontalPosts);
        $chunkIndexes = collect(range(0, $totalChunks - 1))->shuffle();

        
        return view('portfolio', [
            'posts' => $posts,
            'categories' => $categories,
            'verticalPosts' => $verticalPosts,
            'horizontalPosts' => $horizontalPosts,
            'chunkedVerticalPosts' => $chunkedVerticalPosts,
            'totalChunks' => $totalChunks,
            'chunkIndexes' => $chunkIndexes
        ]);
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
