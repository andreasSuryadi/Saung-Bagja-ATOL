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

Route::get('/', 'App\Http\Controllers\ConnectionController@home');
Route::get('about-us', 'App\Http\Controllers\ConnectionController@aboutUs');
Route::get('news', 'App\Http\Controllers\ConnectionController@news');
Route::get('menu', 'App\Http\Controllers\ConnectionController@menu');

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/',                                             'PageController@home')->name('home');
        Route::get('/about-us',                                     'PageController@aboutUs')->name('aboutUs');
        Route::get('/news-content',                                 'PageController@news')->name('news');
        Route::get('/menu-content',                                 'PageController@menu')->name('menu');
        Route::get('{slug}/{section}/show',                         'PageController@indexSection')->name('indexSection');
        Route::post('{slug}/{section}/save',                        'PageController@save')->name('save');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('news')->name('news/')->group(static function() {
            Route::get('/',                                             'NewsController@index')->name('index');
            Route::get('/create',                                       'NewsController@create')->name('create');
            Route::post('/',                                            'NewsController@store')->name('store');
            Route::get('/{news}/edit',                                  'NewsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'NewsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{news}',                                      'NewsController@update')->name('update');
            Route::delete('/{news}',                                    'NewsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('menus')->name('menus/')->group(static function() {
            Route::get('/',                                             'MenusController@index')->name('index');
            Route::get('/create',                                       'MenusController@create')->name('create');
            Route::post('/',                                            'MenusController@store')->name('store');
            Route::get('/{menu}/edit',                                  'MenusController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MenusController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{menu}',                                      'MenusController@update')->name('update');
            Route::delete('/{menu}',                                    'MenusController@destroy')->name('destroy');
        });
    });
});