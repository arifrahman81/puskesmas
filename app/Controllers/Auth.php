<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login_faskes(): string
    {
        return view('auth/login_faskes');
    }

    public function login_pkm(): string
    {
        return view('auth/login_pkm');
    }

    public function login_dinkes(): string
    {
        return view('auth/login_dinkes');
    }

}
