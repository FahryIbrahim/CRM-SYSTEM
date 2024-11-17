<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view("pages.projects.index", compact("projects"));
    }

    public function create()
    {
        $clients = Client::all();

        return view("pages.projects.create", compact("clients"));
    }

    public function store(StoreProjectRequest $request)
    {
        try {
            Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'deadline' => $request->deadline,
                'user_id' => auth()->id(),
                'client_id' => $request->client_id,
                'status' => $request->status,
            ]);

            return redirect()
                ->route('projects.index')
                ->with('success', 'Project created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating project: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create project. Please try again.');
        }
    }

    public function show(Project $project)
    {
        return view('pages.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $clients = Client::all();

        return view('pages.projects.edit', compact('project', 'clients'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        try {
            $project->update([
                'name' => $request->name,
                'description' => $request->description,
                'deadline' => $request->deadline,
                'user_id' => auth()->id(),
                'client_id' => $request->client_id,
                'status' => $request->status,
            ]);

            return redirect()
                ->route('projects.index')
                ->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating project: ' . $e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update project. Please try again.');
        }
    }

    public function destroy(Project $project)
    {
        try {
            $project->delete();
            return redirect()
                ->route('projects.index')
                ->with('success', 'Project deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting project: ' . $e->getMessage());
            return redirect()
                ->back()
                ->with('error', 'Failed to delete project. Please try again.');
        }
    }
}
