<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');

    }

    public function register()
    {
        return view('register');
    }

    public function registervalidate(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);  
        return redirect('login')->withSuccess('You have signed-in');

    }

    public function create(array $data) {
        return User::create ([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])

        ]);
    }

    public function loginvalidate(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home')->with('success', 'Login Successful');
        }
        return back()->withErrors(['all' => 'The provided credentials do not match our records.']);
    }
}
