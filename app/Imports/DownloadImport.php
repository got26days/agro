<?php

namespace App\Imports;

use App\Download;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use App\Temp;
use App\Domain;


class DownloadImport implements ToModel, WithHeadingRow, WithCalculatedFormulas
{


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
    
        $temp = new Temp;
        $temp->body = $row['tekst_osnovnoy'];
        $temp->image = $row['kartinka_osnovnaya'];
        $temp->image1 = $row['kartinka_preimushchestva_1'];
        $temp->title1 = $row['zagolovok_preimushchestva_1'];
        $temp->body1 = $row['tekst_preimushchestva_1'];
        $temp->image2 = $row['kartinka_preimushchestva_2'];
        $temp->title2 = $row['zagolovok_preimushchestva_2'];
        $temp->body2 = $row['tekst_preimushchestva_2'];
        $temp->image3 = $row['kartinka_preimushchestva_3'];
        $temp->title3 = $row['zagolovok_preimushchestva_3'];
        $temp->body3 = $row['tekst_preimushchestva_3'];
        $temp->title = $row['zagolovok_osnovnoy'];
        // $temp->seo_title = $row['seo_title'];
        // $temp->seo_description = $row['seo_title1'];
        // $temp->seo_keywords  = $row['seo_title1'];
        $temp->save();

        $newpage = new Domain;
        $newpage->temp_id = $temp['id'];
        $newpage->title = $row['zagolovok_osnovnoy'];
        $newpage->slug = str_slug($row['zagolovok_osnovnoy'], '-');
        $newpage->seo_title = $row['zagolovok_osnovnoy'];
        // $newpage->seo_description = $data['seo_description'];
        // $newpage->seo_keywords = $data['seo_keywords'];
        $newpage->save();
       

       $download = new Download;
       $download->seo_title1 = $row['zagolovok_seo_1'];
       $download->seo_title2 = $row['zagolovok_seo_2'];
       $download->seo_text = $row['tekst_seo'];
       $download->seo_main1 = $row['zagolovok_1'];
       $download->seo_main2 = $row['zagolovok_2'];
       $download->area = $row['tekst'];
       $download->link = $row['otobrazhaemaya_ssylka'];
       $download->save();

    //    dd($download);

        return $download;
    }
}
