<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Cart ;
use App\Comment;

use Session ;

use Illuminate\Support\Facades\Auth ;   
class ProductController extends Controller

{
    function __construct()
    {
        if(Auth::check()) {
            view()->share('user',Auth::user()) ;
        }
       
    }
    public function index()
    {
        return view('admin_LTE/dashboard/dashboard');
    }

    public function showHomePage()
    {
        $products = Product::orderBy('id','DESC')->get()->take(6);
        $bestSeller = Product::orderBy('sold','DESC')->get()->take(12) ;       
        // foreach ($products as $items) {
        //     echo $items->name ;
        //     echo $items->images[0]->name;
        //     echo "<br>" ;
        // }

        // exit();
  
        return view('home',['products'=>$products,'bestSeller'=>$bestSeller]);
    }




    public function viewDetail ($id){
        $product = Product::find($id);
       


      
        

       


        return view('viewDetail',['product'=>$product]) ;
    }



    public function showCategoryPage(){
        $products = Product::paginate(6);
        $productsFind = Product::count();
       

   

        return view('category',['products'=>$products,'productsFind'=>$productsFind]) ;
    }


    public function getLoaiSP ($type) {
        $productType = Product::where('productCateId',$type)->paginate(6);
        $productsFind = Product::where('productCateId',$type)->count() ;
        
        return view('category',['products'=>$productType,'productsFind'=>$productsFind]) ;

    }

    public function getAddToCart(Request $req ,$id) {
        $product = Product::find($id) ;
        $oldCart = Session('cart') ? Session::get('cart'): null ;
        $cart = new Cart($oldCart) ;
        $cart->add( $product,$id);
        $req->session()->put('cart',$cart) ;
        return redirect()->back();
    }


    public function getDelItemCart($id) {
        $oldCart = Session::has('cart')? Session::get('cart'):null ;
        
        $cart = new Cart ($oldCart) ;
      
        $cart->removeItem($id) ;

        if (count($cart->items)>0) {
            Session::put('cart',$cart) ;
        }
        else {
            Session::forget('cart');
        }
     
        return redirect()->back() ;
    }


    public function getLogin() {
        return view ('login') ;
    }

    public function getLogout() {
        Auth::logout();
        return redirect('home') ;
    }

    public function postLogin(Request $request) {
        $this->validate($request,
        [
            'username'=>'required' ,
            'password'=>'required'
        ],[
            'username.required'=>'Bạn chưa nhập username',
            'password.required' => 'Bạn chưa nhập password'
        ]) ;    
        if (Auth::attempt(['name' => $request->username, 'password' =>  $request->password]))
        {
           
            return redirect('/home') ;


     
        }
        else 
        {
            return \redirect('login') ->with('thongbao','Không tồn tại tài khoản');
        }
    }

    public function findByTuKhoa(Request $req) {
		$tukhoa = $req->tukhoa ;
		
	}

}
