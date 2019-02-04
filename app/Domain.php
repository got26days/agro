<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    public function temp()
    {
        return $this->belongsTo('App\Temp');
    }

    protected $fillable = array('seo_title1', 'seo_title2', 'seo_text', 'seo_main1', 'seo_main2', 'area', 'link');
}
