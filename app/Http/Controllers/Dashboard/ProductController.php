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
        $products = Product::orderBy('order_number', 'asc')->get(); 
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

        $lastProduct = Product::orderBy('order_number', 'desc')->first();
        $product = new Product();
        $product->order_number = $lastProduct ? $lastProduct->order_number + 1 : 1;

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

    public function up($id)
    {
        $currentProduct = Product::find($id);
        $product = Product::where('order_number', '<', $currentProduct->order_number)->latest()->first();
        if($product){
            $product->order_number = $product->order_number + 1;
            $product->save();
            $currentProduct->order_number = $currentProduct->order_number - 1;
            $currentProduct->save();
        }
        return redirect()->route('dashboard.products.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function down($id)
    {
        $currentProduct = Product::find($id);
        $product = Product::where('order_number', '>', $currentProduct->order_number)->first();
        if($product){
            $product->order_number = $product->order_number - 1;
            $product->save();
            $currentProduct->order_number = $currentProduct->order_number + 1;
            $currentProduct->save();
        }
        return redirect()->route('dashboard.products.index')->with('success', __('dashboard.updated_successfully'));
    }



}