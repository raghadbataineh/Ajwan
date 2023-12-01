<?php

namespace App\Http\Controllers;
use App\Models\Contactus;
use Illuminate\Http\Request;

class MessagesControllerAD extends Controller
{
    public function index()
    {
        $messages = Contactus::get();
        return view('admin_dashboard.messages.index', compact('messages'));
    }

    public function destroy($id)
    {
        Contactus::destroy($id);
        return back()->with('success', 'Message deleted successfully.');
    }
}
