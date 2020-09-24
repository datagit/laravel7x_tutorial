<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private function getPostByDB($slug) {
        return \DB::table('posts')->where('slug', $slug)->first();
    }
    public function show($slug)
    {
        $post = $this->getPostByDB($slug);
        return view('post', [
            'post' => $post,
            'slug' => $slug,
        ]);
    }
}
