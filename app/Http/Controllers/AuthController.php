<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function loginUser(Request $request)
    {
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6'
        ])->validate();
        $user = User::where('email', $request->email)->first();

        if ($user->status == 'active') {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('dashboard')->with('success', 'Welcome Back');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    function requestToJoin(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone|min:10',
            'name' => 'required|string|min:3',
            'password' => 'required|string|min:6',
        ])->validate();

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back()->withErrors([
            'success' => 'Your request to join ' . env('APP_NAME') . ' has been Sent, <br/> An Email will be sent to you when your request has been reviewed.',
        ])->onlyInput('success');
    }

    
}
