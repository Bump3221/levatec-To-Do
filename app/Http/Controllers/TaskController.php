<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
     public function index(Task $task)
    {
        return view('tasks/index')->with(['tasks' => $task->get()]);  
    }
}
