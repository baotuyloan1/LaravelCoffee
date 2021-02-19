<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth ;
use App\User ;
use App\Http\Controllers\AdminController ;


class AccountController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login (Request $req){
       
       
        $username = $req['username'];
       $password =  $req['password'] ;
        
 

       if (Auth::attempt(['name' => $username, 'password' => $password]))
           {
        
            if (Auth::user()->role['roleName'] == "ADMIN" ) {

            return redirect()->route('listProduct');
           
        }

        else 
        return view('login') ;


    //    return view('admin.category.list ',['user'=>Auth::user()]) ;
    }
            else 
            return view('login') ;
        
    }

    public function logout (){
        Auth::logout();
        return view('login',['error'=>"Đăng xuất thành công"]);
    }


   
}
