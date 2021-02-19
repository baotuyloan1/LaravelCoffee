 
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
<!--================ confirmation part start =================-->
<section class="confirmation_part padding_top">
    <div class="container">
 
      <div class="row">
        <div class="col-lg-12">
        <div class="confirmation_tittle">
            <span>Chi tiết đơn đặt hàng</span>
          </div>
          <div class="order_details_iner">
            <h3><span>Chi tiết hóa đơn </span> {{$order['created_at']}}</h3>
            <p><span>Người đặt hàng:  </span>{{$order->userInfo['fullName']}} </p>
            <p><span>Email:  </span>{{$order->userInfo['email']}} </p>
            <p><span>Điện thoại:  </span>{{$order->userInfo['phone']}} </p>
            <span>NOTE: </span>{{$order['note']}}
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Sản phẩm</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Đơn giá</th>
                </tr>
              </thead>
              @if (isset($orderDetail))
              <tbody>
              
                    @foreach($orderDetail as $o)
                <tr>
                  <th colspan="2"><span><a href="../viewDetail/{{$o->product['id']}}">{{$o->product['name']}}</span></a></th>
                  <th>{{$o['quantity']}}</th>
                  <th>{{$o['priceProduct']}} VNĐ</th>
                </tr>
               
                    @endforeach
              
              
              </tbody>
              <tfoot>
                <tr>
                  <th scope="col" colspan="3">Total</th>
                
                  <th scope="col">{{$order['totalPrice']}} VNĐ</th>
                </tr>
              </tfoot>
              @endif
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ confirmation part end =================-->

  @include('include.footer')
  @include('include.footer-script')
</body>

</html>