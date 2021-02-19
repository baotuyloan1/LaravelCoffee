 <!--::header part start::-->
 <header class="main_menu home_menu">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-12">
                 <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="index.html"> <img src="{{asset('img/logo.png')}}" alt="logo"> </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="menu_icon"><i class="fas fa-bars"></i></span>
                     </button>

                     <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                         <ul class="navbar-nav">
                             <li class="nav-item">
                                 <a class="nav-link" href="{{asset('/home')}}">Home</a>
                             </li>
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Shop
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                     <a class="dropdown-item" href="{{asset('/category')}}"> shop category</a>
                                     <a class="dropdown-item" href="single-product.html">product details</a>

                                 </div>
                             </li>
                             {{-- <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     pages
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                     <a class="dropdown-item" href="login.html"> login</a>
                                     <a class="dropdown-item" href="tracking.html">tracking</a>
                                     <a class="dropdown-item" href="checkout.html">product checkout</a>
                                     <a class="dropdown-item" href="cart.html">shopping cart</a>
                                     <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                     <a class="dropdown-item" href="elements.html">elements</a>
                                 </div>
                             </li> --}}
                             <!-- <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     blog
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                     <a class="dropdown-item" href="blog.html"> blog</a>
                                     <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                 </div>
                             </li> -->

                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Loại sản phẩm
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                     @foreach ($loai_sp as $loai)
                                     <a class="dropdown-item" href="{{route('productCategory',$loai->id)}}">{{$loai->name}}</a>

                                     @endforeach

                                 </div>
                             </li>


                             <li class="nav-item">
                                 <a class="nav-link" href="{{route('getContact')}}">Liên hệ</a>
                             </li>
                             @if (!Auth::user())
                             <li class="nav-item">
                                 <a class="nav-link" href="{{route('login')}}">Đăng nhập</a>
                                 
                             </li>

                             <li class="nav-item">
                                 <a class="nav-link" href="register">Đăng kí</a>
                                 
                             </li>
                             @else
                               <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     {{Auth::user()->name}}
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                 <a class="dropdown-item" href="{{route('user')}}">Sửa thông tin</a>
                                 <a class="dropdown-item" href="{{route('orderHistory')}}">Lịch sử đặt hàng</a>
                                     <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                                   
                                 </div>
                             </li>
                             @endif

                             <li class="nav-item">
                             <a      id="cart" class="nav-link"><i class="fa fa-shopping-cart" ></i> Cart <span class="badge" style="color:Tomato;">@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif</span></a>
                             </li>

   
                         </ul>
                     </div>
                 





                 </nav>

                
                 <!--end navbar-right -->
       

                


         
















































                 
                @if(Session::has('cart'))
            
                    <div class="shopping-cart">
                        <div class="shopping-cart-header">
                            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif</span>

                        </div>
                        <!--end shopping-cart-header -->
                        
                        <ul class="shopping-cart-items">
                            <br>



                            @foreach ($product_cart as $product)

                            <li class="clearfix">
                                <img src="{!! URL::to('img/products/'.$product['item']->image) !!}" alt="item1" style="width:70px;height:70px; float:left" />
                                    
                                <span class="item-name" >&nbsp;&nbsp;{{$product['item']['name']}}</span>
                                <a href="{{route('xoagiohang',$product['item']['id'])}}">
            <span class="glyphicon glyphicon-remove" style="float:right;color:Tomato;">Xóa</span>
            </a>
                                <br>
                                <span class="item-price">&nbsp;&nbsp;Số lượng: {{$product['qty']}}</span>
                                <br>
                                <span class="item-price">&nbsp;&nbsp;Đơn giá: @if($product['item']['promotion']==0 || $product['item']['promotion'] >= $product['item']['price'] ) {{$product['item']['price']}} @else  {{$product['item']['promotion']}}       @endif VNĐ<hr></span>
                            
                            </li>
                            
                            @endforeach
                        </ul>

                    <a href="{{route('getCheckout')}}" class="button">checkout</a>
                        <div class="shopping-cart-total">
                            <span class="lighter-text">Total:</span>
                            <span class="main-color-text">{{Session('cart')->totalPrice}}.000 VNĐ</span>
                        </div>

                    </div>
                    <!--end shopping-cart -->
 
                    @endif	

                 

             </div>
             <!--end container -->



















             </nav>
         </div>
     </div>
     </div>

   
        
 </header>
 <!-- Header part end-->