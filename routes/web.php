<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ArticleController;
use App\HTTP\Controllers\CategoryController;
use App\HTTP\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        'articles' => Post::all(),
    ]);
})->name('home');

Route::get('/add', function () {
    return view('add');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('register', [AuthController::class, 'regist'])->name('register');
    Route::post('signup', [AuthController::class, 'signup'])->name('signup');
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('signin', [AuthController::class, 'signin'])->name('signin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
    Route::get('create', [ArticleController::class, 'create'])->name('create');
    Route::post('store', [ArticleController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'kategori', 'as' => 'kategori.'], function () {
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::post('store', [CategoryController::class, 'store'])->name('store');
});
