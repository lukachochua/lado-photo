<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->get()->map(function ($post) {
            $image = Image::make(storage_path('app/public/images/' . $post->photo));
            $post->aspectRatio = $image->getWidth() / $image->getHeight();
            return $post;
        })->filter(function ($post) {
            return $post->aspectRatio > 1;
        });;

        return view('about', [
            'posts' => $posts,
        ]);
    }

    public function portfolio()
    {
        $posts = Post::orderBy('created_at')->get()->map(function ($post) {
            $image = Image::make(storage_path('app/public/images/' . $post->photo));
            $post->aspectRatio = $image->getWidth() / $image->getHeight();
            return $post;
        });
        

        $verticalPosts = $posts->filter(function($post) {
            return $post->aspectRatio < 1;
        });

        $horizontalPosts = $posts->filter(function($post) {
            return $post->aspectRatio > 1;
        });

        $chunkedVerticalPosts = $verticalPosts->chunk(2);
        $totalChunks = count($chunkedVerticalPosts) + count($horizontalPosts);
        $chunkIndexes = collect(range(0, $totalChunks - 1))->shuffle();

        
        return view('portfolio', [
            'posts' => $posts,
            'verticalPosts' => $verticalPosts,
            'horizontalPosts' => $horizontalPosts,
            'chunkedVerticalPosts' => $chunkedVerticalPosts,
            'totalChunks' => $totalChunks,
            'chunkIndexes' => $chunkIndexes
        ]);
    }
}
