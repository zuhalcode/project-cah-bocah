<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();

        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search'). '%'  );
        }

        return view('posts',[
            "title" => "Product",
            "active" => 'product',
            "posts" => $posts->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "active"=> 'product',
            "post" => $post
        ]);
    }
}
