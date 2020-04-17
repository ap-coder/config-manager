<?php

Route::group(['prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('permissions', 'PermissionsApiController');

    Route::apiResource('roles', 'RolesApiController');

    Route::apiResource('users', 'UsersApiController');

    Route::apiResource('sync-servers', 'SyncServerApiController');

    Route::apiResource('channel-servers', 'ChannelServerApiController');

    Route::apiResource('channels', 'ChannelApiController');

    Route::apiResource('csis', 'CsiApiController');

    Route::apiResource('csos', 'CsoApiController');
});
