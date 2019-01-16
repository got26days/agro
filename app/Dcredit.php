<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dcredit extends Model
{
    public function temp()
    {
        return $this->belongsTo('App\Temp');
    }
}
