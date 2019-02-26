<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
use App\Team;

class DomainController extends Controller
{
    public function credit($slug)
    {
        $credit = Domain::where('slug', '=', $slug)->latest()->first();

        if(!isset($credit)){
            abort(404);
        }

        $teams = Team::get();
        // return $credit

        $seotitle = $credit['seo_title'];
        $seodescription = $credit['seo_description'];
        $seokeywords = $credit['seo_keywords'];

        return view('domain.index', compact('credit', 'seotitle', 'seokeywords', 'seodescription', 'teams'));
    }

    public function index()
    {

        $teams = Team::get();
        $seotitle = 'Агродоход';
        $seodescription = 'Помощь в получении кредитов, субсидий и грантов от компании «Агродоход»';
        $seokeywords = 'Агродоход, компания, кредиты, субсидии, гранты, получить, хозяйство, долги, партнеры, субсидии';
        

        return view('domain.main', compact('seotitle', 'seokeywords', 'seodescription', 'teams'));
    }
}
