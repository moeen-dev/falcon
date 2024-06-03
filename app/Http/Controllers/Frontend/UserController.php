<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->back()->with('error', 'Already Login!');
        }

        return view('frontend.auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->is_admin == 0) {
                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
                    return redirect()->route('user.profile');
                } else {
                    return redirect()->route('user.login')->with('error', 'Invalid credentials');
                }
            } else {
                return redirect()->route('user.login')->with('error', 'You have no permission to login');
            }
        } else {
            return redirect()->route('user.login')->with('error', 'User not found');
        }
    }


    public function showRegisterForm()
    {
        return view('frontend.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'country_code' => 'required',
            'phone_number' => 'required|string|max:9',
            'shipping_address' => 'required|string|max:150',
            'billing_address' => 'required|string|max:150',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country_code = $request->country_code;
        $user->phone_number = $request->phone_number;
        $user->billing_address = $request->billing_address;
        $user->shipping_address = $request->shipping_address;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('user.profile');

    }


    public function showForgotForm()
    {
        return view('frontend.auth.reset-password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('user.login');
    }
}
