<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Dependency Injection
    protected $userprovider;
    protected $guard;

    /**
     * RegisterController constructor.
     * @param $userprovider
     * @param $guard
     */
    public function __construct(UserProvider $userprovider, Guard $guard)
    {
        $this->userprovider = $userprovider;
        $this->guard = $guard;
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $user = $this->userprovider->setUser($credentials);
        $this->guard->setUser($user);
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'email' => 'email|required|max:255|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
    }
}
