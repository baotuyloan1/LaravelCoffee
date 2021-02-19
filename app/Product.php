<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="product";
    public $timestamps = false;
    public function product_category ()
    {
        return $this->belongsTo('App\ProductCategory','productCateId','id') ;
    }
    
    public function producer ()
    {
        return $this->belongsTo('App\Producer','producerId','id') ;
    }

    public function images ()
    {
        return $this->hasMany('App\images','productId','id');
    }

    public function comment() {
        return $this->hasMany('App\Comment','idProduct','id') ;
    }


    public function order() {
        return $this->hasMany('App\Order','idProduct','id') ;
    }

    
}
