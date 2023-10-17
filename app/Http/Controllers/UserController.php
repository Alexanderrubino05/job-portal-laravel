<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Create a new user
    public function createUser(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        
        //Hash password
        $formFields['password'] = bcrypt($formFields['password']); 
        
        // Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/');
    }

    //Create a new user
    public function loginUser(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/');
        }        

        //Failed to login
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
    
    //Logout user
    public function logout() {
        auth()->logout();
        return redirect('/register');
    }
}
