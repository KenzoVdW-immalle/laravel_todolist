<?php

namespace App\Http\Controllers;

use App\task;

class TaskController extends Controller
{
    public function index()
    
    {
         $tasks = Task::all();

    return view('todolist.index', compact('tasks'));
    }

    public function show(Task $task)
    {
         

    return view('todolist.show', compact('task'));
    }
}
