<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Course;
use App\Models\Contactus;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login()
    {
        return view('admin_dashboard.admin_login');
    }

    public function loginAdmin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'min:8',
            ]
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            if ($request->password == $admin->password) {
                $request->session()->put('admin_id', $admin->id);
                session()->put('admin_name', $admin->name);
                return redirect('admin_dashboard/home');
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }

    public function adminLogout()
    {
        if (Session::has('admin_id')) {
            Session::pull('admin_id');
            Session::pull('admin_name');
        }
        return redirect('admin_login'); // Redirect to the login page after logout.
    }

    public function adminHome()
    {
        $categoryCount = Category::count();
        $courseCount = Course::count();
        $messagesCount = Contactus::count();
        // dd($categoryCount);

        return view('admin_dashboard.admin_home', [
            'categoryCount' => $categoryCount,
            'courseCount' => $courseCount,
            'messagesCount' => $messagesCount,
        ]);
    }
}
