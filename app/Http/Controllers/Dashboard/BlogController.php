<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'image' => 'required|image',
            'content_ar' => 'required',
            'content_en' => 'required',
        ]);
        $blog = new Blog();
        $blog->title_ar = $request->title_ar;
        $blog->content_ar = $request->content_ar;
        $blog->title_en = $request->title_en;
        $blog->content_en = $request->content_en;
        $blog->image = Upload::UploadFile($request->image, 'blogs');
        $blog->save();
        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.blog created successfully'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'image' => 'nullable|image',
            'content_ar' => 'required',
            'content_en' => 'required',
        ]);
        $blog = Blog::find($id);
        $blog->title_ar = $request->title_ar;
        $blog->content_ar = $request->content_ar;
        $blog->title_en = $request->title_en;
        $blog->content_en = $request->content_en;
        if ($request->hasFile('image')) {
            $blog->image = Upload::UploadFile($request->image, 'blogs');
        }
        $blog->save();
        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.blog updated successfully'));
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if ($blog->image) {
            Upload::deleteImage($blog->image);
        }
        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => __('dashboard.blog deleted successfully'),
        ]);
    }
}
