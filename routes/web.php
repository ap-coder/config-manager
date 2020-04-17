<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('permissions', 'PermissionsController');

    Route::resource('roles', 'RolesController');

    Route::resource('users', 'UsersController');

    Route::resource('sync-servers', 'SyncServerController');

    Route::resource('channel-servers', 'ChannelServerController');

    Route::resource('channels', 'ChannelController');

    Route::resource('csis', 'CsiController');

    Route::resource('csos', 'CsoController');
});
