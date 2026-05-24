<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Get all projects sorted by completion date
        $projects = Project::latest('completion_date')->get();
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        // Find project by ID or return 404
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
}
