<?php

use Illuminate\Support\Facades\Route;
//link the PostController file
use App\Http\Controllers\PostController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//let's defined a route wherein we can return a view containing a post creation form

Route::get('/posts/create',[PostController::class,'create']);

//define a route wherein the form data will be sent via POST method to the /posts URI endpoint

Route::post('/posts',[PostController::class,'store']);

//define a route that will return a view containing all posts

Route::get('/posts',[PostController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

