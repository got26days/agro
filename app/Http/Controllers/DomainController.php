<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dcredit;

class DomainController extends Controller
{
    public function credit($slug)
    {
        $credit = Dcredit::where('slug', '=', $slug)->latest()->first();

        if(!isset($credit)){
            abort(404);
        }

        $seotitle = $credit['seo_title'];
        $seodescription = $credit['seo_description'];
        $seokeywords = $credit['seo_keywords'];

        return view('domain.index', compact('credit', 'seotitle', 'seokeywords', 'seodescription'));
    }
}