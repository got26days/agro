<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ndomain;

class EventController extends Controller
{
    public function index($slug)
    {
        $domain = Ndomain::where('slug', '=', $slug)->latest()->first();

        if(!isset($domain)){
            abort(404);
        }

        $seotitle = $domain['seo_title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('events.event', compact('domain', 'seotitle', 'seodescription', 'seokeywords'));
    }
}
