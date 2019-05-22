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
use App\Serv;
use Validator;
use App\Mail;
use App\Sendmail;
use App\Seo;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;
use App\Activ;
use App\Credit;

class MainController extends Controller
{

    public function form(Request $request)
    {
        $rules = array();

        if($request['title'] === "Хотите, чтобы мы ответили на ваши вопросы?") {
            $rules = array(
                'name' => 'required',
                'tel' => 'required',
            );
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            redirect()->back()->with('success', ['Ошибка, повторите снова']);   
        }

        $mail = new Mail;
        $mail->title = $request['title'];
        $mail->name = $request['name'];
        $mail->email = $request['email'];
        $mail->tel = $request['tel'];
        $mail->text = $request['text'];
        $mail->save();

        $data = array(
            'title' => $mail['title'],
            'name' => $mail['name'],
            'email' => $mail['email'],
            'tel' => $mail['tel'],
            'text' => $mail['text'],
          );
  
        $sendmails = Sendmail::where('send', '=', 'true')->latest()->get();

        if(!empty($sendmails)){
            foreach($sendmails as $sendmail){

                $sendto = $sendmail['email'];

                \Mail::send('mail.form', $data, function($message) use ($data, $sendto, $request)
                {
                    $message->from('orders@agrodohod.ru', 'Заявка с Direct.Agrodohod');
                    $message->to($sendto, $sendto)->subject('Сообщение с сайта АгроДоход. ' . $request['yandex_title']);
                });

            }
        }

        return 'true';    
    }

    public function credit($slug)
    {
        $credit = Credit::where('slug', '=', $slug)->latest()->first();

        if(!isset($credit)){
            abort(404);
        }

        $seotitle = $credit['seo_title'];
        $seodescription = $credit['seo_description'];
        $seokeywords = $credit['seo_keywords'];

        return view('pages.credit', compact('credit', 'seotitle', 'seokeywords', 'seodescription'));
    }

    public function index()
    {
        $caption = Caption::latest()->first();

        $top_directions = Direction::where('showmainpage', '=', 'option1')->latest()->limit(3)->get();
        $bottom_directions = Direction::where('showmainpage', '=', 'option2')->latest()->get();
        // $bottom_directions = Direction::where('showmainpage', '=', 'false')->latest()->get();

        $seo = Seo::where('page', '=', 'option5')->latest()->first();

        $seotitle = $seo['seo_title'];
        $seodescription = $seo['seo_description'];
        $seokeywords = $seo['seo_keywords'];

        $circl1 = Activ::where('option', '=', 'option1')->latest()->first();
        $circl2 = Activ::where('option', '=', 'option2')->latest()->first();
        $circl3 = Activ::where('option', '=', 'option3')->latest()->first();
        $circl4 = Activ::where('option', '=', 'option4')->latest()->first();
        $circl5 = Activ::where('option', '=', 'option5')->latest()->first();
        $circl6 = Activ::where('option', '=', 'option6')->latest()->first();
        $circl7 = Activ::where('option', '=', 'option7')->latest()->first();
        $circl8 = Activ::where('option', '=', 'option8')->latest()->first();
        $circl9 = Activ::where('option', '=', 'option9')->latest()->first();
        

        return view('pages.index', compact('caption', 'top_directions', 'bottom_directions', 'seotitle', 'seokeywords', 'seodescription', 
        'circl1', 'circl2', 'circl3', 'circl4',
        'circl5', 'circl6', 'circl7', 'circl8','circl9'));
    }

    public function about()
    {
        $teams = Team::get();
        $about = About::latest()->first();

        $seo = Seo::where('page', '=', 'option1')->latest()->first();

        $seotitle = $seo['seo_title'];
        $seodescription = $seo['seo_description'];
        $seokeywords = $seo['seo_keywords'];
        $page_title = $seo['page_title'];

        return view('pages.about', compact('teams', 'about', 'seotitle', 'seokeywords', 'seodescription', 'page_title'));
    }

    public function direction($slug)
    {   
        // return $slug;

        $direction = Direction::where('slug', '=', $slug)->latest()->first();

        if(!isset($direction)){
            abort(404);
        }

        $seotitle = $direction['seo_title'];
        $seodescription = $direction['seo_description'];
        $seokeywords = $direction['seo_keywords'];

        return view('pages.direction', compact('direction', 'seotitle', 'seokeywords', 'seodescription'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();

        $seo = Seo::where('page', '=', 'option2')->latest()->first();

        $seotitle = $seo['seo_title'];
        $seodescription = $seo['seo_description'];
        $seokeywords = $seo['seo_keywords'];
        $page_title = $seo['page_title'];

        return view('pages.faq', compact('faqs', 'seotitle', 'seokeywords', 'seodescription', 'page_title'));
    }


    public function events()
    {
        $posts = Post::where('status', '=', 'PUBLISHED')->latest()->paginate(5);

        $seo = Seo::where('page', '=', 'option3')->latest()->first();

        $seotitle = $seo['seo_title'];
        $seodescription = $seo['seo_description'];
        $seokeywords = $seo['seo_keywords'];
        $page_title = $seo['page_title'];

        return view('pages.events', compact('posts', 'seotitle', 'seokeywords', 'seodescription', 'page_title'));
    }

    public function event($slug)
    {   
        $post = Post::where('slug', '=', $slug)->latest()->first();

        if(!isset($post)){
            abort(404);
        }

        $seotitle = $post['seo_title'];
        $seodescription = $post['meta_description'];
        $seokeywords = $post['meta_keywords'];

        return view('pages.event', compact('post', 'seotitle', 'seokeywords', 'seodescription'));
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

    public function search(Request $request)
    {
        $q = $request['q'];

        $fulltext = new LaravelGoogleCustomSearchEngine();
        $results = $fulltext->getResults($q);

        $users = [];

        foreach($results as $result){
            $new_array = [
                'title' => $result->title,
                'link' => strstr( $result->formattedUrl, '/'),
                'snippet' => $result->snippet
            ];

            array_push($users, $new_array);
        }

        return view('pages.searchpage')->withUsers($users)->withQuery($q);

    }

    public function servs()
    {
        $servs = [];

        for ($i = 0; $i <= 15; $i++) {
            $y = $i + 1;
            $servs[$i] = Serv::where('option', '=', 'option'.$y)->latest()->first();
        }

        $seo = Seo::where('page', '=', 'option4')->latest()->first();

        $seotitle = $seo['seo_title'];
        $seodescription = $seo['seo_description'];
        $seokeywords = $seo['seo_keywords'];
        $page_title = $seo['page_title'];

        return view('pages.servs', compact('servs', 'seotitle', 'seokeywords', 'seodescription', 'page_title'));
    }
}
