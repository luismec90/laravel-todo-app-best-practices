<?php

namespace App\Repositories;

use App\User;

class EloquentUserRepository implements UserRepository
{

    public function all()
    {
        return User::latest()->get();
    }
}