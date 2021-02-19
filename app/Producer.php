<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{

    public $timestamps = false;
    protected $table ="producer";

    public function product()
    {
        return $this->hasMany('App\Product','producerId','id') ;
    }
}
