<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{

    /**
     * The task repository instance.
     *
     * @var \App\Repositories\TaskRepository
     */
    private $tasks;

    /**
     * Create a new controller instance.
     *
     * @param \App\Repositories\TaskRepository $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request $request
     * @return Response
     */
    public function index()
    {
        $tasks = $this->tasks->all();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Create a new task.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $user = $request->user();

        $this->validate($request, $this->tasks->getRules());

        $task = $this->task->create(
            $user, ['name' => $request->name]
        );

        return Redirect::back();
    }
}
