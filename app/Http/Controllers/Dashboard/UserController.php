<?php

namespace App\Http\Controllers\Dashboard;

use App\Functions\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $users = User::where('type', 'user')->latest()->paginate(20);
        return view('dashboard.users', compact('users'));
    }

    public function block(Request $request)
    {
        $user = User::find($request->id);
        $user->is_blocked = true;
        $user->save();
        return response()->json([
            'success' => true,
            'message' => __('dashboard.blocked_successfully'),
        ]);
    }

    public function unblock(Request $request)
    {
        $user = User::find($request->id);
        $user->is_blocked = false;
        $user->save();
        return response()->json([
            'success' => true,
            'message' => __('dashboard.unblocked_successfully'),
        ]);
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        Upload::deleteImage($user->image);
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => __('dashboard.deleted_successfully'),
        ]);
    }

    public function update_expiry_date(Request $request)
    {
        $user = User::find($request->id);
        $user->expiry_date = $request->expiry_date;
        $user->save();

        return back()->with('success', __('dashboard.updated_successfully'));
    }
}
