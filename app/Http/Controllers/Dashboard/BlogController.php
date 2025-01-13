<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Models\Product;
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
        $products = Product::all();
        return view('dashboard.blogs.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'preview' => 'required',
            'image' => 'required|image',
            'content' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = cleanSlug($request->title);
        $blog->preview = $request->preview;
        $blog->content = $request->content;
        if ($request->product_id) {
            $blog->product_id = $request->product_id;
        }
        $blog->image = Upload::UploadFile($request->image, 'blogs');

        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->save();
        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.created_successfully'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $products = Product::all();
        return view('dashboard.blogs.edit', compact('blog', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'preview' => 'required',
            'image' => 'nullable|image',
            'content' => 'required',
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->preview = $request->preview;
        $blog->content = $request->content;
        if ($request->hasFile('image')) {
            $blog->image = Upload::UploadFile($request->image, 'blogs');
        }
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->save();

        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog->image) {
            Upload::deleteImage($blog->image);
        }
        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => __('dashboard.deleted_successfully'),
        ]);
    }
}
