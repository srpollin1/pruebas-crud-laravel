<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStore;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate();
        return view('projects.index', compact('projects'));
    }


    public function create()
    {
        return view('projects.create');
    }


    public function store(ProjectStore $request) {
        $project = Project::create($request->all());
        return redirect()->route('projects.show', $project->id);
    }


    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }


    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }


    public function update(ProjectStore $request, Project $project) {
        $project->update($request->all());
        return redirect()->route('projects.show', $project->id);
    }


    public function destroy(Project $project) {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
