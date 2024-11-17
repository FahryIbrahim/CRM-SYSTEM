<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total users
        $totalUsers = User::count();
        // Get total clients
        $totalClients = Client::count();
        // Get total projects
        $totalProjects = Project::count();
        // Get total tasks
        $totalTasks = Task::count();
        // Return view
        return view('pages.dashboard', compact('totalUsers', 'totalClients', 'totalProjects', 'totalTasks'));
    }
}
