<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ="orders" ;
    public $timestamps = false;

    public function accInfo(){
        return $this->belongsTo('App\User','accId','id') ;
    }


    public function orderDetail() {
        return $this->hasMany('App\OrderDetail','idOrder','id');
    }

    public function userInfo() {
        return $this->belongsTo('App\UserInfo','cusId','id') ;
    }
}
