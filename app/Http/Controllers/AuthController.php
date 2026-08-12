<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 'manager';
        User::create($validated);
        return redirect()->route('auth.login')->with('message', 'Register successfully!');
    }

    public function loginForm(){
        return view('auth.login');
    }
}
