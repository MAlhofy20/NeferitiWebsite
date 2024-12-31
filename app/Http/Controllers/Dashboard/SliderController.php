<?php

namespace App\Http\Controllers\Dashboard;

use App\Functions\Upload;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $slider_images = SliderImage::get();
        return view('dashboard.slider.index', compact('slider_images'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
            'type' => 'required|in:journal,partner,channel',
        ]);

        $slider = new SliderImage();
        $slider->type = $request->type;
        $slider->image = Upload::UploadFile($request->image, 'slider');
        $slider->save();

        return back()->with('success', __('dashboard.added_successfully'));
    }

    public function delete(Request $request)
    {
        $slider = SliderImage::find($request->id);
        Upload::deleteImage($slider->image);
        $slider->delete();

        return response()->json([
            'success' => true,
            'message' => __('dashboard.deleted_successfully'),
        ]);
    }
}
