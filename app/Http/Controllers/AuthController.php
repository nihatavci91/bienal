<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['login', 'logout']);
    }

    public function panelLogin(Request $request)
    {
        return view('panel.login');
    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable|in:true'
        ]);

        if (!auth()->attempt(['email' => $validated['email'], 'password' => $validated['password']], empty($validated['remember']) ? false : $validated['remember'])) {
            return redirect()->back()->withErrors(['login-olamiyorum']);
        }


        return redirect()->route('panel.about');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
