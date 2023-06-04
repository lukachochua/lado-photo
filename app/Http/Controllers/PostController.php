<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::with('posts')->get();

        $filteredPosts = collect([]);
        
        foreach ($categories as $category) {
            $post = $category->posts->first(function ($post) {
                $image = Image::make(storage_path('app/public/images/' . $post->photo));
                $post->aspectRatio = $image->getWidth() / $image->getHeight();
                return $post->aspectRatio < 1;
            });

            if ($post) {
                $filteredPosts->push($post);
            }
        }

        return view('portfolio', [
            'filteredPosts' => $filteredPosts,
            'categories' => $categories
        ]);
    }

    public function show(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->get()->map(function ($post) {
            $image = Image::make(storage_path('app/public/images/' . $post->photo));
            $post->aspectRatio = $image->getWidth() / $image->getHeight();
            return $post;
        });

        return view('categories', compact('posts'));
    }
}
