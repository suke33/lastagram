<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// 開発用の仮ルーティング
// Route::get('/posts', [PostController::class, 'index'])->name('post.index');
// Route::get('/posts', function() {
//     return view('home');
// });
// Route::get('/posts/create', function() {
//     return view('create');
// });
// Route::get('/posts/detail', function() {
//     return view('detail');
// });

// マークアップ用のルーティング
Route::get('/mark/posts', function() {
    return view('admin.home');
});
Route::get('/mark/posts/create', function() {
    return view('admin.create');
});
Route::get('/mark/posts/detail', function() {
    return view('admin.detail');
});