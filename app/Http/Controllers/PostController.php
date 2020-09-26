<?php
// php artisan make:controller PostController
namespace App\Http\Controllers;

use App\User;
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

    public function userTestChunk()
    {
        // the same paging in DB
//        User::chunk(200, function ($users) {
//            foreach ($users as $user) {
//                $name = (rand(0,1) == 1) ? $user->name . '_add1' : $user->name . '_add0';
//                // might be more logic here
//                $user->update(['name' => $name]);
//            }
//        });

//        User::where('id', '>', 0)->chunk(200, function ($users) {
//            var_dump(count($users));
//            foreach ($users as $user) {
//                $name = (rand(0,1) == 1) ? $user->name . '_add1' : $user->name . '_add0';
//                // might be more logic here
//                $user->update(['name' => $name]);
//            }
//        });

        foreach (User::where('id', '>', 98)->cursor() as $user) {
            var_dump($user->id);
        }


        return view('post', [
            'post' => 'POST',
            'slug' => 'slug',
        ]);

    }

}
