<?php

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
Route::prefix('admin')
        ->namespace('Admin')
        ->middleware('auth')
        ->group(function(){

    /**
     * Routes Destinies
     */
    Route::any('destinies/search', 'DestinyController@search')->name('destinies.search');
    Route::resource('destinies', 'DestinyController');

    /**
     * Routes Users
     */
    Route::any('users/search', 'UserController@search')->name('users.search');
    Route::resource('users', 'UserController');

    /**
     * Routes guests
     */
    Route::get('guests/qrcode/{id}', 'GuestController@qrcode')->name('guests.qrcode');

    Route::get('guests/create', 'GuestController@create')->name('guests.create');
    Route::put('guests/{id}', 'GuestController@update')->name('guests.update');
    Route::get('guests/{id}/edit', 'GuestController@edit')->name('guests.edit');
    Route::any('guests/search', 'GuestController@search')->name('guests.search');
    Route::delete('guests/{id}', 'GuestController@destroy')->name('guests.destroy');
    Route::get('guests/{id}', 'GuestController@show')->name('guests.show');
    Route::post('guests', 'GuestController@store')->name('guests.store');
    Route::get('guests', 'GuestController@index')->name('guests.index');

    /**
     * Routes roles
     */
    Route::get('roles/create', 'RoleController@create')->name('roles.create');
    Route::put('roles/{id}', 'RoleController@update')->name('roles.update');
    Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
    Route::any('roles/search', 'RoleController@search')->name('roles.search');
    Route::delete('roles/{id}', 'RoleController@destroy')->name('roles.destroy');
    Route::get('roles/{id}', 'RoleController@show')->name('roles.show');
    Route::post('roles', 'RoleController@store')->name('roles.store');
    Route::get('roles', 'RoleController@index')->name('roles.index');

    /**
     * Home Dashboard
     */
    Route::get('/', 'DashboardController@home')->name('admin.index');
});

// Route::get('/', function () {
//     return view('Site\SiteController@index')->name('site.home');
// });

Route::get('/', function () {
    return view('auth.login');
});

/**
 * Auth Routes
 */
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
