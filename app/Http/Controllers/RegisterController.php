<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class RegisterController extends Controller
{
    public function index() {
        return view('login.register', [
            'title' => 'Register Form'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|min:3|max:15|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        User::create($validatedData);

        return redirect('/login')->with('message', ' Regristasi akun berhasil!');
    }
}
