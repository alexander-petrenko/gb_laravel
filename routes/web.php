<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/facebook/auth', 'SocialAuthController@facebookAuth')
        ->name('facebook.auth');
    Route::get('/facebook/callback', 'SocialAuthController@facebookCallback')
        ->name('facebook.callback');
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', function() {
        Auth::logout();
        return redirect('/login');
    });

    //User
    Route::get('/account', 'Account\IndexController@index')
        ->name('account');

    // Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/parser', 'Admin\ParserController@index')
            ->name('parser');
        Route::get('/', 'Admin\IndexController@index')
            ->name('admin');
        Route::resource('/categories', 'Admin\CategoryController');
        Route::resource('/news', 'Admin\NewsController');
        Route::resource('/feedback', 'Admin\FeedbackController');
        Route::resource('/requests', 'Admin\RequestController');
        Route::resource('/users', 'Admin\UserController');
        Route::resource('/sources', 'Admin\SourceController');
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});




Auth::routes();
