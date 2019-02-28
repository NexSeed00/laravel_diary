<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()->tasks()->get();
        
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
        $task->user_id = Auth::user()->id;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {

        return view('tasks/edit', [
            'task' => $task,
        ]);
    }

    public function update(Task $task, EditTask $request)
    {
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();
    
        return redirect()->route('tasks.index');
    }
}
