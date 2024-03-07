<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\SigninController;

use App\Models\User;

class SigninController extends Controller
{
    public function showSigninForm()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user(); // Retrieve the authenticated user

            if ($user->isAdmin()) {
                // If the user is an admin, redirect to the admin section
                return redirect()->intended('/admin');
            }

            // If the user is not an admin, redirect to the home page or any other appropriate page
            return redirect()->intended('/home');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
