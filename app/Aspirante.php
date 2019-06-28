<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $fillable = ['name','email','curp','tel1','tel2','urlcv','politicas'];
}
