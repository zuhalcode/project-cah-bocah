<?php


use App\Models\History;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardOrderController;
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
    return view('home',[
        "title" => "Home",        
    ]);
});

Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);

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
    return view('dashboard.index',[
        "active"=>'dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/orders', DashboardOrderController::class)->middleware('auth');


// Route::get('/dashboard/posts/checkSlug',[DashboardCategoryController::class,'checkSlug']);
// Route::resource('/dashboard/categories', DashboardCategoryController::class);

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class,'checkSlug']);
Route::resource('/dashboard/categories', DashboardCategoryController::class);

Route::get('/categories', [CategoryController::class,'index']);
Route::get('categories/{post:slug}',[CategoryController::class,'show']);

Route::resource('/orders', OrderController::class);
Route::post('/orders/{id}', [OrderController::class, 'order']);
Route::controller(OrderController::class)->group(fn() =>[
    Route::get('confirm', 'confirm'),
]);
Route::resource('/checkout', CheckoutController::class);

Route::resource('/history', HistoryController::class)->middleware('auth');


