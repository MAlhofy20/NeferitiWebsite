<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('dashboard.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('dashboard.partners.create');
    }

    public function store(Request $request)
    {
        foreach ($request->images as $image) {
            $partner = new Partner();
            $partner->image = Upload::uploadFile($image, 'partners');
            $partner->save();
        }
        return redirect()->route('dashboard.partners.index')->with('success', __('dashboard.created_successfully'));
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        Upload::deleteFile($partner->image);
        $partner->delete();
        return redirect()->route('dashboard.partners.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
