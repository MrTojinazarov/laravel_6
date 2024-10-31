<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('enter.login');
    }

    public function registerPage()
    {
        return view('enter.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5'
        ]);

        $user = User::create($data);
        Auth::login($user);

        return redirect()->route('universities.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('universities.index');
        }else {
            return view('enter.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
