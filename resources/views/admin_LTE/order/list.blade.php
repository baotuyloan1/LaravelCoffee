
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý đặt hàng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  
                </div>
                <div class="col-sm-6">
                 
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-12">
                
                <!-- /.card -->
      
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Danh sách đặt hàng</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      @if (session('thongbao'))
                      <div class="alert alert-success">
                      {{session('thongbao')}}
                      </div>  
                 
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                
                        <th>Tên khách hàng</th>
                        <th>UserName</th>
                        <th>Ngày tạo</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Tổng tiền</th>
                        <th>Xử lý</th>
                        <th>Lưu ý</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                      
                    
          
                        @foreach ($orders as $item)
                        <tr class="odd gradeX" align="center">
                      
                            <td>{{$item->userInfo['fullName']}}</td>
                        <td >{{$item->accInfo['name']}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->userInfo['address']}}</td>
                        <td>{{$item->userInfo['email']}}</td>
                        <td>{{$item->userInfo['phone']}}</td>
                        <td>{{$item->totalPrice}}</td>
                        <td>@if($item->delivered==0) {{"Chưa"}} @else {{"Rồi"}} @endif</td>
                        <td>{{$item->note}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/order/edit/{{$item->id}}"> Edit</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/order/delete/{{$item->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa đơn hàng này')">Delete</a></td>
                        </tr>
                       @endforeach
              
                    
                  
                   
                   
                     
                  
               
        
                   
                   
                     
                      </tbody>
                     
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
  </div>






  @endsection