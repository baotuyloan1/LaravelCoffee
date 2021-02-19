
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý Nhà Cung Cấp</h1>
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
                    <h3 class="card-title">Danh sách nhà cung cấp</h3>
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
                        <th>#</th>
                        <th>Tên</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Mô tả</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                      
                    
          
                        @foreach ($producers as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phoneNumber}}</td>
                            <td>{{$item->email }}</td>
                            <td>{{$item->address }}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->status}}</td>
                            <td class="center"><span class="badge bg-danger"><a href="admin/producer/delete/{{$item->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa nhà cung cấp này')"> Xóa</a></span></td>
                            <td class="center"><span class="badge bg-success"><a href="admin/producer/edit/{{$item->id}}">Sửa</a></span></td>
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