<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        Task::create($request->all());

        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->update($request->all());
        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully.');
    }
}
