<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;

class AssetController extends BaseController
{
    public function index()
    {
        //
        $db = db_connect();
    $builder = $db->table('customers')->select('customerNumber, customerName, phone, city, country, postalCode');

    return DataTable::of($builder)->toJson();
    }
}
