<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDashController extends Controller
{
    public function index()
    {
        $user = User::where('email', auth()->user()->email)->where('type', 'user')->first();
        if ($user && $user->expiry_date < Carbon::now()) {
            auth()->logout();
            redirect()->route('userarea.contact', ['#form-section'])->with('error', 'انتهت صلاحية هذا الحساب - يمكنك التواصل مع الدعم للتجديد او الاستفسار');
        }


        return view('dashboard.home');
    }
}
