
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quản lý sản phẩm</h1>
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
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{$count_Order}}</h3>

                <p>Đặt hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$count_Product}}</h3>

                <p>Sản phẩm</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$count_Review}}</h3>

                <p>Review</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>{{$count_User}}</h3>

                <p>Khách hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
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
                    <h3 class="card-title">Danh sách sản phẩm</h3>
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
                                <th>Sản phẩm</th>
                                <th>Nhà cung cấp</th>
                                <th>Thể loại</th>
                                <th>Đơn giá</th>
                                <th>Khuyến Mãi</th>
                                <th>Hạn dùng</th>
                                
                                <TH>Khối lượng</TH>
                                <th>Rang</th>
                                <th>Số lượng</th>
                    
                                <th>Thành phần</th>
                                <th>Đã bán</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                      
                    
                     @foreach ( $products as $item)
                     <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}
                         
                          <img src="{!! URL::to('img/products/'.$item->image) !!}" alt="" width="50%" >

                        
                      </td>
                      <td>{{$item->producer->name}}
                        <td>{{$item->product_category->name}}
                      <td>{{$item->price}}</td>
                  <td>{{$item->promotion}}</td>
                      <td>{{$item->shelfLife}}</td>
                     
                      <td>{{$item->netWeight}}</td>
                      <td>{{$item->roast}}</td>
                      <td>{{$item->quantity}}</td>
                     
                      <td>{{$item->ingredient}}</td>
                      <td>{{$item->sold}}</td>
                      <td>{{$item->status}}</td>
                 
                      <td class="center"><span class="badge bg-danger"><a href="admin/product/delete/{{$item->id}}" onclick="return xacnhanxoa('Bạn có muốn xóa sản phẩm này')"> Delete</a></span></td>
                      <td class="center"><span class="badge bg-success"><a href="admin/product/showEditPage/{{$item->id}}">Edit</a></span></td>
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