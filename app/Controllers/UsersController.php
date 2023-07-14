<?php

namespace App\Controllers;

class UsersController extends BaseController
{
    public function index()
    {
        return view('Users');
        // return view(setting('Auth.views')['login']);
    }
}