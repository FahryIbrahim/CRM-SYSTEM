<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with(['project', 'user'])->get();
        return view("pages.tasks.index", compact("tasks"));
    }

    public function create()
    {
        $projects = Project::all();
        return view("pages.tasks.create", compact("projects"));
    }

    public function store(StoreTaskRequest $request)
    {
        try {
            Task::create([
                'title' => $request->title,
                'description' => $request->description,
                'project_id' => $request->project_id,
                'user_id' => auth()->id(),
                'status' => $request->status,
                'due_date' => $request->due_date,
            ]);

            return redirect()
                ->route('tasks.index')
                ->with('success', 'Task created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating task: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create task. Please try again.');
        }
    }

    public function show(Task $task)
    {
        return view('pages.tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $projects = Project::all();
        return view('pages.tasks.edit', compact('task', 'projects'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        try {
            $task->update([
                'title' => $request->title,
                'description' => $request->description,
                'project_id' => $request->project_id,
                'user_id' => auth()->id(),
                'status' => $request->status,
                'due_date' => $request->due_date,
            ]);

            return redirect()
                ->route('tasks.index')
                ->with('success', 'Task updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating task: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update task. Please try again.');
        }
    }

    public function destroy(Task $task)
    {
        try {
            $task->delete();
            return redirect()
                ->route('tasks.index')
                ->with('success', 'Task deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting task: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Failed to delete task. Please try again.');
        }
    }
}
