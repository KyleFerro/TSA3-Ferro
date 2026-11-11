<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::today()->orderBy('task_date')->orderBy('title')->get();

        return view('tasks.welcome', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('title')->get();

        return view('tasks.index', compact('tasks'));
    }
}
