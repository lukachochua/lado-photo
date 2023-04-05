<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.create', [
            'post' => Post::first(),
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
        ]);

        $post = new Post;

        $path = $attributes['photo']->store('public/images');
        $post->photo = basename($path);
        $post->description = $attributes['description'];

        $post->save();

        return redirect('/admin/posts/create')->with('success', 'Post created successfully!');
    }

    public function destroy(Post $post)
    {

        Storage::delete(str_replace('/storage', 'public', $post->photo));

        $post->delete();

        return redirect('/admin/gallery')->with('success', 'Post deleted successfully!');
    }
}
