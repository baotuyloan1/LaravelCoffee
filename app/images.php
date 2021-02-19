<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    
    protected $table = "images";
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo('App\Product','productId','id');
    }
    
}
