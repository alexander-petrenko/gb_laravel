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

Route::get('/news/{news}', 'NewsController@singleNews')
    ->name('singleNews');

Route::get('/news/{news}/edit', 'NewsController@newsEdit')
    ->name('newsEdit');
Route::put('/news/{news}/update', 'NewsController@newsUpdate')
    ->name('newsUpdate');

Route::get('/news/create', 'NewsController@newsCreate')
    ->name('newsCreate');
Route::post('news/create', 'NewsController@newsAdd')
    ->name('newsAdd');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{category}', 'CategoryController@newsByCategory')
    ->name('singleCategory');

Route::get('/user/login', 'UserController@login');

Route::get('user/comment', 'UserController@comment');
Route::post('user/comment', 'UserController@commentAdd');

Route::get('/user/feedback', 'UserController@feedback');

Route::get('/user/request', 'UserController@request');
Route::post('/user/request', 'UserController@requestAdd');

Route::get('/user/requests', 'UserController@requests');

Route::get('/about_us', 'NewsController@aboutUs');

//Auth::routes();
