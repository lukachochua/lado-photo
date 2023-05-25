<?php

namespace App\Http\Controllers;


use App\Models\Post;
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
        return view('admin.create', [
            'post' => Post::first(),
        ]);
    }

    public function show()
    {
        return view('admin.gallery', [
            'posts' => Post::all()
        ]);
    }

    public function store(Request $request)
    {
        $post = new Post();

        $attributes = $this->validatePost();


        $path = $attributes['photo']->store('public/images');
        $post->photo = basename($path);
        $post->user_id = auth()->user()->id;
        $post->description = $attributes['description'];
        $post->save();


        return redirect('/admin/posts/create')->with('success', 'Post created successfully!');
    }

    

    public function edit(Post $post)
    {

        return view('admin.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        $post->update($attributes);

        return redirect(route('posts.show', $post))->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        Storage::delete(str_replace('/storage', 'public', $post->photo));

        $post->delete();

        return redirect(route('posts.show', $post))->with('success', 'Post deleted successfully!');
    }

    protected function validatePost(?Post $post = null)
    {
        $post ??= new Post;

        return  request()->validate([
            'photo' => $post->exists ? ['image'] : 'required|image',
            'description' => 'required|string|max:255',
        ]);
    }
}
