<?php

namespace App\Repositories;

use App\Task;

class EloquentTaskRepository implements TaskRepository
{

    public function all()
    {
        return Task::latest()->get();
    }
}