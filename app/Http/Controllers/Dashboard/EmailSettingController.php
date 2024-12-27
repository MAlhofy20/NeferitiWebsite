<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function index()
    {
        $settings = Setting::where('type', 'email_setting')->get();
        return view('dashboard.email_settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::where('type', 'email_setting')->get();
        foreach ($settings as $setting) {
            $setting->value = $request->input($setting->key);
            $setting->save();
        }
        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }
}
