<?php

namespace App\Http\Controllers\Dashboard;

use App\Functions\Upload;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = cleanSlug($request->name);
        $product->description = $request->description;
        $product->image = Upload::UploadFile($request->image, 'products');
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->save();


        return redirect()->route('dashboard.products.index')
        ->with('success', __('dashboard.created_successfully'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = cleanSlug($request->name);
        $product->description = $request->description;
        if($request->hasFile('image')){
            Upload::DeleteFile($product->image);
            $product->image = Upload::UploadFile($request->image, 'products');
        }
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->save();
        return redirect()->route('dashboard.products.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        Upload::DeleteFile($product->image);
        $product->delete();
        return redirect()->route('dashboard.products.index')->with('success', __('dashboard.deleted_successfully'));
    }


}