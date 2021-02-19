<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model

{
    public $timestamps = false;
    protected $table ="productcategory" ;

    public function product(){
        return $this->hasMany('App\Product','productCateId','id') ;
    }
}
