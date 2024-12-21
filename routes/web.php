<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ArticleController;
use App\HTTP\Controllers\CategoryController;

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

Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
    Route::get('create', [ArticleController::class, 'create'])->name('create');
    Route::post('store', [ArticleController::class, 'store'])->name('store');
});

Route::group(['prefix' => 'kategori', 'as' => 'kategori.'], function () {
    Route::get('create', [CategoryController::class, 'create'])->name('create');
    Route::post('store', [CategoryController::class, 'store'])->name('store');
});
