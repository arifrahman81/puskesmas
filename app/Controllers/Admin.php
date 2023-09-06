<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function admin(): string
    {
        return view('admin/admin');
    }

}