<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Visit;
use App\Models\Action;
use App\Models\ContactMessage;
use App\Models\Product;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $projects = Project::take(6)->get();
        $testimonials = Testimonial::get();
        $blogs = Blog::take(7)->latest()->get();

        return view('front.home', compact('products', 'projects', 'testimonials', 'blogs'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('front.product', compact('product'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('front.projects', compact('projects'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('front.blog.index', compact('blogs'));
    }

    public function blog_show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('front.blog.show', compact('blog'));
    }

    public function action(Request $request)
    {
        $data = [
            'session_id' => $request->session()->getId(),
            'ip_address' => $request->ip(),
            'action_name' => $request->action_name,
            'url' => $request->url,
        ];
        Action::create($data);
    }

    public function store_message(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
            'url' => 'required|string|max:255',
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
            'url' => $request->url,
        ];
        ContactMessage::create($data);

        return response()->json([
            'success' => true,
            'message' => 'تم إرسال الرسالة بنجاح سيتم التواصل معكم في أقرب وقت, شكرا لكم',
        ]);
    }

}
