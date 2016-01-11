<?php

namespace App\Repositories;

use App\Task;

class EloquentTaskRepository implements TaskRepository
{

    public function all()
    {
        return Task::latest()->get();
    }

    /**
     * Create a new task` for the given user and data.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $data
     * @return \App\Task
     */
    public function create($user, array $data)
    {
        $task = new Task($data);
        $task->user_id = $user->id;
        $task->save();

        return $task;
    }
}