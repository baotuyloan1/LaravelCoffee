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
                        <form action="admin/category/add" method="POST">
                           <input type="hidden" name ="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="nameCategory" placeholder="Please Enter Category Name" />
                            </div>
                           

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                <option value="1">Có</option>
                                 
                                 <option value="0">Không</option>
                                
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                           
                            <button type="submit" class="btn btn-default">Category Add</button>
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