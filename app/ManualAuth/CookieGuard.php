<?php

/**
 * Created by PhpStorm.
 * User: manel
 * Date: 25/10/16
 * Time: 20:08
 */

namespace App\ManualAuth;

class CookieGuard implements Guard
{
    protected $provider;

    /**
     * ManualGuard constructor.
     */
    public function __construct()
    {
    }

    public function check(){

        return isset($_COOKIE['user']) ? true : false ;

    }

    public function validate(array $credentials)
    {
        return $this->provider->validate($credentials);
        //return true;
    }
    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }


}