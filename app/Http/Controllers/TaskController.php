<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    private $task;

    public function __construct(TaskRepository $task)
    {
        $this->task = $task;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request $request
     * @return Response
     */
    public function index()
    {
        $tasks = $this->task->all();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Store an specific task for the current user.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->task->getRules());

        $this->task->save($request);

        return Redirect::back();
    }
}
