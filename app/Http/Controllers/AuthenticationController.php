<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/login')->withErrors(['error' => 'Invalid credentials']);
        }
    }

    function register(Request $request)
    {
        $credentials = $request->validate([
            'student_id' => 'required|unique:users,student_id', 
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed',
        ]);

        $user = User::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
