<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:8',
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
        Admin::create($request->all());
        return redirect()->route('dashboard.admin.index')->with('success', __('dashboard.created_successfully'));
    }

    public function edit(Admin $admin)
    {
        return view('dashboard.admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|min:8',
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
        $admin->update($request->all());
        return redirect()->route('dashboard.admin.index')->with('success', __('dashboard.updated_successfully'));
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('dashboard.admin.index')->with('success', __('dashboard.deleted_successfully'));
    }
}
