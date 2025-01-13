<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->image = Upload::uploadFile($request->image, 'projects');
        $project->save();
        return redirect()->back()->with('success', 'تم اضافة المشروع بنجاح');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->name;
        if ($request->image) {
            Upload::deleteFile($project->image);
            $project->image = Upload::uploadFile($request->image, 'projects');
        }
        $project->save();
        return redirect()->back()->with('success', 'تم تعديل المشروع بنجاح');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        Upload::deleteFile($project->image);
        $project->delete();
        return redirect()->back()->with('success', 'تم حذف المشروع بنجاح');
    }
}
