<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace'=>'App\Http\Controllers\Main'], function() {
    Route::get('/', [IndexController::class, '__invoke']);
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function () {
        Route::get('/', 'IndexController')->name('admin.profile.index');
    });

    Route::group(['namespace' => 'Faq', 'prefix' => 'faq'], function () {
        Route::get('/', 'IndexController')->name('admin.faq.index');
    });

    Route::group(['namespace' => 'Test', 'prefix' => 'test'], function () {
        Route::get('/', 'IndexController')->name('admin.test.index');
    });

    Route::group(['namespace' => 'Course', 'prefix' => 'course'], function () {
        Route::get('/', 'IndexController')->name('admin.course.index');
    });

    Route::group(['namespace' => 'Users', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.users.index');
    });
});



Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user', 'middleware' => ['auth', 'isStudent']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('user.main.index');
    });

    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function () {
        Route::get('/', 'IndexController')->name('user.profile.index');
    });

    Route::group(['namespace' => 'Faq', 'prefix' => 'faq'], function () {
        Route::get('/', 'IndexController')->name('user.faq.index');
    });

    Route::group(['namespace' => 'Test', 'prefix' => 'test'], function () {
        Route::get('/', 'IndexController')->name('user.test.index');
    });
});

Auth::routes();
