<?php

/**
 * 
 * TODO:
 * -Add telephone validation
 */

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show register form
    public function create()
    {
        return view('users.register');
    }

    //Create new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'full_name' => ['required', 'min:3'],
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'telephone' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //Hash password 
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login with user
        auth()->login($user);

        return redirect('/')->with('success', 'User created and logged in');
    }

    //Logout user
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out!');
    }

    //Show login form
    public function login()
    {
        return view('users.login');
    }

    //Authenticate user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Your are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    public function manage()
    {
        return view('users.manage', [
            'user' => auth()->user(),
            'items' => auth()->user()->items()->get() //TODO: add all user created items here
        ]);
    }
}
