<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::latest();

        if(request('search')) {
            $categories->where('name', 'like', '%' . request('search'). '%'  );
        }

        return view('categories',[
            "title" => "category",
            "name" => "category",
            "active" => 'category',
            "categories" => $categories->get()
        ]);
    }

    public function show(Category $category){
        return view('post',[
            "name" => "Single Post",
            "active"=> 'product',
            "post" => $category
        ]);
    }
}
