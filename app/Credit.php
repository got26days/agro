<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Credit extends Model
{
    public function temp()
    {
        return $this->belongsTo('App\Temp');
    }
}
