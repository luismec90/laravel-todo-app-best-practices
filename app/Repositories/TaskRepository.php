<?php

namespace App\Repositories;

interface TaskRepository
{
    public function all();

    public function find();

    public function save();

    public function update();

    public function delete();
}