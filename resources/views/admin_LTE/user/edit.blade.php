
@extends('admin_LTE.layout.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa người dùng</h1>
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
                <h3 class="card-title">{{$user->fullName}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                <div class="card-body">
                  <div class="form-group">

                    <label>Tên đầy đủ</label>
                    <input class="form-control" name="fullName" placeholder="Nhập tên người dùng" value="{{$user->fullName}}" />
                  </div>
                

                  <div class="form-group">

                    <label>Email</label>
                    <input class="form-control" type="email" name="emailAddress" placeholder="Nhập địa chỉ Email"  value="{{$user->emailAddress}}" />
                  </div>

                  <div class="form-group">

                    <label>UserName</label>
                    <input   class="form-control" name="username" placeholder="Nhập tên đăng nhập" value="{{$user->name}}" />
                  </div>

               
                  <div class="form-group">
                    <input id="changePassword" type="checkbox" name="changePasssword">
                    <label>Đổi Password</label>
                    <input  type = "password" class="form-control password" name="password" placeholder="Nhập mật khẩu" disabled/>
                </div>
                <div class="form-group">
                    <label>Nhập lại Password</label>
                    <input  type = "password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu"disabled />
                </div>
            
               
                  
                 

                       

                          
                        
                           
                      
                            
                  <div class="form-group">
                    <label>Địa chỉ</label>
                    <input   class="form-control" name="address" placeholder="Nhập nơi ở hiện tại" value="{{$user->address}}" />
                </div>
             
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input   class="form-control" name="numberPhone" placeholder="Nhập số điện thoại" value="{{$user->phoneNumber}}"/>
                </div>
             
                @if (Auth::user()->role['roleName'] == "ADMIN")
                <div class="form-group">
                    <label>Quyền người dùng</label>
                    <label class="radio-inline">
                      
                        <input name="role" value="1" 
                        @if($user->role['id'] == 1)
                             {{"checked"}}
                        @endif
                         type="radio">ADMIN
                    </label>
                    <label class="radio-inline">
                        <input name="role" value="2" 
                        @if($user->role['id'] == 2)
                             {{"checked"}}
                        @endif type="radio">Manager
                    </label>
                    <label class="radio-inline">
                        <input name="role" value="3" 
                        @if($user->role['id'] == 3)
                             {{"checked"}}
                        @endif
                        type="radio" >Thường 
                    </label>
                </div>
                @endif
                
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