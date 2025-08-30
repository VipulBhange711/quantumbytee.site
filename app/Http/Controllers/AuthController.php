<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     */
   public function login(Request $request)
{
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required|min:6',
        'role'     => 'required', // validate role too
    ]);

    $credentials = $request->only('email', 'password');
    $credentials['role'] = $request->role; // add role in attempt

    // Attempt login with email, password, AND role
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Redirect by role
        switch ($user->role) {
            case 'student':
                return redirect()->route('student.dashboard');
            case 'teacher':
                return redirect()->route('teacher.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'superadmin':
                return redirect()->route('superadmin.dashboard');
            default:
                Auth::logout();
                return redirect()->route('login')
                    ->withErrors(['role' => 'Unauthorized role']);
        }
    }

    // If login fails
    return back()->withErrors([
        'email' => 'Invalid credentials or role mismatch.',
    ])->withInput();
}


    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
