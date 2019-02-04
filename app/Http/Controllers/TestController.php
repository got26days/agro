<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MailImport;
use App\Exports\DownloadsExport;

class TestController extends Controller
{
    public function index()
    {
        return Excel::download(new DownloadsExport, 'data.xlsx');
    }
}
