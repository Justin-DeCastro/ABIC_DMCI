<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SigninController extends Controller
{
    public function showSigninForm()
    {
        // Session::flush();
        return view('auth.signin');
    }

    public function signin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect()->intended('/dashboard');
    }

    // Authentication failed
    $errorMessage = 'Invalid credentials';
    return view('auth.signin', compact('errorMessage'));
}


    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush(); // Flush all session data
        return redirect()->route('landing-page'); // Redirect to homepage after logout
    }

    public function flushSession()
    {
        session()->flush();
        return redirect()->back(); // Redirect back to the same page or wherever you want
    }
}
