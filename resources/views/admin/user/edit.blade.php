@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">User
                           <small>{{$user->fullName}}</small>
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
                   <form action="admin/user/edit/{{$user->id}}" method="POST">
                       <input type="hidden" name ="_token" value="{{csrf_token()}}" />  
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
                           <button type="submit" class="btn btn-default">Sửa</button>
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

@section('script')

<script>
    $(document).ready(function(){
        $("#changePassword").change(function(){
            if($(this).is(":checked")) {
                $(".password").removeAttr('disabled');
            }
            else {
                $(".password").attr('disabled','');
                
            }
        })
    });
</script>
@endsection