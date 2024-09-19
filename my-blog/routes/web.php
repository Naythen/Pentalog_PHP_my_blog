<?php

use Illuminate\Support\Facades\Route;

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

// The route we have created to show all blog posts.
Route::get('/blog', [\App\Http\Controllers\Controller::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\Controller::class, 'show']);
Route::get('/blog/create/post', [\App\Http\Controllers\Controller::class, 'create']); //shows create post form
Route::post('/blog/create/post', [\App\Http\Controllers\Controller::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\Controller::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\Controller::class, 'update']); //commits edited post to the database
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\Controller::class, 'destroy']); //deletes post from the database
