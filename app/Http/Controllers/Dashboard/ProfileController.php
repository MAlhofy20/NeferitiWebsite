<?php

namespace App\Http\Controllers\Dashboard;

use App\Functions\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'nullable|min_digits:8|confirmed',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $user->image = Upload::UploadFile($request->image, 'users');
        }
        $user->save();
        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }


}
