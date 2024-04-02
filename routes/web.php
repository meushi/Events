<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\PerformerController;

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

Route::get('/',[PostController::class,'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/create/{event}', [PostController::class, 'create']);
Route::get('/posts/create/{venue}', [PostController::class, 'create']);
Route::get('/posts/create/{performer}', [PostController::class, 'create']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/events/show',[PostController::class,'show']);
Route::get('/events/{event}', [EventController::class,'index']);
Route::get('/venues/{venue}', [VenueController::class,'index']);
Route::get('/performers/{performer}', [PerformerController::class,'index']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);