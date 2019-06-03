<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MailImport;
use App\Exports\DownloadsExport;
use App\Exports\LoansExport;
use App\Exports\NdomainsExport;
use App\Exports\SubsExport;
use App\Exports\GrantsExport;
use App\Exports\FinansExport;

class TestController extends Controller
{
    public function index()
    {
        return Excel::download(new DownloadsExport, 'data.xlsx');
    }

    public function getdata1()
    {
        return Excel::download(new LoansExport, 'data.xlsx');
    }

    public function getdata2()
    {
        return Excel::download(new GrantsExport, 'data.xlsx');
    }

    public function getdata3()
    {
        return Excel::download(new FinansExport, 'data.xlsx');
    }

    public function getdata4()
    {
        return Excel::download(new SubsExport, 'data.xlsx');
    }

    public function getnd()
    {
        return Excel::download(new NdomainsExport, 'data.xlsx');
    }
}
