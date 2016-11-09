<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userprovider;

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $this->userprovider->createUser($credentials);
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
            'nom'=> 'required', 'email' => 'email|required', 'password' => 'required|confirmed',
        ]);
    }
}
