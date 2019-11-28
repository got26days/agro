<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ndomain;
use App\Partner;
use App\Team;
use Carbon\Carbon;
use App\Pr;
use App\Buh;

class DronController extends Controller
{
    public function index()
    {
        $domain = Buh::latest()->first();
        $teams = Team::get();

        $domain->title='Помощь в получении грантов и субсидий';

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vice.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }

    public function indextwo()
    {
        $domain = Pr::latest()->first();
        $teams = Team::get();

        $domain->title='Помощь в получении кредитов и проектного финансирования';

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vicetwo.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }

    public function credit($slug)
    {

        $domain = Buh::where('slug', '=', $slug)->latest()->first();

        if(!isset($domain)){
            abort(404);
        }
        $teams = Team::get();

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vice.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }


    public function credittwo($slug)
    {

        $domain = Pr::where('slug', '=', $slug)->latest()->first();

        if(!isset($domain)){
            abort(404);
        }
        $teams = Team::get();

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vicetwo.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }
}
