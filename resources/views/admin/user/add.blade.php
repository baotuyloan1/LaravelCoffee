 @extends('admin.layout.index')

 @section('content')
 <!-- Page Content -->
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                    <form action="admin/user/add" method="POST">
                        <input type="hidden" name ="_token" value="{{csrf_token()}}" />  
                            <div class="form-group">
                                <label>Tên đầy đủ</label>
                                <input class="form-control" name="name" placeholder="Nhập tên người dùng" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="emailAddress" placeholder="Nhập địa chỉ Email" />
                            </div>

                            <div class="form-group">
                                <label>UserName</label>
                                <input   class="form-control" name="username" placeholder="Nhập tên đăng nhập" />
                            </div>
                         


                            <div class="form-group">
                                <label>Password</label>
                                <input  type = "password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input  type = "password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                            </div>
                        
                         
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input   class="form-control" name="address" placeholder="Nhập nơi ở hiện tại" />
                            </div>
                         
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input   class="form-control" name="numberPhone" placeholder="Nhập số điện thoại" />
                            </div>
                         
                            <div class="form-group">
                                <label>Quyền người dùng</label>
                                <label class="radio-inline">
                                    <input name="role" value="1" checked="" type="radio">ADMIN
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="2" checked="" type="radio">Manager
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="3" type="radio" checked>Thường
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->



@endsection