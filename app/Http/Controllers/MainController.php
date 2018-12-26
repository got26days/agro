<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Team;
use App\About;
use Response;
use App\Caption;
use App\Direction;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        $caption = Caption::latest()->first();

        $top_directions = Direction::where('showmainpage', '=', 'true')->latest()->limit(3)->get();
        $bottom_directions = Direction::where('showmainpage', '=', 'false')->latest()->get();

        return view('pages.index', compact('caption', 'top_directions', 'bottom_directions'));
    }

    public function about()
    {
        $teams = Team::latest()->get();
        $about = About::latest()->first();

        return view('pages.about', compact('teams', 'about'));
    }

    public function direction($id)
    {   
        $direction = Direction::find($id);

        if(!isset($direction)){
            abort(404);
        }

        $seotitle = $direction['seo_title'];
        $seodescription = $direction['seo_description'];
        $seokeywords = $direction['seo_keywords'];

        return view('pages.direction', compact('direction', 'seotitle', 'seokeywords'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();

        return view('pages.faq', compact('faqs'));
    }


    public function events()
    {
        $posts = Post::where('status', '=', 'PUBLISHED')->latest()->paginate(1);

        return view('pages.events', compact('posts'));
    }

    public function event($id)
    {   
        $post = Post::find($id);

        if(!isset($post)){
            abort(404);
        }

        $seotitle = $post['seo_title'];
        $seodescription = $post['meta_description'];
        $seokeywords = $post['meta_keywords'];

        return view('pages.event', compact('post', 'seotitle', 'seokeywords'));
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/policy.pdf";

        $headers = array(
                'Content-Type: application/pdf',
                );

        return response()->file($file);
    }
}
