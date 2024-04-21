<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\Post_likeController;
use App\Http\Controllers\Post_commentController;
use App\Http\Controllers\Comment_likeController;
use App\Http\Controllers\PostRequest;



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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/',[PostController::class,'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/create/{event}', [PostController::class, 'create']);
Route::get('/posts/create/{venue}', [PostController::class, 'create']);
Route::get('/posts/create/{performer}', [PostController::class, 'create']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/events/show',[PostController::class,'show']);
Route::get('/users/{user}', [UserController::class,'index']);
Route::get('/events/{event}', [EventController::class,'index']);
Route::get('/venues/{venue}', [VenueController::class,'index']);
Route::get('/performers/{performer}', [PerformerController::class,'index']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/community/nice/{post}', [Post_likeController::class, 'nice'])->name('nice');
Route::get('/community/unnice/{post}', [Post_likeController::class, 'unnice'])->name('unnice');
Route::post('/post/post_comment/store',[Post_commentController::class, 'store'])->name('comment.store');
Route::delete('/post/post_comment/{comment}',[Post_commentController::class,'destroy'])->name('comment.destroy');
Route::get('/community/nice/{comment}', [Comment_likeController::class, 'nice'])->name('comment.nice');
Route::get('/community/unnice/{comment}', [Comment_likeController::class, 'unnice'])->name('comment.unnice');
});

require __DIR__.'/auth.php';
