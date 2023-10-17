<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Users Control //

// Show register page
Route::get('/register', function () {
    return view('register');
});

// Regiser user
Route::post('/register', [UserController::class, 'createUser']);


// Show login page
Route::get('/login', function () {
    return view('login');
});

// Regiser user
Route::post('/login', [UserController::class, 'loginUser']);

// Logout user
Route::post('/logout', [UserController::class, 'logout']);



// Posts control //

// Fetch posts
Route::get('/', [PostController::class, 'fetchPosts']);

// Show create job
Route::get('/create-job', function () {
    return view('create-job');
});

// Create post
Route::post('/post-job', [PostController::class, 'createPost']);

// Edit post
Route::put('/post-job/{post}', [PostController::class, 'editPost']);

// View Job
Route::get('posts/{post}', [PostController::class, 'showPost']);

// Show edit Job
Route::get('posts/{post}/edit', [PostController::class, 'showEditPost']);

//Delete job
Route::delete('/posts/{post}', [PostController::class, 'delete']);
