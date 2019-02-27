<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\CreateTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store(CreateTask $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function edit(int $task_id)
    {
        $task = Task::find($task_id);

        return view('tasks/edit', [
            'task' => $task,
        ]);
    }
}
