<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table ="cusInfo" ;
    public $timestamps = false;


    public function users(){
        return $this->belongsTo('App\User','userId','id') ;
    }


    public function order() {
        return $this->hasMany('App\Order','cusId','id') ;
    }

}
