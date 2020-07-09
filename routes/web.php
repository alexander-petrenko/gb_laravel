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
    ->where('id', '\d+')
    ->name('singleNews');

Route::get('/news/{id}/edit', 'NewsController@newsEdit')
    ->where('id', '\d+')
    ->name('newsEdit');
Route::put('/news/{id}/edit', 'NewsController@newsUpdate')
    ->where('id', '\d+')
    ->name('newsUpdate');

Route::get('/news/create', 'NewsController@newsCreate');
Route::post('news/create', 'NewsController@newsAdd');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{id}', 'NewsController@newsByCategory')
    ->where('id', '\d+')
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
