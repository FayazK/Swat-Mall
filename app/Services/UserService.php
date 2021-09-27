<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

/**
 *
 */
class UserService
{

    /**
     * @var UserRepository
     */
    private $repository;

    private $dataTable;

    /**
     * @param UserRepository $repository
     * @param DataTables $dataTables
     */
    public function __construct( UserRepository $repository, DataTables $dataTables )
    {
        $this->repository = $repository;
        $this->dataTable = $dataTables;

    }// __construct

    /**
     * @return JsonResponse
     * @throws Exception
     */
    public function dataTables() : JsonResponse
    {
        $table = $this->dataTable->eloquent( $this->repository->dataTables() );

        return $table->make();
    }// dataTables

}