@extends('admin.layout.index')

@section('content')



<!-- Page Content -->
<div id="page-wrapper">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">Producer
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
                       <form action="admin/producer/add" method="POST">
                          <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                           <div class="form-group">
                               <label>Producer Name</label>
                               <input class="form-control" name="name" placeholder="Tên nhà cung cấp" />
                           </div>
                          

                           <div class="form-group">
                               <label>Status</label>
                               <input class="form-control" name="status" placeholder="Trạng thái" />
                           </div>

                           <div class="form-group">
                               <label>Address</label>
                               <input class="form-control" name="address" placeholder="Địa chỉ" />
                           </div>

                           
                           <div class="form-group">
                               <label>Email</label>
                               <input class="form-control" name="email" placeholder="Email" />
                           </div>
                           <div class="form-group">
                               <label>Điện thoại</label>
                               <input class="form-control" name="phone" placeholder="Số điện thoại" />
                           </div>


                           <div class="form-group">
                               <label>Producer Description</label>
                               <textarea class="form-control" rows="3" name="description"></textarea>
                           </div>
                          
                           <button type="submit" class="btn btn-default">Producer Add</button>
                           <button type="reset" class="btn btn-default">Reset</button>
                       <form>
                   </div>
               </div>
               <!-- /.row -->
           </div>
           <!-- /.container-fluid -->
       </div>
       <!-- /#page-wrapper -->



@endsection