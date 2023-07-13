<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DataPermissionsController extends BaseController
{
    public function index()
    {
        return view('DataPermission');
        // View Data Permission Table
    }
}
