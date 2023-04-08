<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.admin', [
            'post' => Post::first(),
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.create', [
            'post' => Post::first(),
            'categories' => $categories
        ]);
    }

    public function show()
    {
        return view('admin.gallery', [
            'posts' => Post::all(),
        ]);
    }

    public function store()
    {
        
        $attributes = request()->validate([
            'photo' => 'required|image|max:2048',
            'description' => 'required|string|max:255',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    

        $post = new Post();
        
        $path = $attributes['photo']->store('public/images');
        $post->photo = basename($path);
        $post->user_id = auth()->user()->id;
        $post->description = $attributes['description'];
        $post->category_id = $attributes['category_id'];

        $post->save();

        return redirect('/admin/posts/create')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.edit', [
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'description' => 'required|string|max:255',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {

        Storage::delete(str_replace('/storage', 'public', $post->photo));

        $post->delete();

        return redirect('/admin/gallery')->with('success', 'Post deleted successfully!');
    }
}
