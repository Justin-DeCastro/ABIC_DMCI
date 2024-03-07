<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;


class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(auth()->user()), // ignore current user's email
            ],
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'The email address is already registered.',
        ]);

        // Check if the email is already registered
        $existingUser = User::where('email', $validatedData['email'])->first();
        if ($existingUser) {
            return redirect()->back()->withInput()->withErrors(['email' => 'The email address is already registered.']);
        }

        // Create a new user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect the user after registration
        return redirect()->route('signin')->with('success', 'Registration successful. Please sign in.');
    }
}
