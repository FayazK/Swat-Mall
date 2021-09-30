<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Helpers\Theme;
use App\Services\UserService;
use Exception;
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
     * @throws Exception
     */
    public function index( UsersDataTable $usersDataTable )
    {
        return $usersDataTable->render( 'admin.users.index' );
    }// index

}// UserController
