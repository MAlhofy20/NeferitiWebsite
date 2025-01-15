<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function index(Product $product)
    {
        $product_details = $product->productDetails()->orderBy('order_number', 'asc')->get();
        return view('dashboard.products.product_details.index', compact('product', 'product_details'));
    }

    public function create(Product $product)
    {
        return view('dashboard.products.product_details.create', compact('product'));
    }

    public function store(Product $product, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $lastProductDetail = ProductDetail::orderBy('order_number', 'desc')->first();
        $product_detail = new ProductDetail();
        $product_detail->order_number = $lastProductDetail ? $lastProductDetail->order_number + 1 : 1;

        $product_detail->title = $request->title;
        $product_detail->description = $request->description;
        $product_detail->image = Upload::uploadFile($request->image, 'product_details');
        $product_detail->product_id = $product->id;
        $product_detail->save();

        return redirect()->route('dashboard.product_details.index', $product->id)->with('success', __('dashboard.created_successfully'));
    }

    public function edit(ProductDetail $product_detail)
    {
        return view('dashboard.products.product_details.edit', compact('product_detail'));
    }

    public function update(ProductDetail $product_detail, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $product_detail->title = $request->title;
        $product_detail->description = $request->description;
        if ($request->hasFile('image')) {
            Upload::deleteFile($product_detail->image);
            $product_detail->image = Upload::uploadFile($request->image, 'product_details');
        }
        $product_detail->save();

        return redirect()->route('dashboard.product_details.index', $product_detail->product_id)->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy(ProductDetail $product_detail)
    {
        Upload::deleteFile($product_detail->image);
        $product_detail->delete();
        return redirect()->route('dashboard.product_details.index', $product_detail->product_id)->with('success', __('dashboard.deleted_successfully'));
    }

    public function up($id)
    {
        $currentProductDetail = ProductDetail::find($id);
        $productDetail = ProductDetail::where('order_number', '<', $currentProductDetail->order_number)->latest()->first();
        if($productDetail){
            $productDetail->order_number = $productDetail->order_number + 1;
            $productDetail->save();
            $currentProductDetail->order_number = $currentProductDetail->order_number - 1;
            $currentProductDetail->save();
        }
        return redirect()->route('dashboard.product_details.index', $currentProductDetail->product_id)->with('success', __('dashboard.updated_successfully'));
    }

    public function down($id)
    {
        $currentProductDetail = ProductDetail::find($id);
        $productDetail = ProductDetail::where('order_number', '>', $currentProductDetail->order_number)->first();
        if($productDetail){
            $productDetail->order_number = $productDetail->order_number - 1;
            $productDetail->save();
            $currentProductDetail->order_number = $currentProductDetail->order_number + 1;
            $currentProductDetail->save();
        }
        return redirect()->route('dashboard.product_details.index', $currentProductDetail->product_id)->with('success', __('dashboard.updated_successfully'));
    }
}
