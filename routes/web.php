<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:super-admin|admin|moderator|developer|member'])->group(function () {

    Route::get('settings', function () {
        return view('admin.dashboard');
    })->name('settings');
});

//BLOG
Route::get('posts', [PostController::class, 'index'])->name('post');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post.show');

//COMMENTS
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);
