<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login () 
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function loginPost (Request $request) 
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            Auth::login($user);
            if ($user->role == 'admin') {
                return redirect()->route('dashboard')->with('login', 'success');
            } else {
                return redirect()->route('peserta')->with('login', 'success');
            }
        }

        return redirect()->back()->with('login', 'error');
    }
    public function logout () 
    {
        auth()->logout();

        return redirect('/');
    }
    
}
