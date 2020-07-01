<?php

use App\Http\Controllers\NewsController;
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

Route::get('/', 'NewsController@index');

Route::get('/news', 'NewsController@news');

Route::get('/news/{id}', 'NewsController@singleNews')
    ->where('id', '\d+');

Route::get('/news/{id}/edit', 'NewsController@newsEdit')
    ->where('id', '\d+');

Route::get('/news/create', 'NewsController@newsCreate');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{id}', 'NewsController@newsByCategory')
    ->where('id', '\d+');

Route::get('/user/login', 'UserController@login');

Route::get('/about_us', 'NewsController@aboutUs');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');