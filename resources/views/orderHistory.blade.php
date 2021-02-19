 
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
            <span>Thông tin tài khoản</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Thông tin tài khoản</h4>
            @if(isset($userInfo))

            @foreach ($userInfo as $u)
            <ul>
              <li>
                <p>Tên đầy đủ</p><span>: {{$u->fullName}}</span>
              </li>
              <li>
                <p>Số điện thoại</p><span>: {{$u->phoneNumber}}</span>
              </li>
              <li>
                <p>Địa chỉ</p><span>: {{$u->address}}</span>
              </li>
              <li>
                <p>Email</p><span>: {{$u->emailAddress}}</span>
</li>
              <br>
            </ul>
            @endforeach
            @endif
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Lịch sử đặt hàng</h4>
            @if (isset($order))
      
            @foreach($order as $o)
            @if ($o['accId'] == Auth::user()->id)
            <ul>
              <li>
                <p>Tên khách hàng đã mua</p><span>: {{$o->userInfo['fullName']}}</span>
              </li>
              <li>
                <p>Email</p><span>: {{$o->userInfo['email']}}</span>
              </li>
              <li>
                <p>Số điện thoại</p><span>: {{$o->userInfo['phone']}}</span>
              </li>
              <li>
                <p>Ghi chú</p><span>: {{$o['note']}}</span>
              </li>
              
              <li>
                <p>Ngày đặt hàng</p><span>: {{$o['created_at']}}</span>
              </li>
              <li>
                <p>Tổng giá trị hàng</p><span>: {{$o['totalPrice']}} VNĐ</span>
              </li>
              <li>
              <p>Đã giao hàng</p><span>: @if($o['delivered'] == 1 ) {{'Đã giao hàng'}} @else {{'Chưa gửi hàng'}} <a href="huyOrder/{{$o->id}}" style="color:red" onclick="return xacnhanxoa('Bạn có muốn hủy đơn hàng này')">Hủy đơn hàng</a> @endif </span>
              </li>

              <li><a href="orderDetail/{{$o['id']}}">Xem chi tiết đơn hàng</a></li>
            </ul>

            <br>
            <br>

            @endif
            @endforeach
            

    @endif
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