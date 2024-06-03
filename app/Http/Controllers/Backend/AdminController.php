<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginForm()
    {
        if (Auth::check()) {
            return redirect()->back()->with('error', 'Already Login!');
        }

        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->is_admin == 1) {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('admin.login')->with('error', 'Invalid credentials');
                }
            } else {
                return redirect()->route('admin.login')->with('error', 'You have no permission to login');
            }
        } else {
            return redirect()->route('admin.login')->with('error', 'User not found');
        }
    }

    public function adminLogout()
    {
        Auth::logout();
        
        return redirect()->route('admin.login');
    }
}
