<?php

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

Route::get('/', 'App\\Http\\Controllers\\HomeController@dashboard')
->name('dashboard');

Route::get('/authors', 'App\\Http\\Controllers\\AuthorController@index')
    ->name('authors.index');

Route::get('/books', 'App\\Http\\Controllers\\BookController@index')
->name('books.index');

Route::get('/users', 'App\\Http\\Controllers\\UserController@index')
->name('users.index');

Route::get('/genres', 'App\\Http\\Controllers\\GenreController@index')
->name('genres.index');

Route::get('/reviews', 'App\\Http\\Controllers\\ReviewController@index')
->name('reviews.index');
