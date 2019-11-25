<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ndomain;
use App\Partner;
use App\Team;
use Carbon\Carbon;

class DronController extends Controller
{
    public function index()
    {
        $domain = Ndomain::where('slug', '=', 'pomosh-v-poluchenii-kreditov-subsidij-i-grantov-ot-kompanii-agrodohod')->latest()->first();
        $teams = Team::get();

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vice.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }

    public function indextwo()
    {
        $domain = Ndomain::where('slug', '=', 'pomosh-v-poluchenii-kreditov-subsidij-i-grantov-ot-kompanii-agrodohod')->latest()->first();
        $teams = Team::get();

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('vicetwo.index', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }

    public function credit($slug)
    {

        $domain = Ndomain::where('slug', '=', $slug)->latest()->first();

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

        $domain = Ndomain::where('slug', '=', $slug)->latest()->first();

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
