<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index() {
        return view('register');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'login' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'check' => 'required'
        ]);

            User::create([
                'name' => $request->name,
                'login' => $request->login,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);



        Auth::attempt($request->only('login', 'password'));

        return redirect()->route('user');



    }
}
