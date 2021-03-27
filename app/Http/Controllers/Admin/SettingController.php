<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Theme;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class SettingController
 * @package App\Http\Controllers\Api
 */
class SettingController extends Controller
{

    public function index()
    {
        return Theme::view( 'settings.index' );
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function update( Request $request )
    {
        if( empty( $request->settings ) ) {
            abort( 400, __( 'No Settings Updated' ) );
        }
        foreach( $request->settings as $key => $value ) {
            option( [ $key => $value ] );
        }

        return new JsonResponse( [ 'message' => __( 'Settings Updated' ) ] );
    }// update
}
