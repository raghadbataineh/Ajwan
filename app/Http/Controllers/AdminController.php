<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $admins = Admin::get();
        return view('admin_dashboard.admins.index', compact('admins'));
    }

   
    public function create()
    {
        return view('admin_dashboard.admins.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8'
        ]);

        Admin::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }

    
    public function show(Admin $admin)
    {
        //
    }

  
    public function edit(Admin $admin)
    {
        //
    }

  
    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return back()->with('success', 'Admin deleted successfully.');
    }
}
