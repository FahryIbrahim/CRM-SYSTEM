<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate
        $fields = $request->validate([
            "email"=> "required|email|max:255",
            "password"=> "required|min:6",
        ]);

        // Try to login the user
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->route('dashboard');
        } else{
            return back()->withErrors(['failed' => 'The provided credentials do not match our records.']);
        }
    }

    public function logout(Request $request)
    {
        // Logout the user
        Auth::logout();

        // Invalidate users session
        $request->session()->invalidate();

        // Regenerate CSRF token
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect()->route('login');
    }
}
