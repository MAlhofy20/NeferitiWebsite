<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->paginate(50);
        return view('dashboard.messages',compact('messages'));
    }

    public function delete(Request $request)
    {
        $message = Contact::find($request->id);
        $message->delete();
        return response()->json([
            'success' => true,
            'message' => __('Deleted Successfully'),
        ]);
    }
}
