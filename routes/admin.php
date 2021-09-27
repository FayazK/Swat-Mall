<?php

use App\Helpers\Theme;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\UserController;

Route::get( '/', function() {
    return Theme::view( 'layouts.admin' );
} );

/* --------------------------------------------------------------
 *  Users
 * --------------------------------------------------------------
 */
Route::prefix( 'users' )->group( function() {
    Route::get( '/', [ UserController::class, 'index' ] )
         ->name( 'admin.users.all' );

    Route::post( '/', [ UserController::class, 'index' ] )
         ->name( 'admin.users.all.ajax' );
} );


/* --------------------------------------------------------------
 *  Settings
 * --------------------------------------------------------------
 */
Route::prefix( 'settings' )->group( function() {
    Route::put( '/', [ SettingController::class, 'update' ] )->name( 'admin.settings.save' );

    Route::get( 'site', [ SettingController::class, 'index' ] )->name( 'admin.settings.site' );
} );
