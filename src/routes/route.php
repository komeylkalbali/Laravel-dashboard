<?php

Route::group([
        'namespace' => 'Komeyl\Dashboard\Http\Controllers',
        'prefix'    => 'dashboard',
], function () {

    //dashbord;
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'UsersController@profile')->name('profile');
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('permissions', 'PermissionsController');

});
