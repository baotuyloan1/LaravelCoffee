 
 <!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
 @include('include.header-css')
</head>

<body>
 @include('include.top-menu')
 @include('include.banner')
 <!--================Checkout Area =================-->
 <section class="checkout_area padding_top">
 @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}} <br>

                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                    @endif
 <form class="row contact_form" action="{{route('checkout')}}" method="post" novalidate="novalidate">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="container">
     
      
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-6">
            <h3>Billing Details</h3>
         
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="first" name="fullName" placeholder="Tên đầy đủ *" value="{{Auth::user()['fullName']}}"/>
               
              </div>
              
            
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại *"value="{{Auth::user()['phoneNumber']}}"/>
          
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="email" name="email" placeholder="Địa chỉ Email *"value="{{Auth::user()['emailAddress']}}"/>
               
              </div>
              
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="address" placeholder="Địa chỉ giao hàng *"value="{{Auth::user()['address']}}" />
                
              </div>

              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>Shipping Details</h3>
                  
                  <label for="f-option3">Ship to a different address?</label>
                </div>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>
           
              
            
          </div>




       
            
        

   



            @if(Session::has('cart'))
          <div class="col-lg-6">
            <div class="order_box">
              <h2>Your Order</h2>
              
              <ul class="list">
                <li>
                  <a href="#">Product
                    
                    <span>Total</span>
                  </a>
                </li>

                
                    @foreach ($product_cart as $product)
                <li>
            
                  <a href="viewDetail/{{$product['item']['id']}}">   <img src="{!! URL::to('img/products/'.$product['item']->image) !!}" alt="item1" style="width:70px;height:70px; float:left" /> {{$product['item']['name']}}
            
                    <span class="middle">X{{$product['qty']}}</span>
                    <span class="last">{{$product['item']['price']}} VNĐ</span>
                    <br>
                    <br>
                  </a>
                </li>


                @endforeach
               
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Subtotal
                    <span>{{Session('cart')->totalPrice}}.000 VNĐ</span>
                  </a>
                </li>
                <li>
                  <a href="#">Shipping
                    <span>FREE</span>
                  </a>
                </li>
                <li>
                  <a href="#">Total
                    <span>{{Session('cart')->totalPrice}}.000 VNĐ</span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <div class="radion_btn">
                  <input type="radio" id="f-option5"  />
                  <label for="f-option5">Check payments</label>
                  <div class="check"></div>
                </div>
                <p>
                  Please send a check to Store Name, Store Street, Store Town,
                  Store State / County, Store Postcode.
                </p>
              </div>
              <div class="payment_item active">
                <div class="radion_btn">
                  <input type="radio" id="f-option6"  checked />
                  <label for="f-option6">Trả sau khi nhận hàng</label>
                  <img src="img/product/single-product/card.jpg" alt="" />
                  <div class="check"></div>
                </div>
             
              </div>
              
              <div class="creat_account">
                <input type="checkbox" id="f-option4"  checked/>
                <label for="f-option4">Tôi đồng ý với quy định</label>
                <a href="#">terms & conditions*</a>
              </div>
              <input type="submit" class="btn_3" value="Proceed to Paypal">
           
            </div>
          </div>
          @endif	
        </div>
      </div>
    </div>
    </form>
  </section>
  <!--================End Checkout Area =================-->

  @include('include.footer-script')
</body>

</html>