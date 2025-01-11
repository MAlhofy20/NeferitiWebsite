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
        return view('dashboard.home');
    }
}
