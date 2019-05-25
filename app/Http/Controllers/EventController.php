<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ndomain;
use App\Partner;
use App\Team;
use Carbon\Carbon;
use App\Loan;
use App\Grant;
use App\Finan;
use App\Sub;

class EventController extends Controller
{
    public function index($slug)
    {

        $domain = Ndomain::where('slug', '=', $slug)->latest()->first();

        if(!isset($domain)){
            abort(404);
        }
        $teams = Team::get();

        $partners = Partner::latest()->get();
        

        $seotitle = $domain['seo_title'];
        $seodescription = $domain['seo_description'];
        $seokeywords = $domain['seo_keywords'];

        return view('events.event', compact('partners','teams', 'domain', 'seotitle', 'seodescription', 'seokeywords'));
    }

    public function anketa()
    {
        return view('events.anketa');
    }

    public function sendform(Request $request)
    {

        $cityes = ['Республика Дагестан', 'Республика Ингушетия','Кабардино-Балкарская Республика','Карачаево-Черкесская Республика','Республика Северная Осетия - Алания','Чеченская Республика'];

        $result = 0;
        $result2 = 0;

        // if($request['source']){
        //     // Источник
        // }

        $result = $result + $request['sendpercent'];
        $result2 = $result2 + $request['sendpoint'];

        if($request['type'] == 'Кредит'){
   

            // if($request['form1']['region'] == 'СКФО (за исключением Ставропольского Края)'){
            //     $result = $result - 15;
            //     $result2 = $result2 - 1;
            // }

            if(in_array($request['form1']['region'], $cityes)){
                $result = $result - 15;
                $result2 = $result2 - 1;
            }


            if($request['form1']['orgform'] == 'Физлицо'){

                if($request['form1']['summ'] <= 1500000){
                    // $result = $result - 15;
                    
                    $result2 = $result2 + 1;
                }

                if(($request['form1']['summ'] >= 1500001) and ($request['form1']['summ'] <= 5000000)){
                    $result = $result - 5;
                }

                if(($request['form1']['summ'] >= 5000001) and ($request['form1']['summ'] <= 10000000)){
                    $result = $result - 10;
                }

                if(($request['form1']['summ'] >= 10000001) and ($request['form1']['summ'] <= 20000000)){
                    $result = $result - 15;
                }

                
                if(($request['form1']['summ'] >= 20000001)){
                    $result = $result - 20;
                }
            }

            if($request['form1']['orgform'] == 'ИП'){
                if($request['form1']['summ'] <= 1500000){
                    // $result = $result - 15;
                    $result2 = $result2 + 1;
                }

                if(($request['form1']['summ'] >= 1500001) and ($request['form1']['summ'] <= 5000000)){
                    $result2 = $result2 + 2;
                }
                if(($request['form1']['summ'] >= 5000001) and ($request['form1']['summ'] <= 10000000)){
                    $result = $result - 10;
                    $result2 = $result2 + 1;
                }
                if(($request['form1']['summ'] >= 10000001) and ($request['form1']['summ'] <= 20000000)){
                    $result = $result - 15;
                }
                if(($request['form1']['summ'] >= 20000001)){
                    $result = $result - 20;
                }
            }


            if($request['form1']['orgform'] == 'ООО'){
                if($request['form1']['summ'] <= 1500000){
                    $result = $result + 20;
                    $result2 = $result2 + 1;
                }

                if(($request['form1']['summ'] >= 1500001) and ($request['form1']['summ'] <= 5000000)){
                    $result = $result + 15;
                    $result2 = $result2 + 2;
                }
                if(($request['form1']['summ'] >= 5000001) and ($request['form1']['summ'] <= 10000000)){
                    $result = $result + 5;
                    $result2 = $result2 + 3;
                }
                if(($request['form1']['summ'] >= 10000001) and ($request['form1']['summ'] <= 20000000)){
                    // $result = $result - 15;
                    $result2 = $result2 + 4;
                }
                if(($request['form1']['summ'] >= 20000001)){
                    $result = $result - 5;
                    $result2 = $result2 + 5;
                }
            }

            if($request['form1']['orgform'] == 'Кооператив'){
                if($request['form1']['summ'] <= 1500000){
                    $result = $result + 20;
                    $result2 = $result2 + 1;
                }

                if(($request['form1']['summ'] >= 1500001) and ($request['form1']['summ'] <= 5000000)){
                    $result = $result + 15;
                    $result2 = $result2 + 2;
                }
                if(($request['form1']['summ'] >= 5000001) and ($request['form1']['summ'] <= 10000000)){
                    $result = $result + 5;
                    $result2 = $result2 + 3;
                }
                if(($request['form1']['summ'] >= 10000001) and ($request['form1']['summ'] <= 20000000)){
                    // $result = $result - 15;
                    $result2 = $result2 + 4;
                }
                if(($request['form1']['summ'] >= 20000001)){
                    $result = $result - 5;
                    $result2 = $result2 + 5;
                }
            }

            if($request['form1']['orgform'] == 'Холдинг'){
                if($request['form1']['summ'] <= 1500000){
                    $result = $result + 20;
                    $result2 = $result2 + 1;
                }
                if(($request['form1']['summ'] >= 1500001) and ($request['form1']['summ'] <= 5000000)){
                    $result = $result + 15;
                    $result2 = $result2 + 2;
                }
                if(($request['form1']['summ'] >= 5000001) and ($request['form1']['summ'] <= 10000000)){
                    $result = $result + 5;
                    $result2 = $result2 + 3;
                }
                if(($request['form1']['summ'] >= 10000001) and ($request['form1']['summ'] <= 20000000)){
                    // $result = $result - 15;
                    $result2 = $result2 + 4;
                }
                if(($request['form1']['summ'] >= 20000001)){
                    // $result = $result - 5;
                    $result2 = $result2 + 5;
                }
            }
            if($request['form1']['dateur']) {
                $fdate = $request['form1']['dateur'];

                $fdate = Carbon::createFromFormat('Y-m-d', $fdate);
                $diff = Carbon::now()->diffInYears($fdate);
         
                if($diff < 1) {
                    $result = $result - 15;
                    $result2 = $result2 -1;
                }

                if(($diff > 1) and ($dif < 3)) {
                    // $result = $result - 15;
                }
                
                if($diff >= 3) {
                    $result = $result + 10;
                    $result2 = $result2 + 1;
                }
            }

            if($request['form1']['yearbalance'] == "Положительный баланс") {
                $result = $result + 20;
                $result2 = $result2 + 2;
            }

            if($request['form1']['yearbalance'] == "Отрицательный баланс") {
                $result = $result - 120;
                $result2 = $result2 - 5;
            }

            if($request['form1']['yearbalance'] == "Нулевой баланс") {
                // $result = $result - 0;
            }

            if($request['form1']['history'] == "Чистая кредитная история") {
                $result = $result + 5;
            }
            if($request['form1']['history'] == "Хорошая кредитная история") {
                $result = $result + 30;
                $result2 = $result2 + 3;
            }
            if($request['form1']['history'] == "Плохая кредитная история") {
                $result = $result - 120;
                $result2 = $result2 - 5;
            }

            if($request['form1']['credit'] == "Недвижимость") {
                $result = $result + 50;
                $result2 = $result2 + 3;
            }

            if($request['form1']['credit'] == "Техника") {
                $result = $result + 30;
                $result2 = $result2 + 1;
            }

            if($request['form1']['credit'] == "Поголовье") {
                $result = $result + 15;
            }

            if($request['form1']['credit'] == "Оборудование") {
                $result = $result + 30;
                $result2 = $result2 + 1;
            }

            if($request['form1']['credit'] == "Ничего из перечисленного") {
                $result = $result - 30;
                $result2 = $result2 - 3;
            }

            if($request['form1']['target'] == "Другое") {
                // $result = $result - 30;
            } else {
                $result = $result + 5;
            }

            if($request['form1']['moment'] == "Есть  расчёт") {
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form1']['moment'] == "Хочу получить расчёт") {
                $result2 = $result2 + 1;
            }

            
            if($request['form1']['payment'] == "Есть  расчёт") {
                $result = $result + 5;
                $result2 = $result2 + 1;
            }
        
            if($request['form1']['moment'] == "Хочу получить расчёт") {
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form1']['accounting'] == "Штатный сотрудник") {
                $result = $result + 5;
            }

            if($request['form1']['accounting'] == "Профильное в СХ агентство") {
                $result = $result + 10;
            }

            if($request['form1']['accounting'] == "Непрофильное в с СХ агентство") {
                // $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form1']['accounting'] == "Своими силами") {
                $result = $result - 5;
            }

            
        }
        
        if($request['type'] == 'Грант'){

            if(in_array($request['form1']['region'], $cityes)){
                $result = $result + 40;
                $result2 = $result2 - 1;
            } else{
                if($request['form2']['region'] == 'Ставропольский край'){
                    $result = $result + 60;
                } else {
                    $result = $result + 60;
                }
            }

            // if($request['form2']['region'] == 'Все ригионы РФ кроме СКФО'){
            //     $result = $result + 60;
            // }

            // if($request['form2']['region'] == 'СКФО (за исключением Ставропольского Края)'){
            //     $result = $result + 40;
            //     $result2 = $result2 - 1;
            // }

            // if($request['form2']['region'] == 'Ставропольский край'){
            //     $result = $result + 60;
            // }


            
            if($request['form2']['status'] == 'Глава кооператива'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form2']['have'] == 'Да'){
                $result = $result + 20;
                $result2 = $result2 + 1;
            }

            if($request['form2']['target'] != 'Другое'){
                $result = $result + 5;
            }

            if($request['form2']['chlen'] == 'Да'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form2']['chlen'] == 'Являюсь председателем'){
                $result = $result + 15;
                $result2 = $result2 + 2;
            }

            if($request['form2']['term'] == 'Есть'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form2']['term'] == 'Хочу получить'){
                $result2 = $result2 + 2;
            }

            if($request['form2']['raschet'] == 'Есть'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form2']['raschet'] == 'Хочу получить'){
                $result2 = $result2 + 2;
            }
        }

        if($request['type'] == 'Субсидия'){


            if(in_array($request['form1']['region'], $cityes)){
                $result = $result + 10;
                $result2 = $result2 -1;
            } else{
                if($request['form2']['region'] == 'Ставропольский край'){
                    $result = $result + 30;
                } else {
                    $result = $result + 30;
                }
            }


            if($request['form4']['form'] == 'Глава кооператива'){
                $result = $result + 5;
            }

            if($request['form4']['buhgalrer'] == 'Штатный сотрудник'){
                $result = $result + 5;
            }

            if($request['form4']['buhgalrer'] == 'Профильное в СХ агентство'){
                $result = $result + 10;
            }
            
            if($request['form4']['buhgalrer'] == 'Непрофильное в с СХ агентство'){
                // $result = $result + 0;
                $result2 = $result2 + 1;
            }

            if($request['form4']['buhgalrer'] == 'Своими силами'){
                $result = $result - 5;
                $result2 = $result2 + 1;
            }

            if($request['form4']['geter'] == 'Получал'){
                $result = $result + 15;
                $result2 = $result2 + 2;
            }
            
            // if($request['form4']['summ'] >= 5000000){
            //     $result = $result + 15;
            // }

            if($request['form4']['answer'] == 'Есть'){
                $result = $result + 15;
                $result2 = $result2 + 1;
            }

            if($request['form4']['answer'] == 'Нет'){
                $result = $result - 30;
                $result2 = $result2 - 1;
            }

            if($request['form4']['dolg'] == 'Есть'){
                $result = $result + 15;
                $result2 = $result2 - 1;
            }

            if($request['form4']['dolg'] == 'Нет'){
                $result = $result - 30;
                $result2 = $result2 + 1;
            }

            if($request['form4']['proc'] == 'Есть'){
                $result = $result - 100;
                $result2 = $result2 - 5;
            }

            if($request['form4']['proc'] == 'Нет'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

        }

        if($request['type'] == 'Проектное финансирование'){


            if(($request['form3']['summ'] >= 35000000) and ($request['form3']['summ'] <= 100000000)){
                $result2 = $result2 + 1;
            }
            if(($request['form3']['summ'] > 10000000) and ($request['form3']['summ'] <= 300000000)){
                $result2 = $result2 + 2;
            }

            if(($request['form3']['summ'] > 30000000) and ($request['form3']['summ'] <= 800000000)){
                $result2 = $result2 + 3;
            }

            if(($request['form3']['summ'] > 80000000) and ($request['form3']['summ'] <= 1500000000)){
                $result2 = $result2 + 4;
            }

            if(($request['form3']['summ'] > 1500000000)){
                $result2 = $result2 + 5;
            }


            if($request['form3']['studia'] == 'Есть бизнес план'){
                $result = $result + 25;
                $result2 = $result2 + 1;
            }

            if($request['form3']['studia'] == 'Составьте мне бизнес-план'){
                $result = $result + 5;
                $result2 = $result2 + 2;
            }

            if($request['form3']['studia'] == 'В процессе реализации'){
                $result = $result + 35;
                $result2 = $result2 + 2;
            }

            if($request['form3']['balance'] == 'Положительный баланс'){
                $result = $result + 50;
                $result2 = $result2 + 2;
            }

            if($request['form3']['balance'] == 'Отрицательный баланс'){
                $result = $result - 120;
                $result2 = $result2 - 5;
            }
            if($request['form3']['balance'] == 'Необходим аудит'){
                $result2 = $result2 + 2;
            }

            if($request['form3']['history'] == 'Чистая кредитная история'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form3']['history'] == 'Хорошая кредитная история'){
                $result = $result + 30;
                $result2 = $result2 + 5;
            }

            if($request['form3']['history'] == 'Плохая кредитная история'){
                $result = $result - 100;
                $result2 = $result2 - 10;
            }

            if(in_array($request['form1']['region'], $cityes)){
                $result = $result + 10;
                $result2 = $result2 - 2;
            } else{
                if($request['form2']['region'] == 'Ставропольский край'){
                    $result = $result + 30;
                } else {
                    $result = $result + 30;
                }
            }

            if($request['form3']['finance'] == 'Есть'){
                $result = $result + 5;
                $result2 = $result2 + 1;
            }

            if($request['form3']['finance'] == 'Нет'){
                $result = $result - 15;
            }

            if($request['form3']['finance'] == 'Составьте мне'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

            if($request['form3']['zalog'] == 'Недвижимость'){
                $result = $result + 20;
                $result2 = $result2 + 2;
            }

            if($request['form3']['zalog'] == 'Техника'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

            if($request['form3']['zalog'] == 'Оборудование'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

            if($request['form3']['zalog'] == 'Ничего из перечисленного'){
                $result = $result - 20;
                $result2 = $result2 - 2;
            }

            if($request['form3']['present'] == 'Есть, готов презентовать'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

            if($request['form3']['present'] == 'Нет'){
                $result = $result - 10;
                $result2 = $result2 - 1;
            }

            if($request['form3']['sredstva'] == '10%'){
                $result = $result + 10;
                $result2 = $result2 + 1;
            }

            if($request['form3']['sredstva'] == '20%'){
                $result = $result + 20;
                $result2 = $result2 + 2;
            }

            if($request['form3']['sredstva'] == '30%'){
                $result = $result + 30;
                $result2 = $result2 + 3;
            }

        }


        if ($result <= 20) {
            $result = 20;
        }

        if ($result >= 95) {
            $result = 90;
        }

        if ($result2 <= 0) {
            $result2 = 0;
        }

        if ($result2 >= 10) {
            $result2 = 10;
        }

        if($request['type'] == 'Кредит'){

            $loan = new Loan;
            $loan->rating = $result2;
            $loan->chance = $result;
            $loan->source = $request['source'];
            $loan->name = $request['form1']['name'];
            $loan->phone = $request['form1']['phone'];
            $loan->email = $request['form1']['email'];
            $loan->region = $request['form1']['region'];
            $loan->summ = $request['form1']['summ'];
            $loan->needprice = $request['form1']['needprice'];
            $loan->orgform = $request['form1']['orgform'];
            $loan->dateur = $request['form1']['dateur'];
            $loan->yearbalance = $request['form1']['yearbalance'];
            $loan->history = $request['form1']['history'];
            $loan->credit = $request['form1']['credit'];
            $loan->term = $request['form1']['term'];
            $loan->target = $request['form1']['target'];
            $loan->moment = $request['form1']['moment'];
            $loan->payment = $request['form1']['payment'];
            $loan->accounting = $request['form1']['accounting'];
            $loan->save();
        }

        if($request['type'] == 'Грант'){
            $grant = new Grant;
            $grant->rating = $result2;
            $grant->chance = $result;
            $grant->source = $request['source'];

            $grant->name = $request['form2']['name'];
            $grant->phone = $request['form2']['phone:'];
            $grant->email = $request['form2']['email'];
            $grant->position = $request['form2']['position'];
            $grant->region = $request['form2']['region'];
            $grant->status = $request['form2']['status'];
            $grant->summ = $request['form2']['summ'];
            $grant->have = $request['form2']['have'];
            $grant->target = $request['form2']['target'];
            $grant->type = $request['form2']['type'];
            $grant->chlen = $request['form2']['chlen'];
            $grant->term = $request['form2']['term'];
            $grant->raschet = $request['form2']['raschet'];

            $grant->save();
        }

        if($request['type'] == 'Проектное финансирование'){
            $finan = new Finan;
            $finan->rating = $result2;
            $finan->chance = $result;
            $finan->source = $request['source'];

            $finan->name = $request['form3']['name'];
            $finan->phone = $request['form3']['phone'];
            $finan->email = $request['form3']['email'];
            $finan->position = $request['form3']['position'];
            $finan->form = $request['form3']['form'];
            $finan->summ = $request['form3']['summ'];
            $finan->studia = $request['form3']['studia'];
            $finan->balance = $request['form3']['balance'];
            $finan->history = $request['form3']['history'];
            $finan->region = $request['form3']['region'];
            $finan->srok = $request['form3']['srok'];
            $finan->finance = $request['form3']['finance'];
            $finan->secondsrok = $request['form3']['secondsrok'];
            $finan->present = $request['form3']['present'];
            $finan->sredstva = $request['form3']['sredstva'];
            $finan->save();
        }

        if($request['type'] == 'Субсидия'){
            $sub = new Sub;
            $sub->rating = $result2;
            $sub->chance = $result;
            $sub->source = $request['source'];

            $sub->name = $request['form4']['name'];
            $sub->phone = $request['form4']['phone'];
            $sub->email = $request['form4']['email'];
            $sub->position = $request['form4']['position'];
            $sub->region = $request['form4']['region'];
            $sub->form = $request['form4']['form'];
            $sub->type = $request['form4']['type'];
            $sub->buhgalrer = $request['form4']['buhgalrer'];
            $sub->geter = $request['form4']['geter'];
            $sub->summ = $request['form4']['summ'];
            $sub->need = $request['form4']['need'];
            $sub->answer = $request['form4']['answer'];
            $sub->dolg = $request['form4']['dolg'];
            $sub->proc = $request['form4']['proc'];
            $sub->save();
        }



        return $result;

    }
}
