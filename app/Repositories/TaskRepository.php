<?php

namespace App\Repositories;

interface TaskRepository
{
    public function all();

    public function create($user, array $data);

}