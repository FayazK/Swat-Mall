<?php

Route::get( '/', function() {
    return \App\Helpers\Theme::view( 'layouts.admin' );
} );
