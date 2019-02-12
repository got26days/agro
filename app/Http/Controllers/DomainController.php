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
        $seotitle = 'Агродоход';
        $seodescription = 'Помощь в получении кредитов, субсидий и грантов от компании «Агродоход»';
        $seokeywords = 'Агродоход, компания, кредиты, субсидии, гранты, получить, хозяйство, долги, партнеры, субсидии';
        

        return view('domain.main', compact('seotitle', 'seokeywords', 'seodescription'));
    }
}
