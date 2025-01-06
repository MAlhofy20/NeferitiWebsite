<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthDashController extends Controller
{

    public function login_page()
    {
        return view('dashboard.auth.login');
    }

    public function login_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            dd('in');
            return redirect()->route('dashboard.home')->with('success', 'تم تسجيل الدخول بنجاح');
        } else {
            return redirect()->back()->with('error', 'البريد الالكتروني او كلمة المرور غير صحيحة');
        }
    }




}
