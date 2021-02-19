<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductCategory ;
use App\Cart ;
use App\Producer;
use App\Product;
use Session ;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('include.top-menu', function ($view) {
           $loaisanpham = ProductCategory::all();
  
           $view->with('loai_sp', $loaisanpham) ;
       });

       view()->composer('category', function ($view) {
        $producer = Producer::all();

        $view->with('producer', $producer) ;
    });

    view()->composer(['category','viewDetail','home'],function ($view) {
        $bestSeller = Product::where('promotion','>',0)->get() ;      
        $view->with(['bestSeller'=>$bestSeller]) ;
    });



       view()->composer('include.top-menu',function ($view){
         if (Session('cart')) {
               $oldCart = Session::get('cart');
               $cart = new Cart($oldCart) ;
               $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
           }
       });

       view()->composer('checkOut',function ($view){
        if (Session('cart')) {
              $oldCart = Session::get('cart');
              $cart = new Cart($oldCart) ;
              $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
          }
      });
    }
}
