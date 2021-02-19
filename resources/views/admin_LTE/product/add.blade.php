@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm sản phẩm</h1>
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
                <h3 class="card-title">Thêm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                <div class="card-body">
                  <div class="form-group">

                    <label >Sản phẩm</label>
                    <input type="text" class="form-control"  name="name" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label >Đơn giá</label>
                    
                    <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" placeholder="Đơn giá" class="form-control">
                            <div class="input-group-append">
                              <span class="input-group-text">.000</span>
                            </div>
                          </div>
                  </div>


                  <div class="form-group">
                        <label>Khuyến mãi</label>
                      
                        <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">$</span>
                                </div>
                                <input type="text"  name="promotion" placeholder="Nhập khuyến mãi (nếu có)" class="form-control">
                                <div class="input-group-append">
                                  <span class="input-group-text">.000</span>
                                </div>
                              </div>
                        
                    </div>
                    <div class="form-group">
                            <label >Thể loại</label>
                            <select class="form-control" name="category">
                            <option value="0">Chọn loại sản phẩm</option>
                                @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                               @endforeach 
                            </select>
                        </div>

                        <div class="form-group">
                                <label>Weight</label>
                                <input class="form-control" name="weight" placeholder="Nhập khối lượng sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>Roast</label>
                                <input class="form-control" name="roast" placeholder="Nhập cách rang" />
                            </div>
                            <div class="form-group">
                                <label>Shelf Life</label>
                                <input class="form-control" name="shelfLife" placeholder="Nhập hạn sử dụng" />
                            </div>
                            <div class="form-group">
                                <label>Particle Size</label>
                                <input class="form-control" name="particleSize" placeholder="Nhập kích thước hạt" />
                            </div>
                            <div class="form-group">
                                <label >Producer</label>
                                <select class="form-control" name="producer">
                                <option value="0">Chọn nhà cung cấp</option>
                                    @foreach($producers as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                   @endforeach 
                                </select>
                            </div>

                            <div class="form-group">
                                    <label>Images</label>
                                   
    
    <input type="file" name="image" multiple="multiple">
                                </div>
                                <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" name="quantity" placeholder="Nhập số lượng sản phẩm" type="number" min="1"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Product Taste</label>
                                        <textarea class="form-control" rows="3" name="taste" placeholder="Nhập mùi vị của sản phẩm"></textarea>
        
                                    </div>
        
                                    <div class="form-group">
                                        <label>Thành phần</label>
                                        <textarea class="form-control" rows="3" name="ingredient" placeholder="Nhập thành phần có trong sản phẩm"></textarea>
                                    </div>
        
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                        <option value="1">Có</option>
                                         
                                         <option value="0">Không</option>
                                        
                                        </select>
                                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Thêm</button>
            
                  <button type="reset" class="btn btn-default">Làm mới</button>
                </div>

              



        
            </div>
            <!-- /.card -->

         
         
           
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-1"></div>
          <div class="col-md-4" >
              @for ($i = 1 ; $i <= 10 ; $i++)
              <div class="form-group">
                  <label >Image Product Detail {{$i}}</label>
                  <input type="file" name="fProductDetail[]">
              </div>
              @endfor
          </div>

        </form>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection