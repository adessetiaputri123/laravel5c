<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('category')
            ->latest()
            ->get();

        return view('tasks', compact('tasks'));
    }
}
