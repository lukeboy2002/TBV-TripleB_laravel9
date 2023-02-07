<?php

use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

//BLOG
Route::get('posts', [PostController::class, 'index'])->name('post');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('post.show');

//COMMENTS
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('status', [profileController::class, 'userOnlineStatus']);
});

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:super-admin|admin|moderator|developer|member'])->group(function () {

    Route::get('settings', function () {
        return view('admin.dashboard');
    })->name('settings');

    //USERS
    Route::get('users/trashed', [UserController::class, 'trashed'])->name('users.trashed');
    Route::get('users/trashed/{id}/restore', [UserController::class, 'trashedRestore'])->name('users.trashed.restore');
    Route::get('users/trashed/{id}/forse_delete', [UserController::class, 'trashedDelete'])->name('users.trashed.destroy');
    Route::resource('users', UserController::class);
    //MEMBERS
    Route::get('members/trashed', [MemberController::class, 'trashed'])->name('members.trashed');
    Route::get('members/trashed/{id}/restore', [MemberController::class, 'trashedRestore'])->name('members.trashed.restore');
    Route::get('members/trashed/{id}/forse_delete', [MemberController::class, 'trashedDelete'])->name('members.trashed.destroy');
    Route::resource('members', MemberController::class);
});

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'role:super-admin|admin'])->group(function () {
    //ROLES
    Route::resource('roles', RoleController::class);
});
