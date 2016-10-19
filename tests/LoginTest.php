<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{

    use DatabaseMigrations;

    public function testLoginPageShowsLoginForm()
    {
        $this->visit('/login')
            ->see('Email')
            ->see('Password')
            ;
    }

}
