@extends('admin.layout.index')

@section('content')
  <!-- Page Content -->
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chỉnh sửa
                            <small>Đặt hàng</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if (session('thongbao'))
                    <div class="alert alert-success">
                    {{session('thongbao')}}
                    </div>  
               @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/order/edit/{{$order->id}}" method="POST" >
                                <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                            <label>Tên khách hàng</label>
                                <input class="form-control" name="cusName" placeholder="Nhập tên người đặt hàng" value="{{$order->userInfo['fullName']}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ giao hàng"  value="{{$order->userInfo['address']}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ email</label>
                                <input class="form-control" name="email" placeholder="Nhập email" value="{{$order->userInfo['email']}}" />
                            </div>


                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea class="form-control" rows="3" name="note">{{$order->note}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <label class="radio-inline">
                                <input class="form-control" name="phone" value="{{$order->userInfo['phone']}}" placeholder="Nhập số đt" >
                                </label>
                            </div>


                            <select class="form-control" name="delivered">
                                  
                                       
                                        <option 
                                        
                                        @if ($order->delivered == 0 )
                                            {{"selected"}}
                                            @endif

                                        value="0">Chưa giao hàng</option>
                                    

                                        <option value="1"   @if ($order->delivered == 1 )
                                            {{"selected"}}         @endif>Đã giao hàng</option>

                                    
                                    </select>





                            <button type="submit" class="btn btn-default">Chỉnh sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>

                                <div class="row">
                                        <div class="col-lg-12">
                                            <h1 class="page-header">Danh Sách
                                                <small>Đơn Hàng</small>
                                            </h1>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                                   <!-- /.col-lg-12 -->
                                                   @if (session('thongbao'))
                                            <div class="alert alert-success">
                                            {{session('thongbao')}}
                                            </div>  
                                       @endif
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr align="center">
                                                    <th>ID</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                          
                                            
                                            
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order->orderDetail as $item)
                                                <tr class="odd gradeX" align="center">
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->product->name}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                
                                                    <td>{{$item->priceProduct}}</td>
                                                
                                       
                                           
                                
                                          
    
                                                  
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.row -->
                                    
                    
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection