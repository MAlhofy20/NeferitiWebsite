<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Visit;
use App\Models\Action;
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

        return view('front.home', compact('products', 'projects', 'testimonials'));
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

}
