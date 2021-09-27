<?php

namespace App\Http\Controllers;

use App\Helpers\Theme;
use App\Services\UserService;
use Illuminate\Http\Request;

/**
 *
 */
class UserController extends Controller
{

    /**
     * @var UserService
     */
    private $service;

    /**
     * @param UserService $service
     */
    public function __construct( UserService $service )
    {
        $this->service = $service;
    }// __construct

    /**
     *
     * @throws \Exception
     */
    public function index( Request $request )
    {
        if( $request->isMethod( 'POST' ) && $request->ajax() ) {
            return $this->service->dataTables();
        }
        return Theme::view( 'users.index' );
    }// index

}// UserController
