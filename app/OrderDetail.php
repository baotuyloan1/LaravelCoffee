<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table ="orderdetail" ;
    public $timestamps = false;

    public function order(){
        return $this->belongsTo('App\Order','idOrder','id') ;
    }

    public function product() {
        return $this->belongsTo('App\Product','idProduct','id') ;   
    }
}
