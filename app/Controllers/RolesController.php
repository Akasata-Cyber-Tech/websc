<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RolesController extends BaseController
{
    public function index()
    {
        return view('RolesView');
        // View Roles Data
    }
}
