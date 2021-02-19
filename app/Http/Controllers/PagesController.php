<?php

namespace App\Http\Controllers;

use App\Comment;
use App\images;
use App\Order;
use App\OrderDetail;
use App\Producer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Product;
use App\User;
use App\UserInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

use Illuminate\Support\Facades\Session as IlluminateSession;
use Session;
use Mail ;

class PagesController extends BaseController

{
 
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getUser() {
        $user = Auth::user();
        return view('user',['user'=> $user]) ;
    }

    public function postUser(Request $request) {
        $this->validate($request,
        [
      
            'fullName' => 'required|min:3',


            'numberPhone' => 'required|regex:/(0)[0-9]{9}/' ,
            'address' => 'required|min:5'
        ],
        [
           
            'fullName.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'fullName.required' => 'Bạn chưa điền tên đầy đủ',
            'numberPhone.required' => 'Ban chưa nhập số điện thoại' ,
            'numberPhone.regex' => 'Định dạng số điện thoại không chính xác' ,
            'address.required' => 'Bạn chưa nhập nơi ở hiện tại' ,
            'address.min' => 'Nơi ở hiện tại phải có ít nhất 3 ký tự'
        ]) ;

        $user = User::find(Auth::user()->id) ;
        $user->fullName = $request->fullName ;
      
        $user->phoneNumber = $request->numberPhone ;
        $user->address = $request->address ;
   

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
            return redirect ('user')->with('thongbao','Bạn đã sửa thành công') ;
        }
        public function getRegister() {

            return view('register') ;
        }


        public function postRegister(Request $request){
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
            $user->roleId = 3 ;
            $user->save() ;
    
            return redirect ('login')->with('thongbao','Chúc mứng bạn đã đăng ký thành công');
    
        }

        public function search(Request $request) {
            $tukhoa = $request->tukhoa ;

           
      
            $products = Product::where('name','like','%'.$tukhoa.'%')->orwhere('name','like','%'.$tukhoa.'%')->orWhere('roast','like','%'.$tukhoa.'%')->paginate(6) ;
            
            
            $productsFind =  $products->count() ;
            return view('category',['products'=>$products,'productsFind'=>$productsFind]) ;
        }
        



        public function getCheckOut() {
            return view('checkOut') ;
        } 


        public function postCheckOut(Request $request) {
         $user = new UserInfo ;





           
            $this->validate($request,
            [
                'fullName' => 'required|min:3',
           
                'email' => 'required|email|',
    
                'number' => 'required|regex:/(0)[0-9]{9}/' ,
                'address' => 'required|min:5'
            ],
            [
               
                'fullName.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
                'email.required' => 'Bạn chưa nhập Email' ,
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
               
               
                'fullName.required' => 'Bạn chưa điền tên đầy đủ',
                'fullName.min' => 'Tên đầy đủ phải có lớn hơn 3 ký tự' ,
                'number.required' => 'Ban chưa nhập số điện thoại' ,
                'number.regex' => 'Định dạng số điện thoại không chính xác' ,
                'address.required' => 'Bạn chưa nhập nơi ở hiện tại' ,
                'address.min' => 'Nơi ở hiện tại phải có ít nhất 3 ký tự'
            ]) ;
       
            $user->fullName = $request->fullName ;
 
 
            $user->phone = $request->number;
            $user->address = $request->address ;
 
            $user->email = $request->email ;
    
         
        
            if (Auth::user()) {
            
                    
          
        
                $user->userId = Auth::user()->id ;

            }
            $user->save() ;
            $cart = Session::get('cart') ;

            $order = new Order() ;
            $order->cusId =  $user->id ;
            $order-> created_at = Carbon::now('Asia/Ho_Chi_Minh') ;
            $order->totalPrice = $cart->totalPrice;
            $order->note = $request->note;
            $order->delivered = 0 ;

            
            if (Auth::user()) {
            
                    
          
        
                $order->accId = Auth::user()->id ;

            }
            else
            $order->accId = null ;

            $order->save() ;

           
            foreach($cart->items     as $key => $value){
            $orderDetail = new OrderDetail();


           $orderDetail->idOrder =  $order->id;
            $orderDetail->idProduct   = $key ;
                $product = Product::find($key);
                $product->sold = $product->sold + $value['qty'];
                $quantity =  $product->quantity;
                $product->quantity =   $quantity  - $value['qty'];

                $product->save();


            $orderDetail->quantity = $value['qty'] ;
            $orderDetail->priceProduct = ($value['price']/$value['qty']) ;

                
            
            $orderDetail->save();
           
            
         

         

       





  
      
        }
        $orderDetails = $order->orderDetail;

        $data = ['order'=>$order,'orderDetail'=> $orderDetails,'email'=>$request->email] ;
  
        Mail::send('mail.blanks', $data, function ($message)  use($data)  {
            $message->from('shopcoffee.doan2@gmail.com', 'Coffee Shop');
            
           
            $message->to($data['email'], 'Coffee Shop')->subject("Xác nhận đặt hàng");
         
        });


        Session::forget('cart') ;
          echo "<script>
                alert('Cảm ơn bạn , đã đặt hàng thành công');
                window.location = '".url('/home')."'
            </script>" ;           
        }


        public function getOrderHistory () {
       
            $userInfo = User::where('id',Auth::user()->id)->get() ;         
            $order  =  Order::where('accId',Auth::user()->id)->get() ;
        

    


            return view('orderHistory',['userInfo'=>$userInfo,'order'=> $order]); 
        }

        public function getOrderDetail ($id) {
            $orderDetail = OrderDetail::where('idOrder',$id)->get() ;
            $order = Order::find($id) ;


            return view('orderDetail',['orderDetail'=>$orderDetail,'order'=>$order]) ;
        }

        public function getContact() {
            return view('contact') ;
        }

        
        public function postContact(Request $req) {
            $this->validate($req,
            [
                'name' => 'required',
           
             
    
                'email_message' => 'required' ,
                'subject' =>'required'
              
            ],
            [
                'name.required' => 'Bạn chưa nhập tên' ,
               
                'email_message.required'=> 'Bạn chưa nhập nội dung' ,
                'subject.required' => 'Bạn chưa nhập tiêu đề'
               
            ]);


            $data = ['hoten'=>$req->name,'email'=>$req->email_message,'subject'=>$req->subject] ;
       
            Mail::send('mail.contact', $data, function ($message)  use($data)  {
                $message->from('shopcoffee.doan2@gmail.com', $data['hoten']);
                
               
                $message->to('nguyenducbaokey@gmail.com', 'Coffee Shop')->subject($data['subject']);
             
            });

            echo "<script>
                alert('Cảm ơn bạn đã góp ý');
                window.location = '".url('/home')."'
            </script>" ;
            
        }

        public function getProducer($id) {
            
            $products = Product::where('producerId',$id)->paginate(6);
            $productsFind = Product::where('producerId',$id)->count() ;
        

            return view('category',['products'=>$products,'productsFind'=>$productsFind]) ;

        }

    public function huyOrder ($id){
       
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('idOrder',$id);
        $idcus = $order->cusId ;
        $cus = UserInfo::find($idcus) ;
        $cus->delete(); 
        foreach ($orderDetails as $item) $item->delete() ;
        $order->delete();


        echo "<script>
        alert('Xóa đơn hàng thành công');
        window.location = '".url('/orderHistory')."'
    </script>" ;

    }
}
