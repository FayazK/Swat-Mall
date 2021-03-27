<?php

use App\Helpers\Theme;
use App\Http\Controllers\Admin\SettingController;

Route::get( '/', function() {
    return Theme::view( 'layouts.admin' );
} );


/* --------------------------------------------------------------
 *  Settings
 * --------------------------------------------------------------
 */
Route::prefix( 'settings' )->group( function() {
    Route::put( '/', [ SettingController::class, 'update' ] )->name( 'admin.settings.save' );

    Route::get( 'site', [ SettingController::class, 'index' ] )->name( 'admin.settings.site' );
} );
