<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    public function index()
    {
        $sliders = Slider::inRandomOrder()
            ->get() 
            ->filter(function ($slider) {
                $image = Image::make(storage_path('app/public/slider/' . $slider->photo));
                $aspectRatio = $image->width() / $image->height();
                return $aspectRatio > 1;
            })
            ->take(3);

        return view('about', [
            'sliders' => $sliders,
        ]);
    }

    public function portfolio()
    {
        $posts = Post::orderBy('created_at')->get()->map(function ($post) {
            $image = Image::make(storage_path('app/public/images/' . $post->photo));
            $post->aspectRatio = $image->getWidth() / $image->getHeight();
            return $post;
        });

        $verticalPosts = $posts->filter(function ($post) {
            return $post->aspectRatio < 1;
        });

        $horizontalPosts = $posts->filter(function ($post) {
            return $post->aspectRatio > 1;
        });

        return view('portfolio', [
            'posts' => $posts,
            'verticalPosts' => $verticalPosts,
            'horizontalPosts' => $horizontalPosts,
        ]);
    }
}
