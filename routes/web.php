<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostColltroller;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Favorite;

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
    return view('home', [
        "title" => "VAKANTIE",
        'categories' => Category::all()
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About US",
    ]);
});



Route::get('/posts', [PostColltroller::class, 'index']);
//halaman single posts
Route::get('/posts/{post:slug}', [PostColltroller::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'total' => Post::where('user_id', auth()->user()->id)->count(),
        'fav' => Favorite::where('user_id', auth()->user()->id)->count(),
        'posts' => Post::where('user_id', auth()->user()->id)->get(),
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::resource('/dashboard/allpost', AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/dashboard/admin/posts/{post:slug}', [AdminCategoryController::class, 'show']);


Route::get('/fav', [FavoriteController::class, 'index'])->middleware('auth');
Route::post('/favorite', [FavoriteController::class, 'store'])->middleware('auth');
