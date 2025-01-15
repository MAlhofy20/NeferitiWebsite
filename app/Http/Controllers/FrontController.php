<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
}
