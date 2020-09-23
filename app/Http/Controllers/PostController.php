<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = 'title';
        return view('post', [
            'post' => $post,
            'slug' => $slug,
        ]);
    }
}
