<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', 'HomeController@welcome');
Route::get('/about_us', 'HomeController@aboutUs');


Route::get('/news', 'NewsController@news');
Route::get('/news/{news}', 'NewsController@singleNews')
    ->name('singleNews');



// Admin routes
Route::group(['prefix' => 'admin'], function() {
    Route::resource('/categories', 'Admin\CategoryController');
    Route::resource('/news', 'Admin\NewsController');
    Route::resource('/feedback', 'Admin\FeedbackController');
    Route::resource('/requests', 'Admin\RequestController');
});





Route::get('/user/login', 'UserController@login');

//Auth::routes();
