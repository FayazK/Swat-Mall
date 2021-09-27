<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function dataTables()
    {
        return User::query();
    }
}