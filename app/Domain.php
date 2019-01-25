<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    public function temp()
    {
        return $this->belongsTo('App\Temp');
    }
}
