<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showRegisterForm()
    {
        return view('auth.register');
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
 public function register(Request $request)
{


    // Validation
    $validator = Validator::make($request->all(), [
    'fname'      => 'required|string|max:50',
    'lname'      => 'required|string|max:50',
    'email'      => 'required|email|unique:users,email',
    'password'   => 'required|min:6',
    'cpassword'  => 'required|same:password',
], [
    'fname.required'     => 'First name is required.',
    'lname.required'     => 'Last name is required.',
    'email.required'     => 'Email address is required.',
    'email.email'        => 'Enter a valid email address.',
    'email.unique'       => 'This email is already registered.',
    'password.required'  => 'Password is required.',
    'password.min'       => 'Password must be at least 6 characters.',
    'cpassword.required' => 'Confirm password is required.',
    'cpassword.same'     => 'Confirm password must match the password.',
]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Create user with default role student
    $user = User::create([
        'name'    => $request->fname." ".$request->lname,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
        'role'     => 'student', // 👈 default role
    ]);

    // Auto login
    auth()->login($user);

    return redirect()->route('login')->with('success', 'Registration successful!');
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
