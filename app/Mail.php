<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mail extends Model
{
    protected $fillable = array('title', 'name', 'email', 'tel', 'text');
}
