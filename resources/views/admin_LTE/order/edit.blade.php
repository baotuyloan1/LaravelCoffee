
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="admin/order/edit/{{$order->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                <div class="card-body">
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
                    <textarea class="form-control" rows="3">{{$order->note}}</textarea>
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

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Sửa</button>
            
                  <button type="reset" class="btn btn-default">Làm mới</button>
                </div>

              



        
            </div>
            <!-- /.card -->

         
         
           
          </div>
          <!--/.col (left) -->

          
          <!-- right column -->
  
          </div>

        </form>

        
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
                    
                        <td>{{$item->priceProduct}} VNĐ</td>
                    
           
               
    
              

                      
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
           
      
      
     






  @endsection