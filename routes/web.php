<?php

use App\Models\Post;
use App\Models\About;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCotroller;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;

;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home',[
        "title" => "Home",
        'active'=> 'home',        
    ]);
    // return 'Halaman Home';
});

Route::get('/about', function () {
    // return 'Halaman About';
    return view('about',[
        "title" => "About",
        'active'=> 'about',
        "nama" => "Cah Bocah",
    ]);
});

Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);
// Route::get('/about', [AboutCotroller::class,'index']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=> 'Kategori Produk',
        'active'=> 'categories',
        'categories'=> Category::all()
        
    ]);

});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=> $category->name,
        'active'=> 'categories',
        'posts'=> $category->posts,
        'category'=> $category->name
    ]);
});

Route::get('/dashboard',function(){
    return view('dashboard.index');
});

Route::resource('/dashboard/posts', DashboardPostController::class);

