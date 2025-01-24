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
        $blogs = Blog::orderBy('order_number', 'asc')->get();
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
            'meta_description' => 'nullable|max:255',
            'meta_keywords' => 'nullable|max:255',
        ]);
        $lastBlog = Blog::orderBy('order_number', 'desc')->first();
        $blog = new Blog();
        $blog->order_number = $lastBlog ? $lastBlog->order_number + 1 : 1;
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
            'image' => 'required|image',
            'content' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable|max:255',
            'meta_keywords' => 'nullable|max:255',
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->preview = $request->preview;
        $blog->content = $request->content;
        if ($request->product_id) {
            $blog->product_id = $request->product_id;
        }

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
            Upload::deleteFile($blog->image);
        }
        $blog->delete();


        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.deleted_successfully'));
    }

    public function up($id)
    {
        $currentBlog = Blog::find($id);
        $blog = Blog::where('order_number', '<', $currentBlog->order_number)->latest()->first();
        $blog->order_number = $blog->order_number + 1;
        $blog->save();
        $currentBlog->order_number = $currentBlog->order_number - 1;
        $currentBlog->save();
        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function down($id)
    {
        $currentBlog = Blog::find($id);
        $blog = Blog::where('order_number', '>', $currentBlog->order_number)->first();
        $blog->order_number = $blog->order_number - 1;
        $blog->save();
        $currentBlog->order_number = $currentBlog->order_number + 1;
        $currentBlog->save();
        return redirect()->route('dashboard.blogs.index')->with('success', __('dashboard.updated_successfully'));
    }
}
