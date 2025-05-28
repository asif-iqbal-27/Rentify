<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show the task list
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Show the form to create a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a newly created task
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Task::create([
            'name' => $request->name,
            'status' => 'pending',
        ]);

        return redirect()->route('tasks.index');
    }

    // Show the form to edit an existing task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update the task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $task->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index');
    }

    // Delete the task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
