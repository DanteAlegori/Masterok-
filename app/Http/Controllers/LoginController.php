<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index() {
        return view('login');
    }
    public function store(Request $request) {

            $this->validate($request, [
                'login' => 'required',
                'password' => 'required',
            ]);
    
            if (!Auth::attempt($request->only('login', 'password'))) {
                return back()->with('status', 'Invalid login details');
            }
    
            return redirect()->route('user');

    }
}
