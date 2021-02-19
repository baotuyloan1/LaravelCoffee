<?php

namespace App\Http\Controllers;

use App\images;
use App\Producer;
use App\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ProductCategory ;


use Illuminate\Support\Facades\Auth ;
use App\User ;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Input;

use File;   

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   
    public function getList () {
        $user = User::all();
        
        return view ('admin_LTE.user.list',['user'=>$user]);
    }

    public function getAdd() {
        return view ('admin_LTE.user.add');

    }

    public function postAdd(Request $request) {
        $this->validate($request,
        [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'emailAddress' => 'required|email|unique:users,emailAddress',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password' ,

            'numberPhone' => 'required|regex:/(0)[0-9]{9}/' ,
            'address' => 'required|min:5'
        ],
        [
            'username.required' => 'Bạn chưa nhập tên đăng nhập' ,
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'emailAddress.required' => 'Bạn chưa nhập Email' ,
            'emailAddress.email' => 'Bạn chưa nhập đúng định dạng email',
            'emailAddress.unique'=> 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu' ,
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự' ,
            'password.max' => 'Mật khảu chỉ được tối đa 32 ký tự' ,
            'passwordAgain.required' => 'Bạn chưa nhập mật khẩu' ,
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp' ,
            'name.required' => 'Bạn chưa điền tên đầy đủ',
            'name.min' => 'Tên đầy đủ phải có lớn hơn 3 ký tự' ,
            'numberPhone.required' => 'Ban chưa nhập số điện thoại' ,
            'numberPhone.regex' => 'Định dạng số điện thoại không chính xác' ,
            'address.required' => 'Bạn chưa nhập nơi ở hiện tại' ,
            'address.min' => 'Nơi ở hiện tại phải có ít nhất 3 ký tự'
        ]) ;
        $user = new User() ;
        $user->fullName = $request->name ;
        $user->name = $request->username;
        $user->emailAddress = $request->emailAddress ;
        $user->password =bcrypt ($request->password );
      
        $user->phoneNumber = $request->numberPhone ;
        $user->address = $request->address ;
        $user->roleId = $request->role ;
        $user->save() ;

        return redirect ('admin/user/add')->with('thongbao','Thêm thành công');

   

    }

    public function getEdit($id) {
        $user = User::find($id);
        return view('admin_LTE.user.edit',['user'=>$user]) ;

    }

    public function postEdit($id,Request $request) {
        $this->validate($request,
        [
            'username' => 'required|min:3',
            'fullName' => 'required|min:3',


            'numberPhone' => 'required|regex:/(0)[0-9]{9}/' ,
            'address' => 'required|min:5'
        ],
        [
            'username.required' => 'Bạn chưa nhập tên đăng nhập' ,
            'fullName.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'fullName.required' => 'Bạn chưa điền tên đầy đủ',
            'numberPhone.required' => 'Ban chưa nhập số điện thoại' ,
            'numberPhone.regex' => 'Định dạng số điện thoại không chính xác' ,
            'address.required' => 'Bạn chưa nhập nơi ở hiện tại' ,
            'address.min' => 'Nơi ở hiện tại phải có ít nhất 3 ký tự'
        ]) ;

        $user = User::find($id) ;
        $user->fullName = $request->fullName ;
        $user->name = $request->username;
        $user->phoneNumber = $request->numberPhone ;
        $user->address = $request->address ;
        if($request->role != null)
        $user->roleId = $request->role ;

        if ($request->changePasssword == "on")
            {
                $this->validate($request,
                [
                    
                   
                    'password' => 'required|min:3|max:32',
                    'passwordAgain' => 'required|same:password' ,
        
                  
                ],
                [
                  
                    'password.required' => 'Bạn chưa nhập mật khẩu' ,
                    'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự' ,
                    'password.max' => 'Mật khảu chỉ được tối đa 32 ký tự' ,
                    'passwordAgain.required' => 'Bạn chưa nhập mật khẩu' ,
                    'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp' ,
                   
                ]) ;

                $user->password =bcrypt ($request->password );
               
        
            }

            $user->save();
            return redirect ('admin/user/edit/'.$id)->with('thongbao','Bạn đã sửa thành công') ;

            

      

    }
    public function getDelete($id) {
        $user = User::find($id) ;
        $user->delete();
        return redirect('admin/user/list')->with('thongbao','Bạn đã xóa người dùng thành công') ;
    }


    public function getLoginAdmin() {


        return view('admin_LTE.login') ;
    }

    
    public function postLoginAdmin(Request $request) {
 
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
            if (Auth::user()->role['roleName'] == "ADMIN" or Auth::user()->role['roleName']=="MANAGER" )  {
            return \redirect('admin/dashboard/show') ;
        }

        return \redirect('admin/login')->with('thongbao','Bạn không đủ quyền để đăng nhập');
        }
        else 
        {
            return \redirect('admin/login') ->with('thongbao','Không tồn tại tài khoản');
        }

    }
    public function getLogoutAdmin() {
        Auth::logout();
        return \redirect('admin/login') ;
    }





   
}
