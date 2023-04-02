<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('/admin', [
            'post' => Post::first(),
        ]);
    }

    public function create()
    {
        return view('create', [
            'post' => Post::first(),
        ]);
    }
}
