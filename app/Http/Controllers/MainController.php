<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Team;
use App\About;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $teams = Team::latest()->get();
        $about = About::latest()->first();

        return view('pages.about', compact('teams', 'about'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();

        return view('pages.faq', compact('faqs'));
    }


    public function events()
    {
        return view('pages.events');
    }
}
