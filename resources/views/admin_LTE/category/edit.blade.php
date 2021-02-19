
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thể loại</h1>
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
              <form action="admin/category/edit/{{$category->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                <div class="card-body">
                  <div class="form-group">

                    <label >Thể loại</label>
                    <input type="text" class="form-control" name="nameCategory" placeholder="Nhập tên thể loại" value="{{$category->name}}">
                  </div>
                


               
                 

                       

                          
                        
                           
                      
                            
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" rows="3" name="description" placeholder="Nhập mùi vị của sản phẩm">{{$category->description}}</textarea>
        
                                    </div>
        
                                  
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status">
                                           
                                          
                                        
                                        <option value="1" @if($category->status==1)  {{"selected"}}  @endif >Có</option>
                                         
                                       
                                         <option value="0"  @if($category->status==0)  {{"selected"}}  @endif>Không</option>
                                        
                                        </select>
                                    </div>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
           
      
      
     






  @endsection