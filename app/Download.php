<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Download extends Model
{
    protected $fillable = array('temp_id', 'title', 'slug', 'seo_title1', 'seo_title2');
    
}
