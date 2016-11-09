<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    protected $guard;
    //dependency injections
    protected $userprovider;

    /**
     * LoginController constructor.
     * @param $guard
     * @param $userprovider
     */
    public function __construct(Guard $guard, UserProvider $userprovider)
    {
        $this->guard = $guard;
        $this->userprovider = $userprovider;
    }

    /**
     * LoginController constructor.
     * @param $guard
     */



    public function showLoginForm()
    {
        return view('auth.login');
    }

    //DEPENDENCY INJECTION.
    public function login(Request $request)
    {
        $this->validateLogin($request);
        $credentials = $request->only('email','password');
        if($this->guard->validate($credentials)) {
            $this->guard->setUser($this->userprovider->getUserByCredentials($credentials));
            return redirect('home');
        }
        \Session::flash('errors',collect(['Login incorrecte']));
        return redirect('home');
    }

    private function validateLogin($request)
    {
        $this->validate($request, [
            'email' => 'email|required', 'password' => 'required',
        ]);
    }
}
