<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::whereIn('type', ['contact', 'social_media', 'select'])->get();

        return view('dashboard.setting', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::whereIn('type', ['contact', 'social_media', 'select'])->get();

        foreach ($settings as $setting) {
            $req_key = $setting->key;
            $setting->value = $request[$req_key] ?? '';
            $setting->save();
        }

        return back()->with('success', __('dashboard.updated_successfully'));

    }
}
