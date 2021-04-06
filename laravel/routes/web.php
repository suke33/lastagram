<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::group(['middleware' => 'auth'], function() {

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/user/detail', [PostController::class, 'show'])->name('user.detail');

});



// マークアップ用のルーティング
// Route::get('/mark/posts', function() {
//     return view('admin.home');
// });
// Route::get('/mark/posts/create', function() {
//     return view('admin.create');
// });
// Route::get('/mark/posts/detail', function() {
//     return view('admin.detail');
// });