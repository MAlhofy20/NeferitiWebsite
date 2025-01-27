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
        // مؤقتًا: إعادة ترتيب الأرقام عند فتح الصفحة (يمكن إزالته لاحقًا)
        // $this->reorderProjects();
        
        $projects = Project::orderBy('order_number', 'asc')->get();
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('dashboard.projects.create');
    }

    public function store(Request $request)
    {   
        // الحصول على آخر ترتيب وإضافة 1
        $lastOrder = Project::max('order_number') ?? 0;
        
        $project = new Project();
        $project->order_number = $lastOrder + 1;
        $project->name = $request->name;
        $project->image = Upload::uploadFile($request->image, 'projects');
        $project->save();
        
        return redirect()->route('dashboard.projects.index')
            ->with('success', 'تم إضافة المشروع بنجاح');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->name = $request->name;
        
        if ($request->hasFile('image')) {
            Upload::deleteFile($project->image);
            $project->image = Upload::uploadFile($request->image, 'projects');
        }
        
        $project->save();
        return redirect()->route('dashboard.projects.index')
            ->with('success', 'تم تعديل المشروع بنجاح');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        Upload::deleteFile($project->image);
        $project->delete();
        
        // إعادة ترتيب الأرقام بعد الحذف
        $this->reorderProjects();
        
        return redirect()->back()
            ->with('success', 'تم حذف المشروع بنجاح');
    }

    public function up($id)
    {
        $current = Project::findOrFail($id);
        
        // البحث عن العنصر السابق مباشرة
        $previous = Project::where('order_number', '<', $current->order_number)
            ->orderBy('order_number', 'desc')
            ->first();
        
        if ($previous) {
            // التبديل بين الترتيبين
            $currentOrder = $current->order_number;
            $current->order_number = $previous->order_number;
            $previous->order_number = $currentOrder;
            
            $current->save();
            $previous->save();
        }
        
        return redirect()->route('dashboard.projects.index')
            ->with('success', 'تم تحديث الترتيب بنجاح');
    }

    public function down($id)
    {
        $current = Project::findOrFail($id);
        
        // البحث عن العنصر التالي مباشرة
        $next = Project::where('order_number', '>', $current->order_number)
            ->orderBy('order_number', 'asc')
            ->first();
        
        if ($next) {
            // التبديل بين الترتيبين
            $currentOrder = $current->order_number;
            $current->order_number = $next->order_number;
            $next->order_number = $currentOrder;
            
            $current->save();
            $next->save();
        }
        
        return redirect()->route('dashboard.projects.index')
            ->with('success', 'تم تحديث الترتيب بنجاح');
    }

    /**
     * إعادة ترتيب الأرقام بشكل تسلسلي
     */
    private function reorderProjects()
    {
        $projects = Project::orderBy('order_number')->get();
        
        $order = 1;
        foreach ($projects as $project) {
            $project->order_number = $order++;
            $project->save();
        }
    }
}