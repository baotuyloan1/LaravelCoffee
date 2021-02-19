<?php

namespace App\Http\Controllers;

use App\Comment;
use App\images;
use App\Order;
use App\Producer;
use App\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\ProductCategory;


use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserInfo;
use Carbon\Carbon;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Input;

use File;

class AdminController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getListCategory()
    {


        //     $username = $req['username'];
        //    $password =  $req['password'] ;



        //    if (Auth::attempt(['name' => $username, 'password' => $password]))
        //        {

        //    return view('thanhcong',['user'=>Auth::user()]) ;
        // }
        //         else 
        //         return view('dangnhap',['error'=>'Đăng nhập thất bại']) ;
        $categories = ProductCategory::all();

        return view('admin_LTE.category.list', ['categories' => $categories]);
    }

    public function logout()
    {
        Auth::logout();
        return view('dangnhap', ['error' => "Đăng xuất thành công"]);
    }


    public function showAddCategoryPage()
    {
        return view('admin_LTE.category.add');
    }

    public function addCategory(Request $req)
    {
        //Kiểm tra điều kiện
        $this->validate(
            $req,
            [
                'nameCategory' => 'required|min:3|max:100',
                'status' => 'required',
                'description' => 'required|min:3'

            ],
            [
                'nameCategory.required' => 'Bạn chưa nhập tên thể loại',
                'nameCategory.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'nameCategory.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'status.required' => 'Bạn chưa nhập status cho thể loại',
                'status.min' => 'Status của sản phẩm phải có độ dài từ 3 cho đến 50 ký tự',
                'status.max' => 'Status của sản phẩm phải có độ dài từ 3 cho đến 50 ký tự',
                'description.required' => 'Bạn chưa nhập mô tả chi tiết sản phẩm',
                'description.min' => 'Mô tả chi tiết phải có độ dài lớn hơn 3',



            ]
        );

        $category = new ProductCategory();
        $category->name = $req->nameCategory;
        $category->description = $req->description;
        $category->status = $req->status;
        $category->save();

        return redirect('admin/category/add')->with('thongbao', 'Thêm thành công');
    }

    public function showEditCategoryPage($id)
    {
        $category = ProductCategory::find($id);
        return view('admin_LTE.category.edit', ['category' => $category]);
    }

    public function editCategory(Request $req, $id)
    {
        $category = ProductCategory::find($id);
        //Kiểm tra
        //unique kiểm tra bị trùng hay không
        $this->validate(
            $req,
            [
                //Trùng trong bảng category , trùng cột name
                'nameCategory' => 'required|min:3|max:100',
                'description' => 'required|min:3',
                'status'=>'required'
            ],
            [
                'nameCategory.required' => 'Bạn chưa nhập tên thể loại',
                'nameCategory.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'nameCategory.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'status.required' => 'Bạn chưa nhập status cho thể loại',
            
                'description.required' => 'Bạn chưa nhập mô tả chi tiết sản phẩm',
                'description.min' => 'Mô tả chi tiết phải có độ dài lớn hơn 3',

            ]
        );

        $category->name = $req->nameCategory;
        $category->description = $req->description ;
        $category->status = $req->status ;

        $category->save();

        return redirect('admin/category/showEditPage/' . $id)->with('thongbao', 'Sửa thành công');
    }


    public function deleteCategory($id)
    {
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect('admin/category/showList')->with('thongbao', 'Bạn đã xóa thành công');
    }


    public function showListProduct()
    {
        $products = Product::all();
        $count_Product = Product::all()->count();
        $count_Review = Comment::all()->count();
        $count_User = UserInfo::all()->count();
        $count_Order = Order::all()->count();
        return view('admin_LTE.product.list', ['products' => $products,'count_Product'=>$count_Product,'count_Review'=>$count_Review,'count_User'=> $count_User,'count_Order'=> $count_Order]);
    }

    public function showAddProductPage()
    {
        $categories = ProductCategory::all();
        $producers = Producer::all();
        return view('admin_LTE.product.add', ['categories' => $categories, 'producers' => $producers]);
    }

    public function deleteProduct($id)
    {

        $product = Product::find($id);

        $product_detail = Product::find($id)->images;
        foreach ($product_detail as $value) {


            File::delete('img/products/detail/' . $value->name);
            $value->delete();
        }

        File::delete('img/products/' . $product->image);

        $product->delete();
        return redirect('admin/product/showList')->with('thongbao', 'Bạn đã xóa thành công');
    }

    public function addProduct(Request $request)
    {

        $this->validate(
            $request,
            [
                'name' => 'required|unique:product,name|min:1|max:255',
                'category' => 'required',
                'price' => 'required|min:1',
                'weight' => 'required',
                // 'roast' => 'required|min:1|max:255',
                'shelfLife' => 'required|min:3',
                // 'particleSize' => 'required|min:1',
                'producer' => 'required',
                'quantity' => 'required',
                'taste' => 'required',
                'ingredient' => 'required'

            ],
            [
                'name.required' => 'Bạn chưa nhập tên sản phẩm',
                'name.unique' => 'Tên sản phẩm đã tồn tại',
                'name.min' => 'Tên sản phẩm phải có độ dài từ 1 đến 255 ký tự',
                'name.max' => 'Tên sản phẩm phải có độ dài từ 1 đến 255 ký tự',
                'category.required' => 'Bạn chưa chọn thể loại',
                'price.required' => 'Chưa nhập đơn giá sản phẩm',
                'weight.required' => 'Chưa nhập khối lượng sản phẩm',
                // 'roast.required' => 'Chưa nhập cách rang',
                'shelfLife.required' => 'Chưa nhập hạn sử dụng',
                // 'particleSize.required' => 'Chưa nhập kích thước hạt',
                'producer.required' => 'Chưa chọn nhà cung cấp',
                'quantity.required' => 'Chưa nhập số lượng sản phẩm',
                'taste.required' => 'Chưa nhập mùi vị',
                'ingredient.required' => 'Chưa nhập thành phần'

            ]
        );

        $product = new Product();
        $product->name = $request->name;
        $product->productCateId = $request->category;
        $product->price = $request->price;
        $product->netWeight = $request->weight;
        $product->roast = $request->roast;
        $product->shelfLife = $request->shelfLife;
        $product->particleSize = $request->particleSize;
        $product->producerId = $request->producer;
        $product->taste = $request->taste;
        $product->quantity = $request->quantity;
        $product->ingredient = $request->ingredient;
        $product->sold = 0;
        $product->status = $request->status;
      
        $product->promotion = $request->promotion;
        if ($request->promotion == null)
        $product->promotion = 0 ;
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $name = $file->getClientOriginalName();



            $Hinh = str_random(4) . "_" . $name;
            while (file_exists("img/products/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $name;
            }
            $product->image = $Hinh;

            $file->move('img/products/', $Hinh);
        } else {
            $product->images = "";
        }


        $product->save();

        $productId = $product->id;

        if ($request->hasfile('fProductDetail')) {
            foreach ($request->file('fProductDetail') as $file) {
                $product_img = new images();
                if (isset($file)) {

                    $images = str_random(4) . $file->getClientOriginalName();;
                    while (file_exists("img/products/detail" . $images)) {
                        $images = str_random(4) . $file->getClientOriginalName();;
                    }

                    echo $images . "<br>";
                    $product_img->name = $images;
                    $product_img->productId = $productId;
                    $file->move('img/products/detail/', $images);
                    $product_img->save();
                }
            }
        }




        return redirect('admin/product/showAddPage')->with('thongbao', 'Thêm thành công');
    }


    public function showEditProductPage($id)
    {
        $categories = ProductCategory::all();
        $producers = Producer::all();
        $product_image = Product::find($id)->images;
        $product = Product::find($id);
        return view('admin_LTE.product.edit', ['categories' => $categories, 'producers' => $producers, 'product' => $product, 'product_image' => $product_image]);
    }

    public function editProduct($id, Request $request)
    {











        $product = Product::find($id);
        $img_current = 'img/products/' . $request->input('img_current');

        if (!empty($request->file('fImages'))) {
            $file_name = $request->file('fImages')->getClientOriginalName();


            $Hinh = str_random(4) . "_" . $file_name;

            while (file_exists("img/products/" . $Hinh)) {
                $Hinh = str_random(4) . "_" . $file_name;
            }

            $product->image = $Hinh;
            $request->file('fImages')->move('img/products/', $Hinh);




            if (File::exists($img_current)) {

                File::delete($img_current);
            }
        } else {
            echo "Không có file";
        }





        $product->name = $request->name;
        $product->productCateId = $request->category;
        $product->price = $request->price;
        $product->netWeight = $request->weight;
        $product->roast = $request->roast;
        $product->shelfLife = $request->shelfLife;
        $product->particleSize = $request->particleSize;
        $product->producerId = $request->producer;
        $product->taste = $request->taste;
        $product->quantity = $request->quantity;
        $product->ingredient = $request->ingredient;

        $product->status = $request->status;

        $product->promotion = $request->promotion;
        if ($request->promotion == null) {
            $product->promotion = 0;
        }
        $product->save();
        if (!empty($request->hasfile('fProductDetail'))) {

            foreach ($request->file('fProductDetail') as $file) {
                $product_img = new images();
                if (isset($file)) {
                    $product_img->name = $file->getClientOriginalName();
                    $product_img->productId = $id;
                    $file->move('img/products/detail/', $file->getClientOriginalName());
                    $product_img->save();
                }
            }
        }


        return redirect('admin/product/showList')->with('thongbao', 'Bạn đã cập nhật thành công sản phẩm ' . $request->name);
    }


    public function deleteImgdetail($id)
    {

        //Ajax 
        if (request()->ajax()) {

            $idHinh = (int) request()->get('idHinh');


            $image_detail = images::find($idHinh);
            if (!empty($image_detail)) {
                $img = 'img/products/detail/' . $image_detail->name;
                if (File::exists($img)) {
                    File::delete($img);
                }
                $image_detail->delete();
            }
            return "Oke";
        }
    }

    public function getListProducer()
    {
        $producers = Producer::all();
        return view('admin_LTE/producer/list', ['producers' => $producers]);
    }


  

    public function postAddProducer(Request $req)
    {
        $this->validate(
            $req,
            [
                'name' => 'required|min:3|max:100',
                'status' => 'required',
                'description' => 'required|min:3',
                'phone' => 'required|regex:/(0)[0-9]{9}/',
                'address' => 'required|min:5',
                'email' => 'required|email|unique:producer,email',


            ],
            [
                'name.required' => 'Bạn chưa nhập tên nhà sản xuất',
                'name.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'name.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'status.required' => 'Bạn chưa nhập status cho thể loại',
                'description.required' => 'Bạn chưa nhập mô tả công ty',
                'description.min' => 'Mô tả chi tiết phải có độ dài lớn hơn 3',
                'email.required' => 'Bạn chưa nhập Email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'email.unique' => 'Email đã tồn tại',
                'address.required' => ' Bạn chưa nhập địa chỉ',
                'address.min' => 'Địa chỉ phải lớn hơn 5',
                'phone.required' => 'Ban chưa nhập số điện thoại',
                'phone.regex' => 'Định dạng số điện thoại không chính xác'


            ]
        );

        $producer = new Producer();
        $producer->name = $req->name;
        $producer->description = $req->description;
        $producer->status = $req->status;
        $producer->address = $req->address;
        $producer->phoneNumber = $req->phone;
        $producer->email = $req->email;
        $producer->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $producer->save();



        return redirect('admin/producer/add')->with('thongbao', 'Thêm thành công');
    }

    public function getAddProducer()
    {
        return view('admin_LTE.producer.add');
    }


    public function getEditProducer($id)
    {
        $producer = Producer::find($id) ;
        return view('admin_LTE.producer.edit',['producer'=>$producer]) ;
     }

    public function postEditProducer($id , Request $req)
    {
        $producer = Producer::find($id) ;

        $this->validate(
            $req,
            [
                'name' => 'required|min:3|max:100',
                'status' => 'required',
                'description' => 'required|min:3',
                'phone' => 'required|regex:/(0)[0-9]{9}/',
                'address' => 'required|min:5',
                'email' => 'required|email',


            ],
            [
                'name.required' => 'Bạn chưa nhập tên nhà sản xuất',
                'name.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'name.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'status.required' => 'Bạn chưa nhập status cho thể loại',
                'description.required' => 'Bạn chưa nhập mô tả công ty',
                'description.min' => 'Mô tả chi tiết phải có độ dài lớn hơn 3',
                'email.required' => 'Bạn chưa nhập Email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'address.unique' => ' Bạn chưa nhập địa chỉ',
                'address.min' => 'Địa chỉ phải lớn hơn 5',
                'phone.required' => 'Ban chưa nhập số điện thoại',
                'phone.regex' => 'Định dạng số điện thoại không chính xác'


            ]
        );
        $producer->name = $req->name;
        $producer->description = $req->description;
        $producer->status = $req->status;
        $producer->address = $req->address;
        $producer->phoneNumber = $req->phone;
        $producer->email = $req->email;
        $producer->save() ;

        return redirect('admin/producer/edit/' . $id)->with('thongbao', 'Sửa thành công');

     }


     public function getListOrder () {
        $orders = Order::all();
        return view ('admin_LTE/order/list', ['orders' => $orders]) ;
    }

    public function getEditOrder($id) {
        $order = Order::find($id);
        return view ('admin_LTE/order/edit',['order'=>$order]) ;

    }

    public function postEditOrder($id,Request $req) {
        $order = Order::find($id);
        $cus = UserInfo::find($order->userInfo['id'] ) ;
        $this->validate(
            $req,
            [
                'cusName' => 'required|min:3|max:100',
                'phone' => 'required|regex:/(0)[0-9]{9}/',
                'address' => 'required|min:5',
                
                'email' => 'required|email',


            ],
            [
                'name.required' => 'Bạn chưa nhập tên nhà sản xuất',
                'name.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
                'name.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
               
                'email.required' => 'Bạn chưa nhập Email',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',
                'address.unique' => ' Bạn chưa nhập địa chỉ',
                'address.min' => 'Địa chỉ phải lớn hơn 5',
                'phone.required' => 'Ban chưa nhập số điện thoại',
                'phone.regex' => 'Định dạng số điện thoại không chính xác'


            ]
        );

        $cus->fullName =  $req->cusName;
        $cus->phone = $req->phone ;
        $cus->address = $req->address;
        $cus->email = $req->email ;
        $order->delivered = $req->delivered ;
        if($req->note != null)
        $order->note =  $req->note ; 
 
        $order->save();
        $cus->save() ;

        return redirect('admin/order/edit/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function deleteOrder ($id) {
        $order = Order::find($id);
        $cus = UserInfo::find($order->userInfo['id'] ) ;

        $order->delete();
        $cus->delete();
        return redirect('admin/order/list')->with('thongbao', 'Bạn đã xóa thành công');

        
    }


    public function showDashboard() {
        $count_Product = Product::all()->count();

        $count_User = UserInfo::all()->count();
        $count_Order = Order::all()->count();
        $count_Acc = User::all()->count();

        $new_Order = Order::where('delivered','0')->get() ;

        return view ('admin_LTE/dashboard/dashboard',['count_Product'=>$count_Product,'new_Order'=>    $new_Order,'count_User'=> $count_User,'count_Order'=>   $count_Order,'count_Acc'=> $count_Acc]) ;
    }


    public function deleteProducer ($id) {
        $producer = Producer::find($id) ;
     
        $producer->delete() ;

        return redirect('admin/producer/list')->with('thongbao', 'Bạn đã xóa thành công');
    }




   


}
