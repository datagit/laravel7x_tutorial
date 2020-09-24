<?php
// php artisan make:controller PostController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{
    private function getPostByDB($slug) {
        return \DB::table('posts')->where('slug', $slug)->first();
    }
    private function getPostFromDBByELoquent($slug) {
        //return Post::where('slug', $slug)->first();
        return Post::where('slug', $slug)->firstOrFail();
    }
    public function show($slug)
    {
        //$post = $this->getPostByDB($slug);
        $post = $this->getPostFromDBByELoquent($slug);
        dd($post);
        return view('post', [
            'post' => $post,
            'slug' => $slug,
        ]);
    }
}
