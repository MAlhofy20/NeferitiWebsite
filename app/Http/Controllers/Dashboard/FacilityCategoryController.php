<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\FacilityCategory;
use App\Http\Controllers\Controller;

class FacilityCategoryController extends Controller
{
    public function index()
    {
        $categories = FacilityCategory::all();
        return view('dashboard.facility_category', compact('categories'));
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name_ar' => 'required',
            'id' => 'required',
        ]);
        $category = FacilityCategory::find($data['id']);
        $category->update($data);
        return response()->json([
            'success' => true,
            'message' => __('dashboard.updated_successfully'),
            'name_ar' => $category->name_ar,
            'name_en' => $category->name_en
        ]);
    }

}
