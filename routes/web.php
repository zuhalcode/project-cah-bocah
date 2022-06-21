<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;

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

// Route::get('/about', function () {
//     // return 'Halaman About';
//     return view('about',[
//         "title" => "About",
//         'active'=> 'about',
//         "nama" => "Cah Bocah",
//     ]);
// });

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    if(auth()->user()->username !='admin'){
        abort(404);
    }
    return view('dashboard.index',[
        "active"=>'dashboard'
    ]);
});

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/orders',OrderController::class)->middleware('auth');


// Route::get('/dashboard/posts/checkSlug',[DashboardCategoryController::class,'checkSlug']);
// Route::resource('/dashboard/categories', DashboardCategoryController::class);

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class,'checkSlug']);
Route::resource('/dashboard/categories', DashboardCategoryController::class);

Route::get('/categories', [CategoryController::class,'index']);
Route::get('categories/{post:slug}',[CategoryController::class,'show']);

Route::resource('/orders', OrderController::class);
Route::post('/orders/{id}', [OrderController::class, 'order']);
Route::resource('/checkout', CheckoutController::class);
// Route::get('/about', [AboutCotroller::class,'index']);


