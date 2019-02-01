<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class TestController extends Controller
{
    public function index()
    {
        $newex = Excel::import(new UsersImport, './public/1.xls');

        return $newex;
    }
}
