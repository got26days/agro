<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;

class DomainController extends Controller
{
    public function credit($slug)
    {
        $credit = Domain::where('slug', '=', $slug)->latest()->first();

        if(!isset($credit)){
            abort(404);
        }

        // return $credit

        $seotitle = $credit['seo_title'];
        $seodescription = $credit['seo_description'];
        $seokeywords = $credit['seo_keywords'];

        return view('domain.index', compact('credit', 'seotitle', 'seokeywords', 'seodescription'));
    }

    public function index()
    {
        return view('domain.main');
    }
}
