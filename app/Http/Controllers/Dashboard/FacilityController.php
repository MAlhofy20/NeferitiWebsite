<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::when(request('type'), function ($query) {
            $query->where('type', request('type'));
        })
        ->get();
        return view('dashboard.facility', compact('facilities'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'id' => 'required',
        ]);
        $facility = Facility::find($data['id']);
        $facility->update($data);
        return response()->json([
            'success' => true,
            'message' => __('dashboard.updated_successfully'),
            'name_ar' => $facility->name_ar,
            'name_en' => $facility->name_en
        ]);
    }
}
