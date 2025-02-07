<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Http\Controllers\Controller;

class ContactMessagesController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(20);
        return view('dashboard.contact-messages.index', compact('messages'));
    }

    public function show(ContactMessage $message)
    {
        return view('dashboard.contact-messages.show', compact('message'));
    }

    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect()->back()->with('success', __('dashboard.deleted_successfully'));
    }
}
